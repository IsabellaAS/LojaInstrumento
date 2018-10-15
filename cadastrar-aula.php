<h1>Cadastrar Aula</h1>
<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-cadastro&acao=aula" method="POST">
			<div class="form-group">
				<label>Nível da aula</label>
				<input type="text" name="nivel_aula" class="form-control" />
			</div>
			<div class="form-group">
				<label>Professor</label>
				<input type="text" name="professor_aula" class="form-control" />
			</div>
			<button type="submit" class="btn btn-primary">
				Cadastrar
			</button>
		</form>
	</div>
</div>
<h1>Autores Cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nível</th>
		<th>Professor</th>
	</tr>
	<?php
		$sql = "SELECT * FROM aula";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		print "Encontrou <b>".$qtd. "</b> registros";
		
		if($qtd > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_aula"]."</td>";
				print "<td>".$row["nivel_aula"]."</td>";
				print "<td>".$row["professor_aula"]."</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>