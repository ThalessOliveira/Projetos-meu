<?php
include_once "./partials/head.php"
?>
    
    <div class="container">
        <div class="p-5"></div>
        <div class="p-5"></div>
        <div class="p-5"></div>
        <div class="border rounded p-5 bg-dark text-center col-6 mx-auto mt-5">

            <form action="inserir-projeto.php" method="POST">
                <input type="hidden" name="idprojeto">
            <input class="form-control form-control-lg m-5 mx-auto" name="nomeprojeto" type="text" placeholder="Nome do projeto" autofocus>
            <input class="form-control form-control-lg m-5 mx-auto" name="descricao" type="text" placeholder="Fale Sobre">

            <select class="form-select form-select-lg" name="estado" id="estado">
                <option selected>Concluído ou não?</option>
                <option value="1">A fazer</option>
                <option value="2">Concluído</option>
            </select>

            <button class="btn btn-outline-secondary mt-5 btn-lg fw-bold">Submit</button>
            </form>

        </div>
    </div>


<?php
include_once "./partials/footer.php"
?>