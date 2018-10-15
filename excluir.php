<?php
	switch(@$_REQUEST["acao"]){
		case "instrumento":
	
			$sql = "DELETE FROM instrumento WHERE id_instrumento=".$_REQUEST["id_instrumento"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-instrumento';</script>";
			}else{
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='index.php?page=editar-instrumento';</script>";
			}			
			//print "<a class='btn btn-primary' href='?page=cadastrar-instrumento'>Voltar</a>";
		break;
		case "aula":
	
			$sql = "DELETE FROM aula WHERE id_aula=".$_REQUEST["id_aula"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-aula';</script>";
			}else{
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-aula';</script>";
			}
		break;
		case "cliente":
			
			$sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];			
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-cliente';</script>";
			}else{
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-cliente';</script>";
			}
		break;
	}
	
?>


















