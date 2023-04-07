<!-- Codice HTML per la pagina degli utenti registrati -->
<!DOCTYPE html>
<html>
<head>
     <!-- Metatag e link al CSS -->
    <meta charset="UTF-8">
    <title>TogetherList</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.y.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivjquerr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        // Connessione al database MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sito_web";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Controllo se la connessione al database è riuscita
        if (!$conn) {
            die("Connessione al database fallita: " . mysqli_connect_error());
        }

        // Prendo i valori dal form di registrazione
        session_start();
        $_SESSION["gruppo"];
        $nome_lista = mysqli_real_escape_string($conn, $_POST['inputLista']);
        $gruppo1 = $_SESSION["gruppo"];
        echo $gruppo;


        // Query SQL per inserire i dati nel database
        $sql = "UPDATE liste  SET lista1 = $nome_lista
        WHERE liste.gruppo = $gruppo1";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "Registrazione completata con successo!";
        } else {
            echo "Errore durante la registrazione: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="top_bar">
        <a class="navbar-brand" href="home_page.html">
          <img src="logo.png" alt="TogetherList Logo" height="50" width="70">
        </a>
        <h2><?php
        session_start();
        $_SESSION["gruppo"];
        $gruppo=$_SESSION["gruppo"];
        echo $gruppo; ?></h2>
        <ul>
        <l1><button class="btn btn-outline-secondary" id="crea_lista"><i class="fa fa-plus"></i> Crea nuova lista</button>
        <div class="mt-2" id="lista" style="display: none;">
        <input type="text" class="form-control" id="inputLista" placeholder="Inserisci del testo">
        <input type="submit" value="Invia">
    </div></l1>
        <l1><button class="btn btn-outline-primary"><i class="fa fa-user"></i> <?php
        session_start();
        $_SESSION["username"];
        $username=$_SESSION["username"];
        echo $username; ?></button></l1>
        </ul>
    </nav>
    <!-- Contenitore principale -->
  <div class="container-fluid">

    <!-- Riga della griglia -->
    <div class="row">
    <div class="col-md-3">
        <h3>Le tue liste:</h3>
        <ul class="list-group">
          <li class="list-group-item">Lista 1</li>
          <li class="list-group-item">Lista 2</li>
          <li class="list-group-item">Lista 3</li>
          <!-- Aggiungi ulteriori elementi della lista a seconda dei gruppi dell'utente -->
        </ul>
    </div>
    <div class="col-md-9">
        <h3>Lista X:</h3>
        <ul class="list-group">
            <l1>
                <button class="btn btn-outline-danger" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display: none;">
                <input type="text" class="form-control" id="inputTesto" placeholder="Inserisci del testo">
                <input type="submit" value="Invia">
            </div></l1>
          <li class="list-group-item">Elem 1</li>
          <li class="list-group-item">Elem 2</li>
          <li class="list-group-item">Elem 3</li>
          <!-- Aggiungi ulteriori elementi della lista a seconda delle liste dell'utente -->
        </ul>
      </div>
    </div> <!-- Fine della riga della griglia -->

</div> <!-- Fine del contenitore principale -->


<div class="navbar navbar-fixed-bottom">
    <footer class="footer">
        <h2>About TogetherList</h2>
        <p>TogetherList is a social networking platform designed to connect people with similar interests and facilitate real-life interactions. Our mission is to bring people together and build stronger communities.</p>
    </footer>
</div>
<script>
        document.getElementById("add_elem").addEventListener('click', function ()  {
            var contenitoreInput = document.getElementById('contenitoreInput');
            if (contenitoreInput.style.display == 'none') {
                contenitoreInput.style.display = 'block';
            } else {
                contenitoreInput.style.display = 'none';
            }
        });
        document.getElementById("crea_lista").addEventListener('click', function ()  {
            var lista = document.getElementById('lista');
            if (lista.style.display == 'none') {
                lista.style.display = 'block';
            } else {
                lista.style.display = 'none';
            }
        });
    </script>
</body>
</html>
