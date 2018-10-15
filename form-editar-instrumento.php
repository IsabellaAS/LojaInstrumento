<h1>Editar Instrumento</h1>
<?php
	$sql = "SELECT * FROM instrumento WHERE id_instrumento = ".$_REQUEST["id_instrumento"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){			
?>
<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-editar&acao=instrumento&id_instrumento=<?php print $row["id_instrumento"]; ?>" method="POST">
			<div class="form-group">
				<label>Nome do Instrumento</label>
				<input type="text" name="nome_instrumento" class="form-control" value="<?php print $row["nome_instrumento"]; ?>" />
			</div>
			<button type="submit" class="btn btn-primary">
				Editar
			</button>
		</form>
	</div>
</div>
<?php
		}//fim do while
	}else{
		print "Não foi possível encontrar resultados";
	}
?>

