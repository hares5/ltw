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
$password = mysqli_real_escape_string($conn, $_POST['password_gruppo']);

    // Query per verificare l'esistenza dell'utente nel database
    $sql = "SELECT * FROM liste WHERE gruppo = '$gruppo'";
    
 
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
        
        
        if (password_verify($password,$row["password"])) {
            // Login effettuato con successo
            session_start();
           //$_SESSION['gruppo'] = $row['gruppo'];
           
           $_SESSION["username"];
           $user=$_SESSION["username"];
           $var = $_POST['gruppo'];
   
      
           

           $sql1 ="SELECT gruppo1 FROM gruppi WHERE utente= '$user'";
           $result = mysqli_query($conn, $sql1);
              // echo ($result);
              $row = mysqli_fetch_assoc($result);
              $gruppo1=$row['gruppo1'];
   
              $sql2 ="SELECT gruppo2 FROM gruppi WHERE utente= '$user'";
           $result = mysqli_query($conn, $sql2);
              // echo ($result);
              $row = mysqli_fetch_assoc($result);
              $gruppo2=$row['gruppo2'];
   
              
              $sql3 ="SELECT gruppo3 FROM gruppi WHERE utente= '$user'";
           $result = mysqli_query($conn, $sql3);
           // echo ($result);
           $row = mysqli_fetch_assoc($result);
           $gruppo3=$row['gruppo3'];
   
              if($gruppo1==NULL){
           // Esecuzione della query per modificare l'email dell'utente con id=1
           $sql = "UPDATE gruppi SET gruppo1 = '$var' WHERE utente='$user'";
           
           if (mysqli_query($conn,$sql1)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }
       
       
       }
              else if($gruppo2==NULL){
           // Esecuzione della query per modificare l'email dell'utente con id=1
           $sql = "UPDATE gruppi SET gruppo2 = '$var' WHERE utente='$user'";
           
           if (mysqli_query($conn,$sql)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }
       
   
       }
          else if($gruppo3==NULL){
       // Esecuzione della query per modificare l'email dell'utente con id=1
       $sql = "UPDATE gruppi SET gruppo3 = '$var' WHERE utente='$user'";
       
       if (mysqli_query($conn,$sql)) {
           echo "Modifica eseguita con successo";
       } else {
           echo "Errore durante la modifica: " . $conn->error;
       }
   }
   else{
       die("numero massimo liste raggiunto");
   }
   




           
           if (mysqli_query($conn,$sql1)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }
   
   // Chiusura della connessione al database
   mysqli_close($conn);

           header("Location: gruppi.php");
            echo("login effettuato");
            exit;

        } else {
            // Password errata
             echo("La password inserita non è corretta.");
        }
    } else {
        // Utente non trovato
        echo("Gruppo non trovato");
    }
}

     
?>
