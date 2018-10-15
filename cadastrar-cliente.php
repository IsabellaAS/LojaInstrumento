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
<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-cadastro&acao=cliente" method="POST">
			<div class="form-group">
				<label>Instrumento</label>
				<select name="instrumento_id_instrumento" class="form-control">
				<?php
					$sql = "SELECT * FROM instrumento";
					
					$result = $conn->query($sql);
					
					$qtd = $result->num_rows;
					
					if($qtd > 0){
						while($row = $result->fetch_assoc()){
							print "<option value='".$row["id_instrumento"]."'>".$row["nome_instrumento"]."</option>";
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
					$sql = "SELECT * FROM aula";
					
					$result = $conn->query($sql);
					
					$qtd = $result->num_rows;
					
					if($qtd > 0){
						while($row = $result->fetch_assoc()){
							print "<option value='".$row["id_aula"]."'>".$row["nivel_aula"]."</option>";
						}
					}else{
						print "<option>Não encontrou resultados</option>";
					}
				?>
				</select>
			</div>
			<div class="form-group">
				<label>Cliente</label>
				<input type="text" name="nome_cliente" class="form-control" />
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="text" name="tel_cliente" class="form-control" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email_cliente" class="form-control" />
			</div>
			<button type="submit" class="btn btn-primary">
				Cadastrar
			</button>
		</form>
	</div>
</div>
<h1>Clientes Cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Instrumento</th>
		<th>Aula</th>
		<th>Cliente</th>
		<th>Telefone</th>
		<th>Email</th>
	</tr>
	<?php
		$sql = "SELECT * FROM cliente c
				INNER JOIN aula a ON c.aula_id_aula = a.id_aula
				INNER JOIN instrumento i ON a.instrumento_id_instrumento = i.id_instrumento";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		print "Existem <b>".$qtd."</b> cliente";
		
		if($qtd > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_cliente"]."</td>";
				print "<td>".$row["instrumento"]."</td>";
				print "<td>".$row["nivel_aula"]."</td>";
				print "<td>".$row["nome_cliente"]."</td>";
				print "<td>".$row["tel_cliente"]."</td>";
				print "<td>".$row["email_cliente"]."</td>";
				print "</tr>";
			}
		}else{
			print "Não há registros";
		}
	?>
</table>































