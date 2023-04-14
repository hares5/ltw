<?php
        // Connessione al database MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sito_web";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
       
        require "le_tue_liste3.php"; 
        
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
        $sql = "UPDATE liste SET lista1 = '$var' where gruppo = '$gruppo'";
        
        if (mysqli_query($conn,$sql)) {
            echo $gruppo;
            echo "Modifica eseguita con successo";
        } else {
            echo "Errore durante la modifica: " . $conn->error;
        }
    
    
    }
           else if($lista2==NULL){
        // Esecuzione della query per modificare l'email dell'utente con id=1
        $sql = "UPDATE liste SET lista2 = '$var' where gruppo = '$gruppo'";
        
        if (mysqli_query($conn,$sql)) {
            echo $gruppo;
            echo "Modifica eseguita con successo";
        } else {
            echo "Errore durante la modifica: " . $conn->error;
        }
    

    }
       else if($lista3==NULL){
    // Esecuzione della query per modificare l'email dell'utente con id=1
    $sql = "UPDATE liste SET lista3 = '$var' where gruppo = '$gruppo'";
    
    if (mysqli_query($conn,$sql)) {
        echo $gruppo;
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