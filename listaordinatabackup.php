<!DOCTYPE html>
<html>
<head>
    
	<title>Lista elementi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="liststyle.css">
    


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
	<span class ="lista"></span>
  <?php <span class ="lista">
	<h1 id="list">Lista elementi</h1> 
    <h2> <a href="gruppi.php" > TORNA AI TUOI GRUPPI</a></h2> 
	<label for="sort-by">Ordina per:</label>
	/*<select name="sort-by" id="sort-by" onchange="ordinaElementi();">

  <option value="nome">nome</option>
  <option value="categoria">categoria</option>
  <option value="data">Data di aggiunta</option>
</select>*/

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
    
</tbody>?>

<div class="l1">
	
    <?php 
	$sort_by = '';
	include 'ordina_elementi.php'; 
	?>
</div>
			
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
	
	$('#sort-by').change(function(){
		var selectedData = $(this).val();
		$.ajax({
			type: "POST",
			url: "ordina_elementi.php",
			data: {'selectedData':selectedData,id:<?php echo $id1;?>},
			success: function(result){
	
    $(".lista").html(result);
	$(".l1").hide();
	

}
		})
	})
  });
  function ordinaElementi() {
	var selectedData = $(this).val();
   // var sort_by = document.getElementById("sort-by").value;
    $.ajax({
        url: "ordina_elementi.php",
        type: 'POST',
        data: {'selectedData':selectedData,id:<?php echo $id1;?>},
        success: function(data) {
			$("#lista").append(data);
          //  $('#lista').html(data);
			alert(data);
        }
    });
}



</script>


  
    

</body>
</html>