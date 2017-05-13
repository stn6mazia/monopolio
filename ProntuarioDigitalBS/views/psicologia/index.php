<body class="hold-transition skin-blue sidebar-mini">
<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <section class="content">

             <ul class="breadcrumb">
                <li><a href="index.php">Início</a><span class="divider"></span></li>
                <li class="active">Psicologia</li>
            </ul>
             <h2>Psicologia</h2>
             
              <div class="row">
            
            <div class="col-lg-12">
             <div class="alert text-center" role="alert"><b><!--php echo $pesquisa["total_linhas"]; --></b></div>
           <a href="psicologia/incluir" class="btn btn-success btn-flat">Incluir</a>
            <button type="submit" name="voltar" class="btn btn-primary btn-flat">Voltar</button>
         
         <div class="table-responsive">
        
</div>
         
            </div>
            </div>
             
        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
