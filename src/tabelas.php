<?php

function select_barbeiros() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_barbeiros");
	$sth->execute();
	return $sth->fetchAll();
}

function select_servicos() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_corte");
	$sth->execute();
	return $sth->fetchAll();
}

function select_usuario() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tb_usuario, tb_corte, tb_barbeiros WHERE tb_usuario.servico = tb_corte.id AND tb_usuario.servico = tb_barbeiros.id;");
	$sth->execute();
	return $sth->fetchAll();
}

function insertInto_usuario() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO tb_usuario (nome, email, telefone, data, servico, barbeiro, notificacao, corte) VALUES (:nome, :email, :telefone, :data, :servico, :barbeiro, :notificacao, :corte)");
	$sth->bindParam(':nome', $_POST['nome']);
	$sth->bindParam(':email', $_POST['email']);
	$sth->bindParam(':telefone', $_POST['telefone']);
	$sth->bindParam(':data', $_POST['data']);
	$sth->bindParam(':servico', $_POST['servico']);
	$sth->bindParam(':barbeiro', $_POST['barbeiro']);
	$sth->bindParam(':notificacao', $_POST['notificacao']);
	$sth->bindParam(':corte', $_POST['corte']);
	$sth->execute();
}

function update_usuario() {
	global $conn;
	$sth = $conn->prepare("UPDATE tb_usuario SET nome = :nome, email = :email, telefone = :telefone, data = :data, servico = :servico, barbeiro = :barbeiro, notificacao = :notificacao, corte = :corte WHERE id_usuario = :id");
	$sth->bindParam(':id', $_POST['id_usuario']);
	$sth->bindParam(':nome', $_POST['nome']);
	$sth->bindParam(':email', $_POST['email']);
	$sth->bindParam(':telefone', $_POST['telefone']);
	$sth->bindParam(':data', $_POST['data']);
	$sth->bindParam(':servico', $_POST['servico']);
	$sth->bindParam(':barbeiro', $_POST['barbeiro']);
	$sth->bindParam(':notificacao', $_POST['notificacao']);
	$sth->bindParam(':corte', $_POST['corte']);
	$sth->execute();
}

?>
