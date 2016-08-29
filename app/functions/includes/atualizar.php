<?php

    if(isset($_POST['nomeClienteAt'])){
        $id = filter_input(INPUT_POST, 'idAt', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nomeClienteAt', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'emailClienteAt', FILTER_SANITIZE_STRING);
        $emailValidado = filter_input(INPUT_POST, 'emailClienteAt', FILTER_SANITIZE_EMAIL);
    
        
        IF(empty (array_filter($_POST)))
        {
            $mensagem = "Todos os campos são obrigatorios";
        }else if(!$emailValidado){
            $mensagem = "Digite um e-mail valido";            
        }else{
            $attributes = [
                "id" => $id,
                "nome" => $nome,
                "email" => $email
            ];
            $clienteCadastrado = atualizar($id, "clientes", $attributes);
            
            if($clienteCadastrado)
            {
                $mensagem = ($clienteCadastrado) ? "Atualização concluida !" : "Ocorreu um erro ao atualizar";
            }
        }
        
        
    }


?>
