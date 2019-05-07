<?php

session_start();
include_once 'connect.php';
include_once 'fonction.php';
//die(var_dump($_POST['pane']));

if (isset($_POST['mail']) && isset($_POST['pass']) &&
        $_POST['mail'] != '' && $_POST['pass'] != ''
) { //isset verifie si quelque chose existe
    $email = ($_POST['mail']);
    $pwd = crypterPwd($_POST['pass']);
    $statut = ($_POST['statut']);

    $val = array(':email' => $email, ':pwd' => $pwd, ':statut' => $statut);
    $req = "SELECT * FROM user WHERE email = :email AND pwd = :pwd AND statut = :statut";
    $res = $cnx->prepare($req);
    $res->execute($val);
    $row = $res->fetch(PDO::FETCH_OBJ);
    
    if ($row) {

        $_SESSION["idUser"] = $row->idUser;
        $_SESSION["email"] = $row->email;
        $_SESSION["nom"] = $row->nom;
        $_SESSION["prenom"] = $row->prenom;
        $_SESSION['message']= $row->prenom." ".$row->nom;
        //die(var_dump($_SESSION));
       header('location:../accueil.php');
        exit;
    } else {
         $_SESSION["error"] = "Vous n'etes pas inscrit";
        echo "Vous n'etes pas inscrit";
        header('location:../index.php');
    }
} else {
    $_SESSION["error"] = "Renseigrer tout les champs s'il vous plait";
    header('location:../index.php');
    exit;
}