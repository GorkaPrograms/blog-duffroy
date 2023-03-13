<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../style/reset.css">
    <link rel="stylesheet" href="../../style/log.css">
    <link rel="icon" type="image/x-icon" href="../../img/logo.PNG">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Travel Talk</title>
</head>
<body>

<div class="container">

    <div class="logoContainer">
        <img id="logo" src="../../img/logo.PNG">
    </div>

    <div class="aligner">
        <form id="logForm" action="loginProcess.php" method="post">
            <h1>Connexion</h1>

            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
            <button type="submit" id="submitButton">Me connecter</button>
        </form>

        <div class="noAccount">
            <h2>Pas de compte ?</h2>
            <a href="signup.php">Créer un compte</a>
        </div>

        <div class="contact">
            <h3>Besoin d'aide ?</h3>
            <a href="#">Nous contacter</a>
        </div>
    </div>

</div>

</body>
</html>
