<?php
    session_start();
    $username = $_SESSION["username"];
    $id_lista = $_POST["id"];
    $nome=$_POST["nome"];
    // echo "username: " . $username . " gruppo: " . $nome_gruppo;

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "sito_web";
    $conn = mysqli_connect($host, $user, $password, $dbname);
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }
    echo "id: " . $id_lista;
    echo "nome: ".$nome;
    $sql="UPDATE idliste SET nomelista='$nome' WHERE id='$id_lista'";
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        
        echo "Registrazione completata con successo!";
    } else {
        echo "Errore durante la registrazione: " . mysqli_error($conn);
    }

?>