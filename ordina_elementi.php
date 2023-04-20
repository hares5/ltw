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


// Recupero il valore del parametro "sort-by" dalla query string
if (isset($_POST['selectedData']) && isset($_POST['selectedData'])){
$sort_by = $_POST['selectedData'];
$id1 = $_POST['id'];}
echo "sort: " . $sort_by . " ";
echo "id: " . $id1;
// Query per recuperare la lista degli elementi, ordinati in base alla scelta dell'utente
$sql = "SELECT * FROM lista_elementi WHERE id='$id1'";
if ($sort_by == 'categoria') {
    $sql .= "ORDER BY categoria, nome_elemento";
} else if ($sort_by == 'nome'){
    $sql .= "ORDER BY nome_elemento";
}
 else  {
    $sql .= "";
 }
$result = mysqli_query($conn, $sql);

?>
<span class ="lista">
	<h1 id="list">Lista elementi</h1> 
    <h2> <a href="gruppi.php" > TORNA AI TUOI GRUPPI</a></h2> 
	<label for="sort-by">Ordina per:</label>
	<select name="sort-by" id="sort-by" onchange="ordinaElementi();">

  <option value="nome">nome</option>
  <option value="categoria">categoria</option>
  <option value="data">Data di aggiunta</option>
</select>

	<table>
		<thead>
			<tr>
				
				<select id="categoria2">
  <option value="">Tutte le categorie</option>
  <option value="opzione1">Opzione 1</option>
  <option value="opzione2">Opzione 2</option>
  <option value="opzione3">Opzione 3</option>
</select>
</span>
			</tr>
		</thead>
		
		<tbody >
    
</tbody>
<table class="tab">
    <thead>
        <tr>
            <th>Nome Elemento</th>
            <th>Quantità</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td class="c"><?php echo $row['nome_elemento']; ?></td>
                <td><?php echo $row['quantita']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
mysqli_close($conn);

?>
