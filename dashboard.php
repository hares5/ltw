<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Homepage - Dashboard</title>
  <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>
    <nav>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="gruppi.html">I Tuoi Gruppi</a></li>
            <li><a href="#">Crea Nuovo Gruppo</a></li>
            <li><a href="logout.php">Esci</a></li>
        </ul>
    </nav>

    <div class="container" >
        <h1>Benvenuto! <?php 
            session_start();
            $_SESSION["username"];
            $username = $_SESSION["username"];
            echo $username;
        ?>   </h1>
        <p>Questa è la tua homepage,</p>
    </div>
</body>
</html>