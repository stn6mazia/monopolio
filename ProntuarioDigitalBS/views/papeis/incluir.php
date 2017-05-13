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

            function verificarCampos(event) {
                //var status = $("#flagStatus").val();
                var papel = $("#papelNome").val();
                if (status < 0 || (papel === "" || papel === null)) {
                    event.preventDefault();
                    swal('Não foi possível realizar o cadastro, verifique os campos e tente novamente');
                }
            }
        </script>

        <ul class="breadcrumb">
            <li><a href="/">Início</a><span class="divider"></span></li>
            <li><a href="/papeis">Papéis</a><span class="divider"></span></li>
            <li class="active">Incluir</li>
        </ul>

        <form method="post" name="papeisForm">
            <div class="form-group col-md-6">
                <label>Descrição:</label>
                    <input type="text" class="form-control" id="papelNome" name="desc_manter_papeis" placeholder="Nome" value="" required="true">                    
            </div>
            <!--
            <div class="form-group col-md-6">
                <label>Status:</label>
                <select class="form-control" id="flagStatus" name="flg_status_manter_papeis">
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                    <option value="-1" selected="true">Selecione</option>
                </select>
            </div>
            -->
            <div class="form-group col-md-12">
                <button type="submit" name="salvar" class="btn btn-success btn-flat" onclick="verificarCampos(event)">Salvar</button>
                <button onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
            </div>
        </form>

    </section>
</div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>