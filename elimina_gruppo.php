<?php
header("Location: gruppi.php");
    session_start();
    $username = $_SESSION["username"];
    $nome_gruppo = trim($_POST["gruppo"]);
    // echo "username: " . $username . " gruppo: " . $nome_gruppo;

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "sito_web";
    $conn = mysqli_connect($host, $user, $password, $dbname);
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM  gruppi WHERE utente='$username'";
    $result=mysqli_query($conn,$sql);
   $row= mysqli_fetch_assoc($result);
    $gruppo1=trim($row["gruppo1"]);
    $gruppo2=trim($row["gruppo2"]);
    $gruppo3=trim($row["gruppo3"]);
    if($nome_gruppo==$gruppo1){
        echo "a";
        $sql2="UPDATE gruppi SET gruppo1=NULL where utente='$username'";
        if (mysqli_query($conn, $sql2)) {
            }
        else {
        }
    }
    else if($nome_gruppo==$gruppo3){
        echo "a";
        $sql2="UPDATE gruppi SET gruppo3=NULL where utente='$username'";
        if (mysqli_query($conn, $sql2)) {
            }
        else {
        }
    }
    else if($nome_gruppo==$gruppo2){
        echo "a";
        $sql2="UPDATE gruppi SET gruppo2=NULL where utente='$username'";
        if (mysqli_query($conn, $sql2)) {
            }
        else {
        }
    }

    
    
?>