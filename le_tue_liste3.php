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
        $lista1=NULL;
        $lista2=NULL;
        $lista3=NULL;
        ?>
</head>
<body>

    <!-- Contenitore principale -->
    <div class="container-fluid">
 
 <!-- Riga della griglia -->
 <div class="row">
 <div class="col-md-3">
     <h3>Le tue liste:</h3>
     <ul class="list-group">
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
        $id1=$row['lista1'];?>
       <li class="list-group-item" id="lis1"> <a href="lista.php?valore=<?php echo $id1;?>">
       
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
        $id1=$row['lista1'];
        $sql2="SELECT nomelista from idliste where id ='$id1'";
 $result2=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) == 1) {
     $row = mysqli_fetch_assoc($result2);
             $lista1=$row["nomelista"];
            echo $lista1;}
            else{
             echo "";
            }
        
         ?>
         </a>
       </li>
       




       <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "sito_web";
 
         $conn = mysqli_connect($servername, $username, $password, $dbname);
     /*  $data1 = $_GET['data1'];
         $gruppo=$data1;*/
         
         $sql = "SELECT lista2 FROM liste WHERE gruppo = '$gruppo'";

         $result = mysqli_query($conn, $sql);
        // echo ($result);
        $row = mysqli_fetch_assoc($result);
        $id2=$row['lista2'];?>
       <li class="list-group-item" id="lis1" ><a href="lista.php?valore=<?php echo $id2;?>">
       
       <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "sito_web";
 
         $conn = mysqli_connect($servername, $username, $password, $dbname);
     /*  $data1 = $_GET['data1'];
         $gruppo=$data1;*/
         
         $sql = "SELECT lista2 FROM liste WHERE gruppo = '$gruppo'";

         $result = mysqli_query($conn, $sql);
        // echo ($result);
        $row = mysqli_fetch_assoc($result);
        $id2=$row['lista2'];
        $sql2="SELECT nomelista from idliste where id ='$id2'";
 $result2=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) == 1) {
     $row = mysqli_fetch_assoc($result2);
             $lista2=$row["nomelista"];
            echo $lista2;}
            else{
             echo "";
            }
         ?>
 </a>
        </li>


        <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "sito_web";
 
         $conn = mysqli_connect($servername, $username, $password, $dbname);
     /*  $data1 = $_GET['data1'];
         $gruppo=$data1;*/
         
         $sql = "SELECT lista3 FROM liste WHERE gruppo = '$gruppo'";

         $result = mysqli_query($conn, $sql);
        // echo ($result);
        $row = mysqli_fetch_assoc($result);
        $id3=$row['lista3'];?>
       <li class="list-group-item" id="lis1"> <a href="lista.php?valore=<?php echo $id3;?>">
       <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "sito_web";
 
         $conn = mysqli_connect($servername, $username, $password, $dbname);
     /*  $data1 = $_GET['data1'];
         $gruppo=$data1;*/
         
         $sql = "SELECT lista3 FROM liste WHERE gruppo = '$gruppo'";

         $result = mysqli_query($conn, $sql);
        // echo ($result);
        $row = mysqli_fetch_assoc($result);
        $id3=$row['lista3'];
        $sql2="SELECT nomelista from idliste where id ='$id3'";
 $result2=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) == 1) {
    $row = mysqli_fetch_assoc($result2);
            $lista3=$row["nomelista"];
           echo $lista3;}
           else{
            echo "";
           }
           
         ?>
         </a>
       </li>   <ul>
        <h4 id="crea_lista"><i class="fa fa-plus"></i> Crea nuova lista</h4>
       <form class="mt-1" id="lista" style="display: block;" action="update_liste.php" method="POST">
        <input type="text" class="form-control" id="inputLista" name="nomelista" placeholder="Inserisci del testo">
        
        <input type="submit" value="Invia" class="bottoncino">

       
    </form>
    
        
        </ul></li>
       <!-- Aggiungi ulteriori elementi della lista a seconda dei gruppi dell'utente -->
     </ul>
 </div>
 <div class="col-md-3">
     <h3>Lista <?php echo $lista1 ?>:</h3>
     <ul class="list-group">
     <form id="elementi" action="ae3.php?valore=<?php echo $id1;?>" method="POST">
            <l1>
                <button class="btn btn-outline-dark" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display:block ;">
                <input type="text" class="form-control" name="elemento" id="inputTesto" placeholder="Inserisci del testo">
                
                <input type="submit" value="Invia" class="bottoncino">
