<?php
	switch(@$_REQUEST["acao"]){
		case "instrumento":		
			$nome_instrumento = $_REQUEST["nome_instrumento"];
	
			$sql = "UPDATE instrumento SET nome_instrumento='$nome_instrumento' WHERE id_instrumento=".$_REQUEST["id_instrumento"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>location.href='index.php?page=editar-instrumento&res=ok';</script>";
			}else{
				print "<script>location.href='index.php?page=editar-instrumento&res=no';</script>";
			}			
			//print "<a class='btn btn-primary' href='?page=cadastrar-instrumento'>Voltar</a>";
		break;
		case "aula":		
			$nivel_aula = $_REQUEST["nivel_aula"];
			$professor_aula = $_REQUEST["professor_aula"];
	
			$sql = "UPDATE aula SET nivel_aula='$nivel_aula', professor_aula='$professor_aula' WHERE id_aula=".$_REQUEST["id_aula"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<div style='margin-top: 30px;' class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema</div>";
			}			
			print "<a class='btn btn-primary' href='?page=editar-aula'>Voltar</a>";
		break;
		case "cliente":
			$instrumento    = $_REQUEST["instrumento_id_instrumento"];
			$aula 	             = $_REQUEST["aula_id_aula"];
			$nome_cliente        = $_REQUEST["nome_cliente"];
			$tel_cliente         = $_REQUEST["tel_cliente"];
			$email_cliente       = $_REQUEST["email_cliente"];
			
			$sql = "UPDATE cliente SET instrumento_id_instrumento=$instrumento, aula_id_aula=$aula, nome_cliente='$cliente', tel_cliente='$telefone', email_cliente='$email' WHERE id_cliente=".$_REQUEST["id_cliente"];			
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>location.href='index.php?page=editar-cliente&res=ok';</script>";
			}else{
				print "<script>location.href='index.php?page=editar-cliente&res=no';</script>";
			}
		break;
	}
	
?>


















