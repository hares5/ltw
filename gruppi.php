<!DOCTYPE html>
<html>
<head>
     <!-- Metatag e link al CSS -->
    <meta charset="UTF-8">
    <title>TogetherList</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="gruppistyle.css">

   
       
     
    </script>         
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="top_bar">
        <a class="navbar-brand" href="index.php">
          <img src="immagini/TOGETHERLIST.png" alt="TogetherList Logo" height="50" width="70">
        </a>
        <ul class="ml-auto">
        <l1><a href="crea_gruppo.php"><button class="btn btn-outline-secondary"><i class="fa fa-plus"></i> Crea nuovo gruppo</button></a></l1>
        <l1><a  href="pagina_login_gruppo.php"> <button class="btn btn-outline-secondary"><i class="fa fa-plus"></i> Unisciti ad un gruppo</button></a></l1>
        <l1 class="dropdown-container"> 
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" id="dropdownbutton" aria-expanded="false"><i class="fa fa-user"></i> 
        <?php
        session_start();
        $user=$_SESSION["username"];
        $_SESSION["gruppo"]="";
        echo $user; ?><span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownbutton">
            <l1><a class="dropdown-item" href="">Gestisci gruppi</a></l1>
            <l1><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>Effettua logout</a></l1>
        </ul>
        </div>
        </l1>
        </ul>
    </nav>
    <div class="container mt-5">
        <h1>I TUOI GRUPPI</h1>
        <ul class="list-group mt-4">
        <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sito_web";
            
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    $sql = "SELECT gruppo1 FROM gruppi WHERE utente = '$user'";
                    $result = mysqli_query($conn, $sql);
                    // echo ($result);
                    $row = mysqli_fetch_assoc($result); 
                    $gruppo1=$row['gruppo1'];
                   
                    ?>
            <li class="list-group-item" id="1" ><a href="le_tue_liste.php">
                    <?php
                    echo $gruppo1; 
                    
                    ?>
                   
            </a></li>
            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sito_web";
            
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    $sql = "SELECT gruppo2 FROM gruppi WHERE utente = '$user'";
                    $result = mysqli_query($conn, $sql);
                    // echo ($result);
                    $row = mysqli_fetch_assoc($result); 
                    $gruppo2=$row['gruppo2']; 
                   ?>
            <li class="list-group-item" id="2"><a href="le_tue_liste2.php">
           <?php
                    echo $gruppo2; 
                    ?>
            </a></li>
            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sito_web";
            
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    $sql = "SELECT gruppo3 FROM gruppi WHERE utente = '$user'";
                    $result = mysqli_query($conn, $sql);
                    // echo ($result);
                    $row = mysqli_fetch_assoc($result); 
                    $gruppo3=$row['gruppo3'];
                     ?>
            <li class="list-group-item" id="3"  clicked="false"><a href="le_tue_liste3.php">
            <?php
                   
                    echo $gruppo3; 
                    ?>
        
        </a></li>
            <!-- Aggiungi altri elementi della lista per i gruppi a cui l'utente è iscritto -->
        </ul>
    </div>
        <h1> 
         <?php echo $_SESSION["gruppo"]; ?> </h1>
    <script>
        
        $(".list-group-item").hover(mouseEnter, mouseLeave);
        function mouseEnter(){
            var elem = $(this).text().trim();
            //console.log("text:"+elem+';');
            if (elem != ''){
                $(this).append("<i class='fa fa-trash-o float-right'></i>");
                $(this).css("background", "white");
                
                $(".fa").click(function(){

                    $.ajax({
                        url: "elimina_gruppo.php",
                        type:'POST',
                        data:{gruppo:elem}, // il nome del file PHP che vuoi eseguire
                        
                        success: function(result){
                            //alert(result)
                            location.reload() // mostra l'output del codice PHP
                        }
                    });
                });
            }
        };
        function mouseLeave(){
            $(this).css("background", "bisque");
            $("i").remove();
        }
        
    </script>
</body>
</html>
