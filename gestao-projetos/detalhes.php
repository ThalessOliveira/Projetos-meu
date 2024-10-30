<?php
include_once "./partials/head.php";

include_once "./bd-projetos/bd.php";

$id = $_GET['details_id'];

$sql = $pdo->prepare("SELECT * FROM projetos WHERE id = $id");
$sql->execute();

$projetos = $sql->fetchAll();
$projetos = $projetos[0];

print_r($projetos);
?>

<div class="container">
        <div class="p-5"></div>
        <div class="border rounded p-5 bg-dark  col-6 mx-auto mt-5">
            <div class="border rounded p-5 bg-light  mx-auto mt-5">
                <strong>Id: </strong> <?=$projetos['id']?><br>
                <strong>Nome: </strong> <?=$projetos['nomeproj']?><br>
                <strong>Descrição: </strong> <?=$projetos['descricao']?><br>
                <strong>Estado: </strong> <?=$projetos['estado']?>
            </div>
            <a href="ver-projetos.php" class="btn btn-outline-secondary mt-5 btn-lg fw-bold">Ver Projetos</a>
        </div>
    </div>

<?php
include_once "./partials/footer.php";
?>