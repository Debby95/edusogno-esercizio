<?php

    include 'TheHeader.php';
?>
<head>
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <h1>Hai già un account?</h1>
        <div class="signin-form">
            <div class="form">
                <form action="/php/db_conn.php" method="POST">
                    <!-- name -->
                    <label class="mb-10">Inserisci il nome</label>
                    <input placeholder="Mario" type="text" id="nome" name="nome" required>
                    <!-- surname -->
                    <label  class="mb-10">Inserisci il cognome</label>
                    <input placeholder="Rossi" type="text" id="cognome" name="cognome" required>
                    <!-- email -->
                    <label  class="mb-10">Inserisci l'email</label >
                    <input placeholder="name@example.com" type="text" id="email" name="email" required>
                    <!-- psw -->
                    <label  class="mb-10">Inserisci la password</label >
                    <input placeholder="Scrivila qui" type="password" id="password" name="password" required>
                    <!-- signin -->
                    <a href="PersonalPage.php" type="submit">
                        <div class="button mb-30 text-center">REGISTRATI</div>
                    </a>
                    
                    <div class="text-center">Hai un account? 
                        <a href="Login.php">Accedi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

