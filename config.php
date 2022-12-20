<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'edusogno';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";

$nome = $_SESSION['nome'];
$cognome = $_SESSION['cognome'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();

?>

