<?php 

    $is_invalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $mysqli = require __DIR__ . "/php/db_conn.php";

        $sql = sprintf("SELECT * FROM utenti 
                WHERE email = '%s'",
                $mysqli->real_escape_string($_POST["email"]));

        $result = $mysqli->query($sql);

        $utente = $result->fetch_assoc();

        if ($utente) {
            if(password_verify($_POST["password"], $utente["password"]))
            session_start();
            $_SESSION["utente_id"] = $utente["id"];

            header("Location: ../Login.php");
            exit;
        }

        $is_invalid = true;
    }
?>

<div class="container">
    <h1>Hai già un account?</h1>
    <?php if($is_invalid): ?>
        <em>Invalid Login</em>
        <?php endif; ?>
        <div class="login-form">
            <div class="form">
                <form action="" method="POST">
                    <!-- email -->
                    <div class="mb-10">Inserisci l'email</div>
                    <input placeholder="name@example.com" type="email" name="email" id="email"
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" >
                    <!-- psw -->
                    <div class="mb-10">Inserisci la password</div>
                    <input placeholder="Scrivila qui" type="password">
                    <!-- login -->
                    <!-- <input type="submit">ok -->
                    <a href="PersonalPage.php">
                        <div class="button mb-30 text-center">ACCEDI</div> 
                    </a>

                    <div class="text-center">Non hai un account? 
                        <a href="SignIn.php">Registrati</a>
                    </div>
            </form>
        </div>
    </div>
</div>
