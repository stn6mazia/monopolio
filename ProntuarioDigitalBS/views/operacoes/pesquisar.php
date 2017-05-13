<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Operações</h1>
            </section><!-- /.content-header -->
            
        <section class="content">

<?php
if (isset($_POST['incluir'])) {
    ?>
    <script>
        $(window.document.location).attr('href', '/operacoes/incluir');
    </script>
    <?php   
}
?>  
            
           <script>
    $(document).ready(function () {
        $("#menu ul li:eq(4)").addClass("active");
    });
</script>

<ul class="breadcrumb">
    <li><a href="/operacoes">operaçoes</a> <span class="divider"></span></li>
    <li class="active">Pesquisar</li>
</ul>


<div class="row">

    
    
    <div class="col-md-12">
        <form method="post">
            <div class="form-group col-md-3">
                <label>Codigo:</label>
                <input type="text" name="id_operacao_sistema" class="form-control" placeholder="Codigo">
            </div>

            <div class="form-group col-md-3">
                <label>Descrição da Operaçao</label>
                <input type="text" name="desc_oper_sistema" class="form-control" placeholder="Descrição da Operaçao">
            </div>

            <div class="form-group col-md-3">
                <label>Status:</label>
                <select class="form-control" name="flg_status_operacao_sistema">
                    <option value="">Selecione</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label>Ferramentas:</label><br>
                <button type="submit" name="filtrar" class="btn btn-primary">Filtrar</button>
                <button type="submit" name="incluir" class="btn btn-default">Incluir</button>
            </div>
        </form>
    </div>
    
    <div class="col-md-12">
        <div class='table-responsive'>    
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th>Codigo</td>
                        <th>Descrição da Operaçao</th> 
                        <th>Status</th>
                        <th>Data de Inclusão</th>
                        <th>Identificação</th>
                        <th>Data Alteração</th>
                        <th>Gerenciamento</th>
                    </tr>
                </thead>

                
            </table>
        </div>
        <center>
            <ul class="pagination">
                
            </ul>
        </center>
    </div>
</div>
            
        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>