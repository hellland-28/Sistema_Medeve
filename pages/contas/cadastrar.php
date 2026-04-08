<?php
include "../../config/config.php";
include "../../includes/auth.php";

 if ($_POST) {
    $novaconta = [
        "descricao" => $_POST["descricao"],
        "valor"=> $_POST["valor"],
        "tipo"=> $_POST["tipo"]
        ];

        $_SESSION["contas"][] = $novaconta;
 }
?>

<form method="POST">
    <input type="text" name="descricao" placeholder="Descrição da conta">
    <input type="number" name="valor" placeholder="Valor">

    <select name ="tipo">
        <option value="Pagar">Pagar</option>
        <option value="Receber">Receber</option>
    </select>
    <button type="submit">Cadastrar Conta</button>
</form>

<a href="listar.php">Ver contas</a>
