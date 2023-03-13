<?php

//connexion base de données

try{
    $dbh = new PDO('mysql:host=localhost;dbname=blog','root','P@ssw0rd');
}catch(PDOException $e){
    print("Error :"). $e -> getMessage() ."<br/>";
    die();
}

$mail = $_POST['email'];
echo($mail);

//recherche du mail


$query = $dbh -> prepare('SELECT id, email, password FROM users WHERE email=?');
$query -> execute([$_POST['email']]);

$user = $query->fetch();

//Verification du mot de passe

if ($user){
    if(password_verify($_POST['password'], $user['password'])){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['is connected'] = true;

        unset($_SESSION['error-connection']);

        header('location:../home/home.php');
    }else{
        session_start();
        $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

        header('location:login.php');
    }
}else {
    session_start();
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    header('location: ../../index.php');
}