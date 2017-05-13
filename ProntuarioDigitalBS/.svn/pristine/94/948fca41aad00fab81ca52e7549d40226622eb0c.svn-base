<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Perfis</h1>
        </section><!-- /.content-header -->
         <script>
            $(document).ready(function() {$("#menu ul li:eq(1)").addClass("active");});
        </script>
        <section class="content">   
           <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li><a href="/perfis">Perfis</a><span class="divider"></span></li>
                <li class="active">Incluir</li>
            </ul>
            


        <script language="javaScript">
        function limpar() {
            var nome = document.form.nome_perfil;
            var descricao = document.form.desc_perfil;

            nome.value = "";
            descricao.value = "";
        }
        </script>
            
            
            
            <?php
            if (isset($retorno) && !empty($retorno['mensagem'])) :
                if ($retorno['status'] === "sucesso") {
                    $msg = '<script> 
                        swal({
                          title:  "Cadastrado com exito!",
                           text: "Clique no botão abaixo para voltar!",
                            type: "success",
                            confirmButtonText: "Voltar",
                            closeOnConfirm: false
                        });
                        
                        </script>'; //"Sucesso: " . $retorno['mensagem'];
                    
                   
                }
                if ($retorno['status'] === "erro") {
                   if(strcmp($retorno['mensagem'], 'Informe o nome') == 0)
                   {
                    $msg = '<script> swal("ERRO","O campo NOME deve ser digitado!", "error");
                        event.preventDefault(); </script>'; //"Erro: " . $retorno['mensagem'];
                   }
                   else if (strcmp($retorno['mensagem'], 'Informe a descrição') == 0){
                        $msg = '<script> swal("ERRO", "O campo DESCRIÇÃO deve ser digitado!", "error");
                        event.preventDefault(); </script>'; 
                   }
                   
                }
            ?><?php echo $msg;?>
                
            <?php endif; ?>
            
            <form method="post">
                <div class="form-group col-md-6">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome_perfil" placeholder="Nome" id="PerfilNome" value="<?=$retorno['dados']['nome']?>">
                </div>

                <div class="form-group col-md-6">
                <label>Descrição:</label>
                <input type="text" class="form-control" name="desc_perfil" placeholder="Descrição" id="Desc" value="<?=$retorno['dados']['desc']?>">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" name="salvar" class="btn btn-success btn-flat">Salvar</button>
                    <button onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                </div>
             
            </form>         
            
        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; 
