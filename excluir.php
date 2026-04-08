<?php
include "../../config/config.php";
include "../../includes/auth.php";

$id = $_GET["id"] ;

unset($_SESSION["contas"][$id]);

header("Location: listar.php");
exit;
?>