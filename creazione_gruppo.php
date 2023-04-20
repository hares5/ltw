<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
header("Location:gruppi.php");
// Controllo se la connessione al database è riuscita
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Prendo i valori dal form di registrazione
$gruppo = mysqli_real_escape_string($conn, $_POST['name']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = password_hash($password, PASSWORD_BCRYPT);


// Query SQL per inserire i dati nel database
$sql = "INSERT INTO liste (gruppo, password)
VALUES ('$gruppo', '$hash')";
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

   




           
        /*   if (mysqli_query($conn,$sql1)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }*/



           session_start();
           $_SESSION["username"];
           $user=$_SESSION["username"];
           echo $user;
   
      
           

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
           $sql = "UPDATE gruppi SET gruppo1 = '$gruppo' WHERE utente='$user'";
           
           if (mysqli_query($conn,$sql)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }
       
       
       }
              else if($gruppo2==NULL){
           // Esecuzione della query per modificare l'email dell'utente con id=1
           $sql = "UPDATE gruppi SET gruppo2 = '$gruppo' WHERE utente='$user'";
           
           if (mysqli_query($conn,$sql)) {
               echo "Modifica eseguita con successo";
           } else {
               echo "Errore durante la modifica: " . $conn->error;
           }
       
   
       }
          else if($gruppo3==NULL){
       // Esecuzione della query per modificare l'email dell'utente con id=1
       $sql = "UPDATE gruppi SET gruppo3 = '$gruppo' WHERE utente='$user'";
       
       if (mysqli_query($conn,$sql)) {
           echo "Modifica eseguita con successo";
       } else {
           echo "Errore durante la modifica: " . $conn->error;
       }
   }
   else{
       die("numero massimo liste raggiunto");
   }
   
}

mysqli_close($conn);
?>
