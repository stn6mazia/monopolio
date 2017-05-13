<?php include_once VIEWS_PATH . 'layouts/default/header.php';?>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>operacao</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            <script>
                $(document).ready(function() {
                    $("#menu ul li:eq(1)").addClass("active");
                });
                
                function verificarCampos(event){     
                    var operacao = $("#operacaoNome").val();
                    if(operacao=== "" || operacao === null){
                        event.preventDefault();
                        swal('Não foi possível realizar o cadastro, verifique os campos e tente novamente');
                    }else
                    {
                        swal("Cadastrado com exito!", "Clique no botão abaixo para voltar", "success");
                        event.preventDefault();   
                    }                       
                }
            </script>
            
            <form method="post">
                <div class="form-group col-md-6">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nom_operacao_sistema" maxlength="50" placeholder="Nome" value="<?php echo $operacoes["nom_operacao_sistema"];?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" name="desc_operacao_sistema" maxlength="50" placeholder="Descrição" value="<?php echo $operacoes["desc_operacao_sistema"];?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label>Status:</label>
                    
                   <select class="form-control" name="flg_status_operacao_sistema">
                           <?php if($operacoes["flg_status_operacao_sistema"]==1){ ?>
                        <option value="1" selected>Ativo</option>
                        <option value="0">Inativo</option>
                            <?php }else{ ?>
                        <option value="1">Ativo</option>
                        <option value="0" selected>Inativo</option>
                            <?php } ?>
                    </select>
                   
                </div>
                <div class="form-group col-md-6">
                    <label>Data de inclusão:</label>
                    <input type="text" class="form-control" readonly  maxlength="50" value="<?= date('d/m/Y', strtotime($operacoes["dt_inclusao"]))?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Ultima alteração:</label>
                    <input type="text" class="form-control" readonly  maxlength="50" value="<?= date('d/m/Y', strtotime($operacoes["dt_alteracao"]))?>">
                </div>
                                
                <div class="form-group col-md-12">
                    <button type="submit" name="salvar" onclick="verificarCampos(event) "class="btn btn-success btn-flat">Salvar</button>
                    <button type="submit" onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                </div>
            </form>
            
    </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>


