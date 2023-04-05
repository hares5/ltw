<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controllo se la connessione al database è riuscita
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Prendo i valori dal form di registrazione
$username = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = password_hash($password, PASSWORD_BCRYPT);


// Query SQL per inserire i dati nel database
$sql = "INSERT INTO utenti (username, email, password)
VALUES ('$username', '$email', '$hash')";
if(strlen($password)<8){
    die("Password troppo breve");
}
else {
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "Registrazione completata con successo!";
} else {
    echo "Errore durante la registrazione: " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>


            