<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Gestione del login+
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query per verificare l'esistenza dell'utente nel database
    $sql = "SELECT * FROM utenti WHERE email = '$email'";
    
 
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
        
        
        if (password_verify($password,$row["password"])) {
            // Login effettuato con successo
            session_start();
           $_SESSION['username'] = $row['username'];

           header('Location: gruppi.php');
            echo("login effettuato");
            exit;

        } else {
            // Password errata
             echo("La password inserita non è corretta.");
        }
    } else {
        // Utente non trovato
        echo("L'utente con questa email non è registrato.");
    }
}

// Chiusura della connessione al database
mysqli_close($conn);
header(("location:gruppi.php"));
?>
