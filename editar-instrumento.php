<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Editado com sucesso!
</div>
<?php }elseif(@$_REQUEST["res"]=="no"){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Não foi possível editar.
</div>
<?php } ?>

<h1>Instrumento Cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="5%">#</th>
		<th>Instrumento</th>
		<th width="20%">Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM instrumento ORDER BY nome_instrumento";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		print "Encontrou <b>".$qtd. "</b> registros";
		
		if($qtd > 0){
			$count = 1;
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$count++."</td>";
				print "<td>".$row["nome_instrumento"]."</td>";
				print "<td>
				
				<a href='?page=form-editar-instrumento&id_instrumento=".$row["id_instrumento"]."' class='btn btn-primary'>Editar</a>
				
				<a href='#' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir&acao=instrumento&id_instrumento=".$row["id_instrumento"]."'}else{false;}\" class='btn btn-danger'>Excluir</a>
				
				</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>