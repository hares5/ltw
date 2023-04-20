<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sito_web";
$id1=$_POST["id"];
$elemento=$_POST["elemento"];
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}
$sql="DELETE FROM lista_elementi WHERE id='$id1' AND nome_elemento='$elemento'";
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    
    echo "elemento" . $elemento;
    echo "id" . $id1;
} else {
    echo "Errore durante la registrazione: " . mysqli_error($conn);
}
 ?>