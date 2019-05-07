<?php


    function verifierEmail($value) {
        $value = strtolower(trim(strip_tags($value)));
        if (!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/", $value)) {
            return false;
        }
        return true;
    }

    function verifierPwd($value) {
        $value = strtolower(trim(strip_tags($value)));
        if (mb_strlen($value) < 4) {
            return false;
        }
        return true;
    }

    function crypterPwd($value) {
        return md5($value);
    }

    function identifier($email, $pwd, $statut) {

        $val = array(':email' => $email, ':pwd' => $pwd, ':statut' => $statut);
        $req = "SELECT idUser, COUNT(idUser) as nb FROM user WHERE email = :email AND pwd = :pwd AND statut = :statut";
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
        if ($row->nb == 0) {
            return false;
        } else {
            return $row->idUser;
        }
    }

    function inscription($email, $nom, $prenom, $statut, $pwd) {

        $val = array(':email' => $email, ':nom' => $nom, ':prenom' => $prenom, ':statut' => $statut, ':pwd' => $pwd,);
        $req = "INSERT INTO user (email, nom, prenom, statut, pwd) VALUES (:email,:nom,:prenom,:statut,:pwd)";
        $res = $cnx->prepare($req);
        $res->execute($val);
    }

    /*
      Méthode new object user from db ( statique )
      @return object
      @param idUser
     */

    function constructFromDb($id) {
        $cnx = new connexion();
        $val = array(':id' => $id);
        $req = "SELECT * FROM user WHERE idUser = :id";
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
        $user = new user($row->idUser, $row->email, $row->pwd, $row->statut);
        return $user;
    }

    /*
      Méthode collection new objects user from db ( statique )
      @return object collection
      @param user statut ( 0 = membre || 1 = admin ), limit ( x,y )
     */

    function constructAllFromDb($param) {
        $cnx = new connexion();
        $where = null;
        $limit = null;
        $val = null;
        $collection = new collection();
        if (isset($param[0])) {
            /* $where = "WHERE statut = :id";
              $val[':id'] = $param[0]; */
            $where = "WHERE statut = " . $param[0];
        }
        if (isset($param[1])) {
            /* $limit = "LIMIT :limit";
              $val[':limit'] = $param[1]; */
            $limit = "LIMIT " . $param[1];
        }
        $req = "SELECT * FROM user " . $where . ' ' . $limit;
        $res = $cnx->prepare($req);
        $res->execute($val);
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            $user = new user($row->idUser, $row->email, $row->pwd, $row->statut);
            $collection->add($user);
        }
        return $collection;
    }

    /*
      Méthode user operations
     */

    function loguer() {
        $_SESSION['user'] = serialize($this);
    }

    function updateDb() {
        $cnx = new connexion();
        if ($this->id == null) {
            $val = array(':email' => $this->email, ':pwd' => $this->pwd, ':statut' => $this->statut);
            $req = "INSERT INTO user (idUser, email, pwd, statut) VALUES ('', :email, :pwd, :statut)";
        } else {
            $val = array(':idUser' => $this->id, ':email' => $this->email, ':statut' => $this->statut);
            $req = "UPDATE user SET email = :email, statut = :statut WHERE idUser = :idUser";
        }
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
    }

    function delFromDb() {
        $cnx = new connexion();
        $val = array(':idUser' => $this->id);
        $req = "DELETE FROM user WHERE idUser = :idUser";
        $res = $cnx->prepare($req);
        $res->execute($val);
    }

