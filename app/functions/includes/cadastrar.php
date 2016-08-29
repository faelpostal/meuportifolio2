<?php

    if(isset($_POST['nomeCliente'])){
        $nome = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_STRING);
        $emailValidado = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_EMAIL);
    
        
        IF(empty (array_filter($_POST)))
        {
            $mensagem = "Todos os campos são obrigatorios";
        }else if(!$emailValidado){
            $mensagem = "Digite um e-mail valido";            
        }else{
            $attributes = [
                "nome" => $nome,
                "email" => $email
            ];
            $clienteCadastrado = cadastrar("clientes", $attributes);
            
            if($clienteCadastrado)
            {
                $mensagem = ($clienteCadastrado) ? "Cadastrado com sucesso !" : "Ocorreu um erro ao cadastrar";
            }
        }
        
        
    }


?>
