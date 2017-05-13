<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Usuários</h1>   
    </section><!-- /.content-header -->
    <!-- Main content -->
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
                            window.location.href = 'http://localhost/usuarios/delete?id=' + event;
                        });
            }
        </script>

        <ul class="breadcrumb">
            <li><a href="index.php">Início</a> <span class="divider"></span></li>
            <li class="active">Usuários</li>
        </ul>

        <div class="alert alert-info text-center" role="alert">A consulta trouxe<?= count($usuarios) ?><!-- count($grupos) --> linhas.</div>
        <form method="post">
            <a href="usuarios/incluir" class="btn btn-primary btn-flat">Incluir</a>
        </form>

        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr class="info">
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Primeiro Acesso</th>
                        <th>Data do ultimo login</th>
                        <th>Situação do sistema</th>

                        <th>Gerenciamento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $usuario) {

                        if ($usuario['PrimeiroAcesso'] == 1) {
                            $usuario['PrimeiroAcesso'] = "Sim";
                        } else {
                            $usuario['PrimeiroAcesso'] = "Não";
                        }

                        if ($usuario['SituacaoSistema'] == 1) {
                            $usuario['SituacaoSistema'] = "Ativo";
                        } else {
                            $usuario['SituacaoSistema'] = "Inativo";
                        }
                        ?>
                        <tr>
                            <td><?= $usuario['Nome_Pessoa'] ?></td>
                            <td><?= $usuario['Login'] ?></td>
                            <td><?= $usuario['PrimeiroAcesso'] ?></td>
                            <td><?= $usuario['DataUltimoLogin'] ?></td>
                            <td><?= $usuario['SituacaoSistema'] ?></td>

                            <td>
                                <input type="hidden" name="id_usuario" value=" ">
                                <div class="btn-group btn-group-sm">

                                    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/usuarios/editar?id=<?= $usuario['id_pessoa'] ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>

                                    <button type="button" name="excluir" class="btn btn-default btn-flat" onclick="excluir(<?= $usuario['id_pessoa'] ?>)"><span class="glyphicon glyphicon-trash"></span></button>
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
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
