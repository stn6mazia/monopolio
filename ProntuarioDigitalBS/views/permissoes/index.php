<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>
  
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Permissões</h1>
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

                        window.location.href= 'http://localhost/permissoes/deletar?id='+event;
                    });
                }
                 
                 
            </script>
            
            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li class="active">Permissões</li>
            </ul>

            <div class="alert alert-info text-center" role="alert">A consulta trouxe <?= count($permissoes) ?> linhas.</div>
            <form method="post">
                <a href="permissoes/incluir" class="btn btn-primary btn-flat">Incluir</a>
            </form>

            <div class="table-responsive">
               <table class="table table-hover table-condensed">
                    <thead>
                        <tr class="info">
                            <th>Codigo Permissão</th>
                            <th>Descrição</th>
                            <th>Gerenciamento</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($permissoes as $permissao) {
                    ?>
                        <tr>
                            <td><?= $permissao['id_permissao'] ?></td>
                            <td><?= $permissao['nom_permissao'] ?></td>
                            
                            <td> 
                                <div class="btn-group btn-group-sm">
                                    <a href="/permissoes/editar?id=<?=$permissao['id_permissao']?>" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                     <button type="button" name="excluir" class="btn btn-default btn-flat" onclick="excluir(<?=$permissao['id_permissao']?>)"><span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="submit" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
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
