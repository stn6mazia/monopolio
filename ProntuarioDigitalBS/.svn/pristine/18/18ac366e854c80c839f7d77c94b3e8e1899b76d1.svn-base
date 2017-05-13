<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Delegações</h1>
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
                         window.location.href= 'http://localhost/delegacoes/delete?id='+event;
                    });
                }
            </script>

            <ul class="breadcrumb">
                <li><a href="index.php">Início</a><span class="divider"></span></li>
                <li class="active">Delegações</li>
            </ul>
             
            <div class="alert alert-info text-center" role="alert">A consulta <?= count($delegacoes)?> trouxe <b><!--php echo $pesquisa["total_linhas"]; --></b> linhas.</div>
            <a href="/delegacoes/incluir" class="btn btn-primary btn-flat">Incluir</a>
         
            <div class="table-responsive">
                <table class="table table-hover"> 
                    <thead>
                        <tr class="info">
                            <th>Delegado</th>
                            <th>Operação</th>
                            <th>Motivo</th>
                            <th>Status</th>
                            <th>Gerenciamento</th>
                            
                        </tr>
                    </thead>
                <tbody>
                <?php 
                foreach ($delegacoes as $delegacoes) {
                ?>
                  
                        <tr>
                        <td><?=$delegacoes['nom_usuario'] ?></td>
                        <td><?=$delegacoes['nom_permissao'] ?></td>
                        <td><?=$delegacoes['des_motivo'] ?></td>
                        <?php
                        if ($delegacoes['flg_status_delega'] == 1) {
                            $delega_status = "Delega";
                        }
                        else {
                            $delega_status = "Não delega";
                        }
                        ?>
                        <td><?= $delega_status ?></td>
                   
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <!--        <button type="button" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></button> */-->
                                   <a href="/delegacoes/editar/<?=$delegacoes['id_usu_delega'] ?>" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" name="excluir" class="btn btn-default btn-flat"  onclick="excluir(<?=$delegacoes['id_usu_delega']?>)"> <span class="glyphicon glyphicon-trash"></span></button>
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