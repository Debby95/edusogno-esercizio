<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['registrati'])) {
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
            echo "set|".$nome."|";
        }else {
            echo "set|".$nome."|";
            $nome = "";
        }if(isset($_POST["cognome"])){
            $cognome = $_POST["cognome"];
        }else {
            $cognome = "";
        }if(isset($_POST["email"])){
            $email = $_POST["email"];
        }else {
            $email = "";
        }if(isset($_POST["password"])){
            $password = $_POST["password"];
        }else {
            $password = "";
        }
    } 
}
    include 'TheHeader.php';
?>
<head>
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <h1>Registrati</h1>
        <div class="signin-form">
            <div class="form">
                <form action="registration.php" method="post">
                    <!-- name -->
                    <label for="nome" class="mb-10">Inserisci il nome</label>
                    <input placeholder="Mario" type="text" id="nome" name="nome" required value="">
                    <!-- surname -->
                    <label for="cognome" class="mb-10">Inserisci il cognome</label>
                    <input placeholder="Rossi" type="text" id="cognome" name="cognome" required value="">
                    <!-- email -->
                    <label for="email" class="mb-10">Inserisci l'email</label >
                    <input placeholder="name@example.com" type="text" id="email" name="email" required value="">
                    <!-- psw -->
                    <label for="password"  class="mb-10">Inserisci la password</label >
                    <input placeholder="Scrivila qui" type="password" id="password" name="password" required value="">
                    <!-- signin -->
                    <input class="button mb-30 text-center" type="submit" value="registrati">
                    <div class="text-center">Hai un account?  -->
                        <a href="login.php">Accedi</a>
                    </div>
                </form>
                     
                    
                     
                
            </div>
        </div>
    </div>
</body>