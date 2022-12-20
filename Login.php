<?php 

?>

<div class="container">
    <h1>Hai già un account?</h1>
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
                        <a href="registration.php">Registrati</a>
                    </div>
            </form>
        </div>
    </div>
</div>
