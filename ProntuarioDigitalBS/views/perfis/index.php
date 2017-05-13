<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Perfis</h1>
    </section><!-- /.content-header -->

    <section class="content">
        <script>
            $(document).ready(function () {
                $("#menu ul li:eq(1)").addClass("active");
            });

            function excluir(event) {
                swal({title: "Deseja realmente excluir?",
                    text: "Tem certeza?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sim, excluir!",
                    closeOnConfirm: false},
                        function ()
                        {
                            swal("Excluido!",
                                    "Excluido com sucesso.",
                                    "success");
                            window.location.href = 'http://localhost/perfis/delete?id=' + event;
                        });
            }
        </script>

        <ul class="breadcrumb">
            <li><a href="/">Início</a><span class="divider"></span></li>
            <li class="active">Perfis</li>
        </ul>            

        <div class="alert alert-info text-center" role="alert">A consulta trouxe <?= count($perfis) ?> linhas.</div>
        <form method="post">
            <a href="perfis/incluir" class="btn btn-primary btn-flat">Incluir</a>
        </form>

        <div class="table-responsive">                
            <table class="table table-hover table-condensed">
                <thead>
                    <tr class="info">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Incluído em</th>
                        <th>Alterado em</th>
                        <th>Alterado Por</th>
                        <th>Gerenciamento</th>
                    </tr>
                </thead>                    
                <tbody>                       
                    <?php
                    foreach ($perfis as $perfil) {
                        ?>
                        <tr>
                            <td><?= $perfil['id_perfil'] ?></td>
                            <td><?= $perfil['nom_perfil'] ?></td>
                            <td><?= $perfil['desc_perfil'] ?></td>
                            <td><?= $perfil['flg_status_perfil_acesso'] ?></td>
                            <td><?= date('d/m/Y', strtotime($perfil['dt_inclusao'])) ?></td>
                            <td><?= date('d/m/Y', strtotime($perfil['dt_alteracao'])) ?></td>
                            
                            <td></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="perfis/editar/?id=<?= $perfil['id_perfil'] ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" name="excluir" class="btn btn-default btn-flat" onclick="excluir(<?= $perfil['id_perfil'] ?>)"><span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="button" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
                                    <input type="hidden" name="id_perfil_usuario" value="<?= $perfil['id_perfil'] ?>">
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