<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    //die("Connessione al database fallita: " . mysqli_connect_error());
}

// Gestione del login+
$gruppo = $_POST['gruppo'];
$password = $_POST['password'];

    // Query per verificare l'esistenza dell'utente nel database
    $sql = "SELECT * FROM liste WHERE gruppo = '$gruppo'";
    
 
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
        
        
        if (password_verify($password,$row["password"])) {
            // Login effettuato con successo
            session_start();
           //$_SESSION['gruppo'] = $row['gruppo'];
           echo ("login effettuato");
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
           
           if (mysqli_query($conn,$sql)) {
              
           } else {
               
           }
       
       
       }
              else if($gruppo2==NULL){
           // Esecuzione della query per modificare l'email dell'utente con id=1
           $sql = "UPDATE gruppi SET gruppo2 = '$var' WHERE utente='$user'";
           
           if (mysqli_query($conn,$sql)) {
              
           } else {
               
           }
       
   
       }
          else if($gruppo3==NULL){
       // Esecuzione della query per modificare l'email dell'utente con id=1
       $sql = "UPDATE gruppi SET gruppo3 = '$var' WHERE utente='$user'";
       
       if (mysqli_query($conn,$sql)) {
           
       } else {
           
       }
   }
   else{
       //die("numero massimo liste raggiunto");
   }
   




           
           if (mysqli_query($conn,$sql1)) {
           } else {
               
           }
   
   // Chiusura della connessione al database
   mysqli_close($conn);

           //header("Location: gruppi.php");
            
            exit;

        } else {
            // Password errata
             
        }
    } else {
        // Utente non trovato
        
    }


     
?>
