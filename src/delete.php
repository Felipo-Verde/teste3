<?php

require_once "banco.php";
require_once "tabelas.php";

if ($_POST['UD'] == 'Deletar') {
    $id = intval($_POST['id_usuario']);
    $sth = $conn->prepare("DELETE FROM tb_usuario WHERE id_usuario = :id");
    $sth->bindParam(':id', $id);
    $sth->execute();
    header("Location: index.php");
} else {
    echo "Erro";
}

?>