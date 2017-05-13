<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Papéis</h1>
    </section><!-- /.content-header -->

    <section class="content">
        <script>
                $(document).ready(function() {
                $("#menu ul li:eq(1)").addClass("active");
            });

                function excluir(event){
                    swal({   title: "Deseja realmente excluir?",
                    text: "Tem certeza?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sim, excluir!",
                    closeOnConfirm: false },
                    function()
                        {
                            swal("Excluido!",
                                    "Excluido com sucesso.",
                                    "success");
                        window.location.href= 'http://localhost/papeis/delete?id='+event;
                        });
            }
        </script>
        <ul class="breadcrumb">
            <li><a href="/">Início</a><span class="divider"></span></li>
            <li class="active">Papéis</li>
        </ul>

        <div class="alert alert-info text-center" role="alert">A consulta trouxe <?= count($papeis) ?> linhas.</div>
        <form method="post">
            <a href="papeis/incluir" class="btn btn-primary btn-flat">Incluir</a>
        </form>

        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr class="info">
                        <th>Código</th>
                        <th>Descrição</th>
                        <!--<th>Status</th>-->
                        <th>Data de Inclusão</th>
                        <th>Data de Alteração</th>
                        <th>Alterado Por</th>
                        <th>Gerenciamento</th>
                    </tr>
                </thead>

                <?php
                foreach ($papeis as $papel) {
                    ?>

                    <tbody>

                        <tr>
                            <td> <?= $papel['id_pessoa'] ?></td>
                            <td> <?= $papel['papel'] ?></td>

                            <td> <?= date('d/m/Y', strtotime($papel['DataCriacao'])) ?></td>
                            <td> <?= date('d/m/Y', strtotime($papel['DataAlteracao'])) ?></td>
                            <td> Alterado por </td>
                            <td>
                                <input type="hidden" name="id_manter_papeis" value=" ">
                                <div class="btn-group btn-group-sm">
                                    <a href="papeis/editar?id=<?= $papel['id_pessoa'] ?>" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" name="excluir" class="btn btn-default btn-flat" onclick="excluir(<?= $papel['id_pessoa'] ?>)"><span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="submit" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                    <?php
                }
                ?>
            </table>
        </div>


        <ul class="pagination">


            <!--/<?php
                    for($i = 1; $i < $pesquisa['num_paginas'] + 1; $i++) {
                        if(isset($_GET['folha'])){
                            if($_GET['folha'] == $i){
                                echo "<li class='active'><a href='?pagina=listarManterPapeis&folha=$i'>".$i."</a></li> "; 
                    } else {
                                    echo "<li><a href='?pagina=listarManterPapeis&folha=$i'>".$i."</a></li> ";
                    }
                } else {
                             if($i == 1){
                                 echo "<li class='active'><a href='?pagina=listarManterPapeis&folha=$i'>".$i."</a></li> ";
                    } else {
                                 echo "<li><a href='?pagina=listarManterPapeis&folha=$i'>".$i."</a></li> ";
                    }
                }
            }
            ?>-->
        </ul>

    </section>
</div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>