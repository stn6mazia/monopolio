<body class="hold-transition skin-green sidebar-mini">
<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>
        <script>
            function pesquisar(event){
                swal({
                    title: "Pesquisa Prontuário",
                    text: "Informe o número do prontuário",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    inputPlaceholder: "número de prontuário"
                    },
                    function(inputValue){
                       if(inputValue === false) return false;
                       if (inputValue === "") {
                           swal.showInputError("Informe um valor");
                           return false
                       }
                    swal("Registros localizados","Encontrado prontuário número: " + inputValue, "success" );
                  
                });
        }
        
        </script>

    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Fisioterapia</h1>   
            </section><!-- /.content-header -->
        <section class="content">

             <ul class="breadcrumb">
                <li><a href="index.php">Início</a><span class="divider"></span></li>
                <li class="active">Fisioterapia</li>
            </ul>
            
             
              <div class="row">
            
        <div class="col-lg-12">
            <div class="alert text-center" role="alert"><b><!--php echo $pesquisa["total_linhas"]; --></b></div>
            <a href="fisioterapia/formulario" class="btn btn-success btn-flat">Incluir</a>
            <input type="button" class="btn btn-primary btn-flatn"  onclick="pesquisar()" value="Pesquisar">
            <div class="table-responsive">  
            </div>
        </div>
            </div> 
        </section>
    </div>



<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
