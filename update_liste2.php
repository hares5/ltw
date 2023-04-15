<?php
        // Connessione al database MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sito_web";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        header('Location: le_tue_liste2.php');
        require "le_tue_liste2.php"; 
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nomelista = mysqli_real_escape_string($conn, $_POST['nomelista']); }
            $var=$nomelista;
            
            
            // Prendo i valori dal form di registrazione
    
            // Query SQL per inserire i dati nel database
            if ($conn->connect_error) {
                die("Connessione fallita: " . $conn->connect_error);
            }
            $sql1 ="SELECT lista1 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql1);
               // echo ($result);
               $row = mysqli_fetch_assoc($result);
               $lista1=$row['lista1'];
               echo $lista1;
    
               $sql2 ="SELECT lista2 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql2);
               // echo ($result);
               $row = mysqli_fetch_assoc($result);
               $lista2=$row['lista2'];
    
               
            $sql3 ="SELECT lista3 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql3);
            // echo ($result);
            $row = mysqli_fetch_assoc($result);
            $lista3=$row['lista3'];
    
               if($lista1==NULL){
            // Esecuzione della query per modificare l'email dell'utente con id=1
            $sql = "INSERT INTO idliste (nomelista) VALUES ('$var')";
            if (mysqli_query($conn,$sql)) {
                
                echo "Modifica eseguita con successo";
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
            $sql2="SELECT * FROM idliste where nomelista='$var'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
           
            $id=$row2["id"];
            $sql3="UPDATE liste set lista1='$id' where gruppo='$gruppo'";
            
          
            if (mysqli_query($conn,$sql3)) {
                
                echo "Modifica eseguita con successo";
                
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
        
        
        }
               else if($lista2==NULL){
            // Esecuzione della query per modificare l'email dell'utente con id=1
            $sql = "INSERT INTO idliste (nomelista) VALUES ('$var')";
            if (mysqli_query($conn,$sql)) {
                
                echo "Modifica eseguita con successo";
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
            $sql2="SELECT * FROM idliste where nomelista='$var'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
           
            $id=$row2["id"];
            $sql3="UPDATE liste set lista2='$id' where gruppo='$gruppo'";
            
          
            if (mysqli_query($conn,$sql3)) {
                header("Location: le_tue_liste2.php");
                
                echo "Modifica eseguita con successo";
                
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
        
    
        }
           else if($lista3==NULL){
        // Esecuzione della query per modificare l'email dell'utente con id=1
        $sql = "INSERT INTO idliste (nomelista) VALUES ('$var')";
            if (mysqli_query($conn,$sql)) {
                
                echo "Modifica eseguita con successo";
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
            $sql2="SELECT * FROM idliste where nomelista='$var'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
           
            $id=$row2["id"];
            $sql3="UPDATE liste set lista3='$id' where gruppo='$gruppo'";
            header("Location: le_tue_liste2.php");
          
            if (mysqli_query($conn,$sql3)) {
                
                echo "Modifica eseguita con successo";
                
                
            } else {
                echo "Errore durante la modifica: " . $conn->error;
            }
    }
    else{
        die("numero massimo liste raggiunto");
    }
    
       
            
            // Chiusura della connessione
            mysqli_close($conn);
            ?>
             