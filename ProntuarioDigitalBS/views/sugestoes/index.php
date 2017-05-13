<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Sugestões</h1>   
    </section><!-- /.content-header -->
    <section class="content">
        <ul class="breadcrumb">
            <li><a href="index.php">Início</a><span class="divider"></span></li>
            <li class="active">Sugestões</li>
        </ul>
        <div class="row">                  
            <div class="col-lg-12">           
                <div class="alert text-center" role="alert"><b><!--php echo $pesquisa["total_linhas"]; --></b></div>
                <form method="post">
                    <ul class="nav nav-tabs">
                        <li class="active"><a id="toogleTab1" href="#tab1" data-toggle="tab">Incidentes de segurança e problemas</a></li>
                        <li><a id="toogleTab2" href="#tab2" data-toggle="tab">Sugestões/Reclamações</a></li>
                        <li><a id="toogleTab3" href="#tab3" data-toggle="tab">Melhorias ja realizados</a></li>
                    </ul>

                    <p><br></p>

                    <div class="tab-content"><!-- Inicio tab-content -->

                        <!-- TAB 1 Incidentes de segurança e problemas -->

                        <div class="tab-pane fade in active" id="tab1">                             
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Pesquisar</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label>Numero do processo para pesquisa:</label>
                                            <input type="text" class="form-control input-sm" maxlength="4" placeholder="Numero do processo">
                                            <span class="form-control-feedback"></span>
                                            <p><br></p>
                                            <input type="button" class="btn btn-primary btn-flatn"  onclick="pesquisar()" value="Pesquisar">
                                        </div>
                                    </div><!-- Fim row -->                                    
                                </div><!-- FIM panel-body -->
                            </div><!-- FIM panel-default -->
                            
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Cadastro</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Nome:</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Usuário:</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <div class="form-group">
                                                <label>Ocorrência</label>
                                                <textarea class="form-control" rows="5" placeholder="Ocorrido"></textarea>
                                            </div>    
                                        </div>
                                    </div><!-- Fim row -->
                                    <a href="" class="btn btn-success btn-flat">Enviar</a>
                                </div><!-- FIM panel-body -->
                            </div><!-- FIM panel-default -->
                            
                            
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Últimos Incidentes</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th>Data</th>
                                                                <th>Incidentes</th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <td>teste</td>
                                                            <td>teste</td>
                                                        </tr>
                                                        <tr>
                                                            <td>teste</td>
                                                            <td>teste</td>
                                                        </tr>
                                                        <tr>
                                                            <td>teste</td>
                                                            <td>teste</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>    
                                        </div>                                        
                                    </div><!-- Fim row -->                                      
                                </div><!-- FIM panel-body -->
                            </div><!-- FIM panel-default -->
                        </div>
                    

                        <!-- FIM TAB 1 -->

                        <!-- TAB 2 Inicio Sugestões/Reclamações -->

                        <div class="tab-pane fade in active" id="tab2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Cadastro</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <div class="form-group">
                                                <label>Sugestões / Reclamações</label>
                                                <textarea class="form-control" rows="5" placeholder="Sugestões/Reclamações"></textarea>
                                            </div>    
                                        </div>                                        
                                    </div><!-- Fim row -->   
                                    <a href="" class="btn btn-success btn-flat">Enviar</a>
                                </div><!-- FIM panel-body -->
                            </div><!-- FIM panel-default -->
                        </div><!-- FIM tab-pane -->

                        <!-- FIM TAB 2 -->
                   
                    
                        <!-- TAB 3 Melhoramentos ja realizados -->

                        <div class="tab-pane fade in active" id="tab3">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Atualizações Realizadas</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <div class="form-group">                                                
                                                <p>Versão 2.3</p>
                                                <p>Corrigido campos de pacientes.</p>
                                            </div>    
                                        </div>                                        
                                    </div><!-- Fim row -->                                      
                                </div><!-- FIM panel-body -->
                            </div><!-- FIM panel-default -->
                        </div><!-- FIM tab-pane -->

                        <!-- FIM TAB 3 -->


                    </div>
                    <div class="table-responsive">
                    </div>
                    </form>
            
            </div> 
            
        </div>
        </section>
</div>

<script>
    $(document).ready(function(){
        var toogleTab1 = $('#toogleTab1');
        var toogleTab2 = $('#toogleTab2');
        
        toogleTab2.click();
        toogleTab1.click();
    });
</script>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
