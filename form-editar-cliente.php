<h1>Cadastrar Cliente</h1>
<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Cadastrado com sucesso!
</div>
<?php }elseif(@$_REQUEST["res"]=="no"){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Não foi possível cadastrar.
</div>
<?php } ?>

<?php
	$sql = "SELECT * FROM cliente c
			INNER JOIN instrumento i 
			ON i.id_instrumento = c.instrumento_id_instrumento
			INNER JOIN aula a
			ON a.id_aula = c.aula_id_aula
			WHERE id_cliente=".$_REQUEST["id_ciente"];
	
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
?>
<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-editar&acao=cliente&id_cliente=<?php print $row["id_cliente"]; ?>" method="POST">
			<div class="form-group">
				<label>Instrumento</label>
				<select name="instrumento_id_instrumento" class="form-control">
				<?php
					print "<option value='".$row["id_instrumento"]."'>".$row["nome_instrumento"]."</option>";
					print "<option></option>";
				
					$sql1 = "SELECT * FROM instrumento";
					
					$result1 = $conn->query($sql1);
					
					$qtd1 = $result1->num_rows;
					
					if($qtd1 > 0){
						while($row1 = $result1->fetch_assoc()){
							print "<option value='".$row1["id_instrumento"]."'>".$row1["nome_instrumento"]."</option>";
						}
					}else{
						print "<option>Não encontrou resultados</option>";
					}
				?>
				</select>
			</div>			
			<div class="form-group">
				<label>Aula</label>
				<select name="aula_id_aula" class="form-control">
				<?php
					print "<option value='".$row["id_aula"]."'>".$row["nivel_aula"]."</option>";
					print "<option></option>";
				
					$sql2 = "SELECT * FROM aula";
					
					$result2 = $conn->query($sql2);
					
					$qtd2 = $result2->num_rows;
					
					if($qtd2 > 0){
						while($row2 = $result2->fetch_assoc()){
							print "<option value='".$row2["id_aula"]."'>".$row2["nivel_aula"]."</option>";
						}
					}else{
						print "<option>Não encontrou resultados</option>";
					}
				?>
				</select>
			</div>
			<div class="form-group">
				<label>Cliente</label>
				<input type="text" name="nome_cliente" value="<?php print $row["nome_cliente"]; ?>" class="form-control" />
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="text" name="tel_cliente" value="<?php print $row["tel_cliente"]; ?>" class="form-control" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email_cliente" value="<?php print $row["email_cliente"]; ?>"  class="form-control" />
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
		print "Nenhum registro encontrado";
	}
?>