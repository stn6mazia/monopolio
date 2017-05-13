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
                
                function verificarCampos(event){     
                    var permissao = $("#permissaoNome").val();
                    if(permissao === "" || permissao === null){
                        event.preventDefault();
                        swal('Não foi possível realizar o cadastro, verifique os campos e tente novamente');
                    }else
                    {
                        swal("Cadastrado com exito!", "Clique no botão abaixo para voltar", "success");
                        event.preventDefault();
                        
                    }    
                    
                }
            </script>

            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li><a href="/permissoes">Permissões</a><span class="divider"></span></li>
                <li class="active">Incluir</li>
            </ul>            
            
            <form method="post">
                <div class="form-group col-md-6">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" id="permissaoNome" name="desc_permissao_usuario" value="" placeholder="Descrição">
                </div>                
                
                <div class="form-group col-md-12">
                    <button type="submit" name="salvar" class="btn btn-success btn-flat" onclick="verificarCampos(event)">Salvar</button>
                    <button onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                </div>
            </form>
            
        </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
