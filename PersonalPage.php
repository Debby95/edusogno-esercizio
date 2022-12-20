<?php

    $cards = [
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
        ],
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
        ],
        [
            "title" =>  "Nome evento",
            "date" =>  "15-10-2022 15:00",
        ]
    ];


        session_start();

        if (!isset($_SESSION["utenti"])) {
            $mysqli = require __DIR__ . "config.php";
            $sql = "SELECT * FROM utenti
            WHERE id = {$_SESSION["id"]}";

            $result = $mysqli->query($sql);
            echo $result;
            $utenti = $result->fetch_assoc();
            echo $utenti;
            echo "<script>console.log({$result} );</script>";
            echo "<script>console.log({$utenti} );</script>";

            $_SESSION["utenti"] = $utenti;
            $nome = $_SESSION['nome'];
        }

        
?>

<head>
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<div class="container">
    <?php include 'TheHeader.php';?>
    
    <div class="text-center">
        <?php if (!isset($utenti)): ?>
            <div class="mb-30">Ciao <?php echo $_SESSION["utenti"]["nome"]?>!</div>

        <?php endif; ?>
        <div class="d-flex">
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
</div>