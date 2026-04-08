<?php
include "../../config/config.php";
include "../../includes/auth.php";

$contas = $_SESSION["contas"] ?? [];

$id = $_GET["id"] ;


if ($_POST){
    $_SESSION["contas"][$id] = [
        "descricao" => $_POST["descricao"],
        "valor"=> $_POST["valor"],
        "tipo"=> $_POST["tipo"]
    ];

    header("Location: listar.php");
    exit;
}

$contas = $contas[$id];
?>

<h2>Editar Conta</h2>

<form method="POST">
    <input type="text" name="descricao" placeholder="Descrição da conta" value="<?php echo $contas["descricao"]; ?>">
    <input type="number" name="valor" placeholder="Valor" value="<?php echo $contas["valor"]; ?>">

    <select name ="tipo">
        <option value="Pagar" <?php if($contas["tipo"] == "Pagar") echo "selected"; ?>>Pagar</option>
        <option value="Receber" <?php if($contas["tipo"] == "Receber") echo "selected"; ?>>Receber</option>
    </select>

        
    <button type="submit">Salvar Alterações</button>
</form>
