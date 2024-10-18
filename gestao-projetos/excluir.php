<?php
include_once "./bd-projetos/bd.php";

$id = $_GET['del_id'];

$sql = $pdo->prepare("DELETE FROM projetos WHERE id = ?");
$sql->execute([$id]);

header("Location: ver-projetos.php")
?>