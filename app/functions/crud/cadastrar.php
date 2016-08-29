<?php

function cadastrar($tabela, $attributes )
{
    //Conecta com o banco
    $pdo = conectar();
    
    //Coleta os indices do array, no caso os campos da tabela
    $keys = array_keys($attributes);
    
    //Coleta os nomes das tabelas em forma de string
    $camposTabela = implode(',', $keys);
    
    //Inicialição de variavel
    $values = null;
    
    //Loop para montar as strings
    foreach($keys as $key)
    {
        $values.=', :'.$key;
    }
    
    //Remove os espaços e a primeira virgula da string
    $values = trim((ltrim($values, ',')));
    
    //var_dump("insert into $tabela ( $camposTabela ) values ( $values )");
    
    //Prepara o SQL
    $cadastrar = $pdo->prepare("insert into $tabela ( $camposTabela ) values ( $values )");
    
    //Executa a SQL
    $cadastrar->execute($attributes);
    
    //Retorna ultimo ID cadastrado
    return $pdo->lastInsertId();
}

?>
