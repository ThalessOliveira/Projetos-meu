<?php
include_once "./partials/head.php";
?>
<?php
include_once "./bd-projetos/bd.php";
?>
    
    <div class="container">
        <div class="p-5"></div>
        <div class="border rounded p-5 bg-dark text-center col-6 mx-auto mt-5">

            <table class="table table-bordered border-primary">
                <?php
                
                    $sql = $pdo->prepare("SELECT * FROM projetos");
                    $sql->execute();

                    $projetos = $sql->fetchAll();

                    if(empty($projetos)){
                ?>
                    <tr>
                        <td class="fw-bold fs-1">Não há Registros!!!</td>
                    </tr>
                <?php     
                    }


                
                foreach($projetos as $projeto){
                ?>
                    <tr>
                        <td><a href="detalhes.php?details_id=<?=$projeto['id']?>" class="btn btn-outline-secondary btn fw-bold">Ver Detalhes</a></td>
                        <td class="fs-5 fw-bold"><?=$projeto['nomeproj']?></td>
                <?php
                    if(($projeto['estado']) == 1){
                         $estado = 'A fazer';
                ?>
                         <td class="fw-bold text-danger"><?=$estado?></td>
                <?php
                         } else {
                          $estado = 'Concluído';
                ?>
                          <td class="fw-bold text-success"><?=$estado?></td>
                <?php
                     }
                ?>

                        <td><a href="excluir.php?del_id=<?=$projeto['id']?>" class="btn btn-outline-danger btn fw-bold">Excluir</a></td>
                        <td><a href="index.php?edit_id=<?=$projeto['id']?>" class="btn btn-outline-primary btn fw-bold">Editar</a></td>
                    </tr>
                <?php
                }
                ?>
                    
            </table> 
            <a href="index.php" class="btn btn-outline-secondary mt-5 btn-lg fw-bold">Adicionar</a>   
        </div>
    </div>



<?php
include_once "./partials/footer.php";
?>