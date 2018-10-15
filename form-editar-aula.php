<h1>Editar Aula</h1>
<?php
	$sql = "SELECT * FROM aula WHERE id_aula=".$_REQUEST["id_aula"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
?>
<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-editar&acao=aula&id_aula=<?php print $row["id_aula"]; ?>" method="POST">
			<div class="form-group">
				<label>Nível da Aula</label>
				<input type="text" name="nivel_aula" value="<?php print $row["nivel_aula"]; ?>" class="form-control" />
			</div>
			<div class="form-group">
				<label>Professor</label>
				<input type="text" name="professor_aula" value="<?php print $row["professor_aula"]; ?>" class="form-control" />
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
		print "Nenhum registro encontrado foi encontrado.";
	}

?>