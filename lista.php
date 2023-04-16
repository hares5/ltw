<!DOCTYPE html>
<html>
<head>
    
	<title>Lista elementi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="listestyle.css">
    <div id="valore"></div>

    <div id="valore"></div>


  
</head>
<body>
<?php $id1 = $_GET['valore']; ?>
<div class="col-md-9">
<ul class="list-group">
    <form id="elementi" action="aggiungielementi.php?valore=<?php echo $id1;?>" method="POST">
            <l1>
                <button class="btn btn-outline-danger" id="add_elem"><i class="fa fa-plus"></i> Aggiungi nuovo elemento</button>
            <div class="mt-3" id="contenitoreInput" style="display:block ;">
                <input type="text" class="form-control" name="elemento" id="inputTesto" placeholder="Inserisci del testo">
                
                <input type="submit" value="Invia">
</form>
                
</l1>

</ul>
    </div>
    
	<h1>Lista elementi</h1> 
    <h2> <a href="gruppi.php" > TORNA AI TUOI GRUPPI</a></h2> 
	<table>
		<thead>
			<tr>
				<th><?php echo $id1 ?></th>
				<th>Nome elemento  </th>
			</tr>
		</thead>
		<tbody>
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
					echo "<tr>";
					
					echo "<td>" . $row["nome_elemento"] . "</td>";
					echo "</tr>";
				}

				// Chiusura della connessione al database
				mysqli_close($conn);
			?>
		</tbody>
	</table>
    <script>
        document.getElementById("add_elem").addEventListener('click', function ()  {
            var contenitoreInput = document.getElementById('contenitoreInput');
            if (contenitoreInput.style.display == 'none') {
                contenitoreInput.style.display = 'block';
            } else {
                contenitoreInput.style.display = 'none';
            }
        });
        </script>
    

</body>
</html>
