<?php
include_once "./partials/head.php";

if(isset($_GET['edit_id'])){
    $submeter = "editar-projeto.php";
    include_once "./bd-projetos/bd.php";
    $id = $_GET['edit_id'];
    $sql = $pdo->prepare("SELECT * FROM projetos where id = $id");
    $sql->execute();

    $projetos = $sql->fetchAll();
    $projetos = $projetos[0];
    print_r($projetos);

    print_r($projetos['estado']);
              
} else {
    $submeter = "inserir-projeto.php";
}

if(isset($projetos['estado'])){
    echo '<p class="text-light">ESTOU AQUI</p>';
    switch($projetos['estado']){
        case '':
            $estado = '0';
            break;
        case '1':
            $estado = '1';
            break;
        case '2':
            $estado = '2';
            break;
    }
} else {
    $estado = '0';
}

?>
    

    <div class="container">
        <div class="p-5"></div>
        <div class="border rounded p-5 bg-dark text-center col-6 mx-auto mt-5">

            <form action="<?=$submeter?>" method="POST">
                <input type="hidden" name="idprojeto">
            <input class="form-control form-control-lg m-5 mx-auto" name="nomeprojeto" type="text" value="<?=isset($projetos['nomeproj'])?$projetos['nomeproj']:''?>" placeholder="Nome do projeto" autofocus>
            <input class="form-control form-control-lg m-5 mx-auto" name="descricao" type="text" value="<?=isset($projetos['nomeproj'])?$projetos['descricao']:''?>" placeholder="Fale Sobre">

            <select class="form-select form-select-lg" name="estado" id="estado">
                <option <?php if($estado == '0') echo 'selected'?>>Concluído ou não?</option>
                <option <?php if($estado == '1') echo 'selected'?>>A fazer</option>
                <option <?php if($estado == '2') echo 'selected'?>>Concluído</option>
            </select>

            <button class="btn btn-outline-secondary mt-5 btn-lg fw-bold">Submit</button>
            <a href="ver-projetos.php" class="btn btn-outline-secondary mt-5 btn-lg fw-bold">Ver Projetos</a>
            </form>

        </div>
    </div>


<?php
include_once "./partials/footer.php"
?>