<?php include "cabecalho.php" ?>

<h1>📌Tarefas</h1>
<a href="novo-formulario.php" class="btn btn-primary">Adicionar Tarefa </a>

<table class="table">
    <tr>
        <th>&nbsp;</th>
        <th>Id</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
    <?php
    include "conexao-db.php";
    $sql = "select * from tb_tarefas order by status asc, id desc";
    $resultado = mysqli_query($conexao, $sql);

    while($umaTarefa = mysqli_fetch_assoc($resultado)){
    ?>
        <tr>
            <td>
                <?php
                if($umaTarefa['status'] == 0){
                ?>
                    <a href='editar-salvar.php?id=<?=$umaTarefa['id']?>' class="btn">✔</a>
                <?php
                }?>
            </td>
            <td><?=$umaTarefa['id']; ?></td>
            <td><?=$umaTarefa['titulo']; ?></td>
            <td><?=$umaTarefa['descricao']; ?></td>
            <?php 
            if($umaTarefa['status'] == 0){ ?>
                <td>Pendente</td>
            <?php
            } 
            else{ ?>
                <td>Completo</td>  
            <?php
            }
            ?>
            <td>
                <a href="excluir.php?id=<?=$umaTarefa['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar essa tarefa?')" class="btn">❌</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<?php include "rodape.php" ?>
    