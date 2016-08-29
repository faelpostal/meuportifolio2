<table class="striped">
    <thead style="background-color: #000;color: #FFF;">
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Excluir</td>
        </tr>
    </thead>
    
    <tbody>
        <?php 
        
            $listarClientes = listar("clientes");
            foreach ($listarClientes as $cliente):
        ?>        
          
        <tr>
            <td> <?php echo $cliente->nome;  ?> </td>
            <td> <?php echo $cliente->email;  ?> </td>
            <td>
                <a href="?excluir=true&id=<?php echo $cliente->id; ?>" class="red darken-4"><i class="mdi-content-remove"></i> Excluir</a>
                <!-- <a href="?atualizar=true&id=<?php echo $cliente->id; ?>&nome=<?php echo $cliente->nome; ?>&email=<?php echo $cliente->email; ?>" class="red darken-4"><i class="mdi-content-remove"></i> Atualizar</a> -->
                <a href="?p=atualizar&id=<?php echo $cliente->id; ?>&nome=<?php echo $cliente->nome; ?>&email=<?php echo $cliente->email; ?>" class="red darken-4"><i class="mdi-content-remove"></i> Atualizar</a>
            </td>
        </tr>
    
    
        <?php  endforeach; ?> 
        
    </tbody>
    
</table>