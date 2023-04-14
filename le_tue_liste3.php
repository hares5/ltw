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
         require "gruppi.php";
         
       
        $username=$_SESSION["username"];
        $gruppo = $gruppo3;
        ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="top_bar">
        <a class="navbar-brand" href="home_page.html">
          <img src="logo.png" alt="TogetherList Logo" height="50" width="70">
        </a>
        <?php echo $gruppo?>
        <ul>
        <l1><button class="btn btn-outline-secondary" id="crea_lista"><i class="fa fa-plus"></i> Crea nuova lista</button>
        <form class="mt-2" id="lista" style="display: none;" action="update_liste3.php" method="POST">
        <input type="text" class="form-control" id="inputLista" name="nomelista" placeholder="Inserisci del testo">
        
        <input type="submit" value="Invia">

       
</form>
    </div></l1>
        <l1><button class="btn btn-outline-primary"><i class="fa fa-user"></i><?php echo $username?></button></l1>
        </ul>
    </nav>
    <!-- Contenitore principale -->
  <div class="container-fluid">

    <!-- Riga della griglia -->
    <div class="row">
    <div class="col-md-3">
        <h3>Le tue liste:</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sito_web";
    
            $conn = mysqli_connect($servername, $username, $password, $dbname);
        /*  $data1 = $_GET['data1'];
            $gruppo=$data1;*/

            $sql = "SELECT lista1 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql);
           // echo ($result);
           $row = mysqli_fetch_assoc($result);
           $lista1=$row['lista1'];

           echo $lista1;
            ?>
          </li>
          
          <li class="list-group-item"><?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sito_web";
    
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            

            $sql = "SELECT lista2 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql);
           // echo ($result);
           $row = mysqli_fetch_assoc($result); 
           $lista2=$row['lista2'];
           echo $lista2; ?></li>
          <li class="list-group-item"> <?php $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sito_web";
    
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            

            $sql = "SELECT lista3 FROM liste WHERE gruppo = '$gruppo'";
            $result = mysqli_query($conn, $sql);
           // echo ($result);
           $row = mysqli_fetch_assoc($result); 
           $lista3=$row['lista3'];
           echo $lista3; ?></li></li>
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
          <li class="list-group-item">Elem1</li>
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