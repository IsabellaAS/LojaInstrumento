<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Editar com sucesso!
</div>
<?php }elseif(@$_REQUEST["res"]=="no"){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Não foi possível editar.
</div>
<?php } ?>

<h1>Clientes Cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Instrumento</th>
		<th>Aula</th>
		<th>Cliente</th>
		<th>Telefone</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM cliente c
				INNER JOIN instrumento i ON c.instrumento_id_instrumento = i.id_instrumento
				INNER JOIN aula a ON c.aula_id_aula = a.id_aula";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		print "Existem <b>".$qtd."</b> livros";
		
		if($qtd > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_cliente"]."</td>";
				print "<td>".$row["instrumento"]."</td>";
				print "<td>".$row["nivel_aula"]."</td>";
				print "<td>".$row["nome_cliente"]."</td>";
				print "<td>".$row["tel_cliente"]."</td>";
				print "<td>".$row["email_cliente"]."</td>";
				print "<td>
				
				<a href='?page=form-editar-cliente&id_cliente=".$row["id_cliente"]."' class='btn btn-primary'>Editar</a>
				
				<a href='#' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir&acao=cliente&id_cliente=".$row["id_cliente"]."';}else{false;}\" class='btn btn-danger'>Excluir</a>
				
				</td>";
				print "</tr>";
			}
		}else{
			print "Não há registros";
		}
	?>
</table>































