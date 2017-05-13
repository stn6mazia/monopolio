<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Formulário
          <small>Exemplo</small>
      </h1>
    </section><!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formulário de cadastro</h3>
            </div>
            <div class="box-body">
                <form>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="campo1">Campo 1:</label>
                            <input class="form-control" id="campo1" name="campo1" placeholder=".col-md-3" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="campo2">Campo 2:</label>
                            <input class="form-control" id="campo2" name="campo2" placeholder=".col-md-4" type="text">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="campo3">Campo 3:</label>
                            <input class="form-control" id="campo3" name="campo3" placeholder=".col-md-5" type="text">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="campo4">Campo 4:</label>
                            <input class="form-control" id="campo4" name="campo4" placeholder=".col-md-2" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="campo5">Campo 5:</label>
                            <input class="form-control" id="campo5" name="campo5" placeholder=".col-md-4" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="campo6">Campo 6:</label>
                            <input class="form-control" id="campo6" name="campo6" placeholder=".col-md-6" type="text">
                        </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Salvar</button>
            </div><!-- /.box-footer -->
        </div>
          
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>