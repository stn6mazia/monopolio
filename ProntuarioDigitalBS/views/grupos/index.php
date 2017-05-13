<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Grupos</h1>
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
                    window.location.href= 'http://localhost/grupos/delete?id='+event;
                    });
                }
            </script>
            
            
            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li class="active">Grupos</li>
            </ul>
            
            <div class="alert alert-info text-center" role="alert">A consulta trouxe <?= count($grupos) ?> <b><!--php echo $pesquisa["total_linhas"]; --></b> linhas.</div>
            <form method="post">
                <a href="grupos/incluir" class="btn btn-primary btn-flat">Incluir</a>
            </form>
   
            <div class="table-responsive">
                 <table class="table table-hover table-condensed">
                    <thead>
                        <tr class="info">
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Incluído em</th>
                            <th>Alterado em</th>
                            <th>Status</th>
                            <th>Codigo Pessoa</th>
                            <th>Gerenciamento</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($grupos as $grupo) {
                    ?>
                           <tr>
                               <td><?= $grupo['id_grupo'] ?></td>
                               <td><?= $grupo['desc_grupo'] ?></td>
                               <td><?= date('d/m/Y', strtotime($grupo['dt_inclusao'])) ?></td>
                               <td><?= date('d/m/Y', strtotime($grupo['dt_alteracao'])) ?></td>
                               <td><?= $grupo['flg_status_grupo'] ?></td>
                               <td><?= $grupo['id_pessoa'] ?></td>
                               <td>
                                    <input type="hidden" name="id_grupo_usuario" value=" ">
                                    <div class="btn-group btn-group-sm">
                                        <a href="/grupos/editar?id=<?=$grupo['id_grupo']?>" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                       <!-- <a href="/grupos/excluir?id=<?=$grupo['id_grupo']?>" onclick="return confirm('você tem certeza?\nEste grupo será excluido permanentemente.');" type="button" name="excluir" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-trash"></span></a>-->
                                        <button type="button" name="excluir" class="btn btn-default btn-flat" onclick="excluir(<?=$grupo['id_grupo']?>)"><span class="glyphicon glyphicon-trash"></span></button>

                                        <button type="button" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
                               </div>
                               </td>
                           </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>

        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
