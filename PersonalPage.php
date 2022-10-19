<?php
    $cards = [
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
            "date" =>  "15-10-2022 15:00",
        ],
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
            "date" =>  "15-10-2022 15:00",
        ],
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
            "date" =>  "15-10-2022 15:00",
        ]
        ];

        session_start();

        if (isset($_Session["utente_id"])) {
            $mysqli = require __DIR__ . "/php/db_conn.php";
            $sql = "SELECT * FROM utenti
            WHERE id = {$_SESSION["utente_id"]}";

            $result = $mysqli->query($sql);
            $utente = $result->fetch_assoc();
        }
?>

<head>
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<div class="container">
    <?php include 'TheHeader.php';?>
    

    <div class="d-flex">
    <?php if (isset($utente)): ?>
        <div class="mb-30">Ciao  <?= htmlspecialchars($utente["nome"]) ?> ecco i tuoi eventi</div>
    <?php endif; ?>
        <?php
            foreach($cards as $card) : ?>
                <div class="card">
                    <ul>
                        <li>
                            <h2><?php echo $card["title"]?></h2>
                        </li>
                        <li>
                            <div><?php echo $card["date"]?></div>
                        </li>
                        <li>
                            <a href="">
                                <div class="button mb-30 text-center">JOIN</div>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endforeach;?>
    </div>
</div>