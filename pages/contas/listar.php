<?php
include "../../config/config.php";
include "../../includes/auth.php";

$contas = $_SESSION["contas"] ?? [];
$filtro = $_GET["tipo"] ?? "";
?>

<h2>lista de contas</h2>

<a href="listar.php">Todas as contas</a>    
            <a href="listar.php?tipo=Pagar">Contas a pagar</a>
            <a href="listar.php?tipo=Receber">Contas a receber</a>

            <br><br>

<table border="1">
    <tr>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Tipo</th>
        <th>Ações</th>
    </tr>

    <?php foreach($contas as $id => $conta) { ?>

        <?php if ($filtro == "" || $conta["tipo"] == $filtro) {?>

    <tr>
        <td><?php echo $conta["descricao"]; ?></td>
        <td>R$ <?php echo $conta["valor"]; ?></td>
        <td><?php echo $conta["tipo"]; ?></td>
        <td>    
            <a href="editar.php?id=<?php echo $id; ?>">Editar</a>
            <a href="excluir.php?id=<?php echo $id; ?>">Excluir</a>
        </td>
    </tr>
    <?php } ?>

<?php } ?>


</table>

<br>


<a href="cadastrar.php">Cadastrar nova conta</a>
