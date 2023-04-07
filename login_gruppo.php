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
$gruppo = mysqli_real_escape_string($conn, $_POST['gruppo']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query per verificare l'esistenza dell'utente nel database
    $sql = "SELECT * FROM liste WHERE gruppo = '$gruppo'";
    
 
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
        
        
        if (password_verify($password,$row["password"])) {
            // Login effettuato con successo
            session_start();
           $_SESSION['gruppo'] = $row['gruppo'];

           header("Location: le_tue_liste.php");
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
?>
