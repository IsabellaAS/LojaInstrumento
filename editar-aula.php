<h1>Aulas Cadastradas</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nivel</th>
		<th>Professor</th>
		<th>Ações</th>
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
				print "<td>
				
				<a href='?page=form-editar-aula&id_aula=".$row["id_aula"]."' class='btn btn-primary'>Editar</a>
				
				<a href='#' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir&acao=aula&id_aula=".$row["id_aula"]."'}else{false;}\" class='btn btn-danger'>Excluir</a>
				
				</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>