<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_GET['valore'];
header("Location: lista.php?valore=$id");
echo $id;
// Controllo se la connessione al database è riuscita
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

$elemento = mysqli_real_escape_string($conn, $_POST['elemento']);

echo $elemento;


$sql="INSERT INTO lista_elementi(id,nome_elemento) VALUES ('$id','$elemento')";
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    
    echo "Registrazione completata con successo!";
} else {
    echo "Errore durante la registrazione: " . mysqli_error($conn);
}

?>
