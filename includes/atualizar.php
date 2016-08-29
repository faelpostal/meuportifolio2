<?php
    $id=$_GET['id'];
    $nome=$_GET['nome'];
    $email=$_GET['email'];
    
?>

<h2>Atualizar</h2>

<form class="col s12" action="../Projeto_PDO/" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="ID" name="idAt" type="text" class="validate" value="<?php echo $id; ?>">
            <label for="first_name" class="active">Nome</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="Nome" name="nomeClienteAt" type="text" class="validate" value="<?php echo $nome; ?>">
            <label for="first_name" class="active">Nome</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="E-mail" name="emailClienteAt" type="text" class="validate" value="<?php echo $email; ?>">
            <label for="last_name" class="active">E-mail</label>
        </div>
    </div>    
    
    <div class="input-field col s6">
        <button class="blue darken-4 btn" type="submit"> Confirmar</button>
    </div>
</form>



