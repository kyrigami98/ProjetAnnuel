<?php

session_start();
include_once 'connect.php';
include_once 'fonction.php';
//die(var_dump($_POST['pane']));

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) &&
        isset($_POST['pass']) && $_POST['nom'] != '' && $_POST['prenom'] != '' &&
        $_POST['email'] != '' && $_POST['pass'] != ''
) { //isset verifie si quelque chose existe
    $nom = ($_POST['nom']);
    $prenom = $_POST['prenom'];
    $email = ($_POST['email']);
    $pwd = crypterPwd($_POST['pass']);
    $statut = ($_POST['statut']);

    $val = array(':email' => $email, ':pwd' => $pwd, ':statut' => $statut);
    $req = "SELECT idUser, COUNT(idUser) as nb FROM user WHERE email = :email AND pwd = :pwd AND statut = :statut";
    $res = $cnx->prepare($req);
    $res->execute($val);
    $row = $res->fetch(PDO::FETCH_OBJ);
    if ($row->nb == 0) {

        $val = array(':email' => $email, ':nom' => $nom, ':prenom' => $prenom, ':statut' => $statut, ':pwd' => $pwd,);
        $req = "INSERT INTO user (email, nom, prenom, statut, pwd) VALUES (:email,:nom,:prenom,:statut,:pwd)";
        $res = $cnx->prepare($req);
        $r = $res->execute($val);
        //die(var_dump($r));
        if ($r) {

            $_SESSION["email"] = $email;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["statut"] = $statut;
            $_SESSION['message'] = $row->prenom . " " . $row->nom;
            header('location:../accueil.php');
            exit;
        }
    } else {
        $_SESSION["error"] = "VOUS ETES DEJA INSCRIT".$row->prenom . " " . $row->nom;
        header('location:../index.php');
        exit;
    }
} else {
    $_SESSION["error"] = "Renseigrer tout les champs s'il vous plait";
    header('location:../index.php');
    exit;
}