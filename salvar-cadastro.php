<?php
	switch(@$_REQUEST["acao"]){
		case "instrumento":		
			$nome_instrumento = $_REQUEST["nome_instrumento"];
	
			$sql = "INSERT INTO instrumento (nome_instrumento) VALUES ('$nome_instrumento')";
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>location.href='index.php?page=cadastrar-instrumento&res=ok';</script>";
			}else{
				print "<script>location.href='index.php?page=cadastrar-instrumento&res=no';</script>";
			}			
			//print "<a class='btn btn-primary' href='?page=cadastrar-instrumento'>Voltar</a>";
		break;
		case "aula":		
			$nivel_aula = $_REQUEST["nivel_aula"];
			$professor_aula = $_REQUEST["professor_aula"];
	
			$sql = "INSERT INTO aula (nivel_aula, professor_aula) VALUES ('$nivel_aula', '$professor_aula')";
			
			$result = $conn->query($sql);
			
			if($result){
				print "<div style='margin-top: 30px;' class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema</div>";
			}			
			print "<a class='btn btn-primary' href='?page=cadastrar-aula'>Voltar</a>";
		break;
		case "cliente":
			$nome_instrumento = $_REQUEST["instrumento_id_instrumento"];
			$nivel_aula	     = $_REQUEST["aula_id_aula"];
			$nome_cliente     = $_REQUEST["nome_cliente"];
			$tel_cliente      = $_REQUEST["tel_cliente"];
			$email_cliente    = $_REQUEST["email_cliente"];

			
			$sql = "INSERT INTO cliente (instrumento_id_instrumento, aula_id_aula, nome_cliente, tel_cliente, email_cliente) VALUES ($nome_instrumento, $aula_id_aula, '$nome_cliente', '$tel_cliente', '$email_cliente')";			
			
			$result = $conn->query($sql);
			if($result){
				print "<script>location.href='index.php?page=cadastrar-cliente&res=ok';</script>";
			}else{
				print "<script>location.href='index.php?page=cadastrar-cliente&res=no';</script>";
			}
		break;
	}
	
?>


















