<?php
include "../config/config.php";
include "../includes/auth.php";

$perfil = $_SESSION["perfil"];
$contas = $_SESSION["contas"] ?? [];

$totalPagar = 0;
$totalReceber = 0;
$qtdContas = count($contas);

foreach($contas as $conta) {
    if ($conta["tipo"] == "Pagar") {
        $totalPagar += $conta["valor"];
    } else {
        $totalReceber += $conta["valor"];
    }
}
?>

<h1> Seja bem vindo, <?php echo $_SESSION["usuario"]; ?></h1>

<?php
if ($perfil == "cliente") {
        echo "<p style='color:cyan;'>Área do Cliente</p>";
} elseif ($perfil == "empresa") {
    echo "<p style='color: green;'>Área da Empresa</p>";
} elseif ($perfil == "proprietario") {
    echo "<p style='color: yellow;'> Área do Administrador</p>";
}
?>

<hr>

<h3>Total a Pagar: R$ <?php echo $totalPagar; ?></h3>
<h3>Total a Receber: R$ <?php echo $totalReceber; ?></h3>

<?php if ($saldo >= 0) { ?>
    <p style="color: green;"> Saldo: R$ <?php echo $saldo; ?></p>
<?php } else { ?>
    <p style="color: red;"> Saldo: R$ <?php echo $saldo; ?></p>
<?php } ?>

<h3>Quantidade de contas: <?php echo $qtdContas; ?></h3>

<hr>

<a href="contas/listar.php"> Ver Contas</a>
<a href=".../logout.php"> Sair</a>