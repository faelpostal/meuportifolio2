<?php

if (isset ($_GET['excluir']) AND $_GET['excluir']== true)
{
    $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $registroExcluido = deletar("id", $id, "clientes");
    
    $mensagem = ($registroExcluido) ? "Ecluido com sucesso !" : "Ocorreu um erro ao excluir o cliente";

}
?>
