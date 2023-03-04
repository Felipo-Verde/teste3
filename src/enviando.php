<?php

    require_once "banco.php";
    require_once "tabelas.php";

    if (!isset($_POST['notificacao'])) {
        $_POST['notificacao'] = 0;
    }

    insertInto_usuario();

    header("Location: index.php");

?>