<?php
include_once "./bd-projetos/bd.php";

$id = trim($_POST['idprojeto']);
$nomeproj = trim($_POST['nomeprojeto']);
$descricao  = trim($_POST['descricao']);
$estado = trim($_POST['estado']);



if(empty($nomeproj) || empty($descricao) || empty($estado)){
    echo "<script>alert('Preencha todos os campos'); window.history.back();</script>";
} else {

    try{
        if($estado == "Concluído ou não?"){
            $estado = 1;
        }
        $sql = $pdo->prepare("INSERT INTO projetos VALUES (null, ?, ?, ?);");
        $sql -> execute(array(
            $nomeproj,
            $descricao,
            $estado
        ));

        header("Location: ver-projetos.php");
    } catch (PDOException $e) {
        if($e->getCode()){
            echo "<script>alert('Erro ao inserir!!! Erro: ". $e->getMessage() ."');</script>";
        }
    }

}
?>