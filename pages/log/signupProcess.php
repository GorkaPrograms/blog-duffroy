<?php

//connexion base de données

try{
    $dbh = new PDO('mysql:host=localhost;dbname=blog','root','P@ssw0rd');
}catch(PDOException $e){
    print"Erreur :". $e -> getMessage() ."<br/>";
    die();
}

//hash du mdp

$hashedPassword = password_hash($_POST['password'],PASSWORD_BCRYPT);

//Envoi des données dans la base

$query = $dbh -> prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)');
$query -> execute([
    'firstname'=> $_POST['firstname'],
   'lastname' => $_POST['lastname'],
   'email' => $_POST['email'],
   'password' =>  $hashedPassword,
]);

//Redirection

header('location:login.php');