<?php

if (empty($_POST["nome"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}


if (strlen($_POST["password"]) < 5) {
    die("Password must be at least 8 characters");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/form.php";

$sql = "INSERT INTO utenti (nome, cognome, email, password)
VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error:  ". $mysqli->error);
};

$stmt->bind_param("sssi", $_POST["nome"], $_POST["cognome"], $_POST["email"], $_POST["password"]);

if ($stmt->execute()) {
    header("Location: PersonalPage.php");
    exit;
} else {
    die($mysqli->error . " " . $mysqli->errno);
}

?>