</form>
         <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id1'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
   
    if (mysqli_num_rows($result)<1 ){
        echo "";
    }else{
        $elemento1=$row["nome_elemento"]; 
        echo $elemento1;
    }
          
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id1'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result);
     mysqli_data_seek($result, 1);
    $second_row = mysqli_fetch_array($result);
    
    if (mysqli_num_rows($result)<2 ){
        echo "";
    }else{
        $elemento2=$second_row["nome_elemento"]; 
        echo $elemento2;
    }
            
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id1'";
    $result = mysqli_query($conn, $sql2);
    mysqli_data_seek($result, 2);

    $third_row = mysqli_fetch_assoc($result);
    mysqli_data_seek($result, 2);
    $second_row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) <3){
        echo "";
    }else{
        $elemento3=$second_row["nome_elemento"]; 
        echo $elemento3;
    }
?>
</li>
       <!-- Aggiungi ulteriori elementi della lista a seconda delle liste dell'utente -->
     </ul>
   </div>
   <div class="col-md-3">
     <h3>Lista <?php echo $lista2 ?>:</h3>
     <ul class="list-group">
     <form id="elementi" action="ae3.php?valore=<?php echo $id2;?>" method="POST">
            <l1>
                <button class="btn btn-outline-dark" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display:block ;">
                <input type="text" class="form-control" name="elemento" id="inputTesto" placeholder="Inserisci del testo">
                
                <input type="submit" value="Invia" class="bottoncino">
</form>
         <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id2'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
   
    if (mysqli_num_rows($result)<1 ){
        echo "";
    }else{
        $elemento1=$row["nome_elemento"]; 
        echo $elemento1;
    }
          
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id2'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result);
     mysqli_data_seek($result, 1);
    $second_row = mysqli_fetch_array($result);
    
    if (mysqli_num_rows($result)<2 ){
        echo "";
    }else{
        $elemento2=$second_row["nome_elemento"]; 
        echo $elemento2;
    }
            
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id2'";
    $result = mysqli_query($conn, $sql2);
    mysqli_data_seek($result, 2);

    $third_row = mysqli_fetch_assoc($result);
     
    $second_row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)<3 ){
        echo "";
    }else{
        $elemento3=$third_row["nome_elemento"]; 
        echo $elemento3;
    }
    
    ?>  </li>
       <!-- Aggiungi ulteriori elementi della lista a seconda delle liste dell'utente -->
     </ul>
   </div>
   <div class="col-md-3">
     <h3>Lista <?php echo $lista3 ?>:</h3>
     <ul class="list-group">
     <form id="elementi" action="ae3.php?valore=<?php echo $id3;?>" method="POST">
            <l1>
                <button class="btn btn-outline-dark" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display:block ;">
                <input type="text" class="form-control" name="elemento" id="inputTesto" placeholder="Inserisci del testo">
                
                <input type="submit" value="Invia" class="bottoncino">
</form>
         <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id3'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
   
    if (mysqli_num_rows($result)<1 ){
        echo "";
    }else{
        $elemento1=$row["nome_elemento"]; 
        echo $elemento1;
    }
          
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id3'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result);
     mysqli_data_seek($result, 1);
    $second_row = mysqli_fetch_array($result);
    
    if (mysqli_num_rows($result)<2 ){
        echo "";
    }else{
        $elemento2=$second_row["nome_elemento"]; 
        echo $elemento2;
    }
            
    ?> </li>

       <li class="list-group-item" id="lis1"><?php $servername = "localhost"; $username = "root"; $password = "";$dbname = "sito_web";
     $sql2 = "SELECT * FROM lista_elementi WHERE id='$id3'";
    $result = mysqli_query($conn, $sql2);
    mysqli_data_seek($result, 2);

    $third_row = mysqli_fetch_assoc($result);
     
    $second_row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)<3 ){
        echo "";
    }else{
        $elemento3=$third_row["nome_elemento"]; 
        echo $elemento3;
    }
?>
</li>
       
       <!-- Aggiungi ulteriori elementi della lista a seconda delle liste dell'utente -->
     </ul>
   </div>
 </div> <!-- Fine della riga della griglia -->


</div> <!-- Fine del contenitore principale -->


<div class="navbar navbar-fixed-bottom">
 
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