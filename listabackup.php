<!DOCTYPE html>
<html>
<head>
    
	<title>Lista elementi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="listastyle.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="top_bar">
        <a class="navbar-brand" href="index.php">
          <img src="immagini/TOGETHERLIST.png" alt="TogetherList Logo" height="50" width="70">
        </a>
        <ul class="ml-auto" >
		<l1><a  href="gruppi.php"> <button class="btn btn-outline-secondary"><i class="fa fa-plus"></i>I tuoi gruppi</button></a></l1>
        
        <l1 class="dropdown-container"> 
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" id="dropdownbutton" aria-expanded="false"><i class="fa fa-user"></i> 
        <?php
        session_start();
        $user=$_SESSION["username"];
        
        echo $user; ?><span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownbutton">
            <l1><a class="dropdown-item" href="">Gestisci gruppi</a></l1>
            <l1><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>Effettua logout</a></l1>
        </ul>
       
        </l1>
        </ul>
    </nav>


</head>
<body onload="assegnaEventHandlers();">
<?php $id1 = $_GET['valore']; ?>
<div class="col-md-9">
<ul class="list-group">
    <form id="elementi" action="aggiungielementi.php?valore=<?php echo $id1;?>" method="POST">
            <l1>
                <button class="btn btn-outline-danger" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display:block ;">
                <input type="text" class="form-control" name="elemento" id="inputTesto" placeholder="Inserisci del testo">
</form>
  <label for="categoria">Seleziona una opzione:</label>
  <select id="categoria" name="categoria">
    <option value="opzione1">Opzione 1</option>
    <option value="opzione2">Opzione 2</option>
    <option value="opzione3">Opzione 3</option>
  </select>
  <input type="text" class="form-control" name="quantita" id="inputquantita" placeholder="Inserisci la quantità">


                
                <input type="submit" value="Invia">

                
</l1>

</ul>
    </div>
    <span class ="lista">
	<h1 id="list">Lista elementi</h1> 
    
<!--	<label for="sort-by">Ordina per:</label>
<select name="sort-by" id="sort-by">
  <option value="nome">nome</option>
  <option value="categoria">categoria</option>
  <option value="data">Data di aggiunta</option> 
</select> -->

	<table>
		<thead>
			<tr>
				<th>Nome Elemento</th>
				<th>Quantita</th>
				<th>Categoria</th>
				<select id="categoria2">
  <option value="">Tutte le categorie</option>
  <option value="opzione1">Opzione 1</option>
  <option value="opzione2">Opzione 2</option>
  <option value="opzione3">Opzione 3</option>
</select>

			</tr>
		</thead>
		
		<tbody id="lista" >
			<?php
				// Connessione al database
				$host = "localhost";
				$user = "root";
				$password = "";
				$dbname = "sito_web";
				$conn = mysqli_connect($host, $user, $password, $dbname);
				if (!$conn) {
					die("Connessione al database fallita: " . mysqli_connect_error());
				}

				// Query per recuperare la lista degli elementi
				$sql = "SELECT * FROM lista_elementi WHERE id='$id1'";
				$result = mysqli_query($conn, $sql);

				// Ciclo sui risultati della query e stampo la lista degli elementi
				while ($row = mysqli_fetch_assoc($result)) {
					$elemento = $row["nome_elemento"];
					$quantita = $row["quantita"];
					$categoria=$row["categoria"];

					echo "<tr>";
					echo "<td class='c'>" . $elemento . "</td>";
					echo "<td class='c'>" . $quantita . "</td>";
					echo "<td class='c'>" . $categoria . "</td>";
					echo "</tr>";
				}

				// Chiusura della connessione al database
				mysqli_close($conn);
			?>
		</tbody>
			
	</table>
			</span>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("add_elem").addEventListener('click', function ()  {
            var contenitoreInput = document.getElementById('contenitoreInput');
            if (contenitoreInput.style.display == 'block') {
                contenitoreInput.style.display = 'none';
            } else {
                contenitoreInput.style.display = 'block';
            }
        });
		function sbarra(e){
			e.target.style.textDecoration = "line-through";
		}
		function ripristina(e){
			e.target.style="initial";
		}
		function assegnaEventHandlers(){
			var classe1=document.getElementsByClassName("c");
			for(i=0;i<classe1.length;i++){
			
			classe1[i].addEventListener("click",sbarra);}
			}

		
		$(document).ready(function(){
			$(".c").dblclick(function(){
				var valore = $(this).text();
				console.log(valore);
				$.ajax({
					url: "codice_php.php",
					type:'POST',
					data:{elemento:valore,id:<?php echo $id1;?>}, // il nome del file PHP che vuoi eseguire
					
					success: function(result){
						
						location.reload() // mostra l'output del codice PHP
					}
				});
			});
		}); 
		
  $(document).ready(function() {
    // Aggiungi un evento al menu a tendina categoria
    $('#categoria2').change(function() {
      var categoria = $(this).val(); // Ottieni il valore della categoria selezionata
      $('#lista tr').each(function() {
        var rowCategoria = $(this).find('td:eq(2)').text(); // Ottieni la categoria della riga corrente
        if (categoria == '' || categoria == rowCategoria) { // Verifica se la riga deve essere mostrata o nascosta
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });


</script>


  
    

</body>
</html>

