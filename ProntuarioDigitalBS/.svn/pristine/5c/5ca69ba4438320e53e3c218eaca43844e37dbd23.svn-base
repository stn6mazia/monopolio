<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Dermatologia</h1>
    </section><!-- /.content-header -->
    
    <section class="content">

        <?php
        if (isset($_POST['nsalvar']) && isset($_POST['nsalvar']) == 'nsalvar') {
            $nomedocampo = trim($_POST['nomedocampo']);
            $nomedocampo2 = trim($_POST['nomedocampo2']);
            if (empty($nomedocampo)) {
                echo '<div class="alert alert-danger text-center">Campos obrigatórios não preenchidos!</div>';
            } elseif (empty($nomedocampo2)) {
                echo '<div class="alert alert-danger text-center">nomedocampo2</div>';
            }
        }
        ?>
        
        <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li><a href="/dermatologia">Dermatologia</a><span class="divider"></span></li>
                <li class="active">Incluir</li>
        </ul>

        <form method="post">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Dados do paciente</a></li><!--menu tab1 -->
                    <li><a href="#tab2" data-toggle="tab">Diagnóstico</a></li><!--menu tab2-->
                </ul>
                <div class="tab-content">
                    <!--janela 1-->
                    <div class="tab-pane fade in active" id="tab1">
                        <!-- Informações basicas -->
                        <div class="panel panel-default"><!--panel panel-default 1-->

                            <div class="panel-body">
                                <div class="row"><!--row 1 linha-->
                                    <div class="form-group col-sm-4">
                                        <label>Nacionalidade</label>
                                        <input type="text" class="form-control input-sm " maxlength="50" placeholder="Nacionalidade">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Sexo</label>
                                        <select class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option value="">Feminino</option>
                                            <option value="">Masculino</option>
                                            <option value="">Outro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Etnia</label>
                                        <select class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                        <option value="">Branco(a)</option>
                                        <option value="">Pardo(a)</option>
                                        <option value="">Negro(a)</option>
                                        <option value="">Indígena</option>
                                        <option value="">Amarelo(a)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Profissão</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Profissão">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Ocupação</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Ocupação">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Antecedentes Pessoais</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Antecedentes Pessoais">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Dados sobre enfermidades</label>
                                        <span class="form-control-feedback"></span>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Dados sobre enfermidades">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Dados Sobre Enfermidades / Historia da doença(HDA)</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Dados Sobre Enfermidades / Historia da doença(HDA)">
                                        <span class="form-control-feedback"></span>
                                    </div>                              
                                    <div class="form-group col-sm-4">
                                        <label>Queixa Principal</label>
                                        <input type="text" name="nomedocampo2" class="form-control input-sm" maxlength="50" placeholder="Queixa Principal">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Outros</label>
                                        <input type="text" name="nomedocampo" class="form-control input-sm" maxlength="50" placeholder="Outros">
                                        <span class="form-control-feedback"></span>
                                    </div>                              
                                </div>
                            </div><!--fim panel-body 1-->                        
                        </div><!--fim panel panel-default 1---->                      
                    </div>
                    
                    <div class="tab-pane fade" id="tab2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Diagnostico</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Diagnostico">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Medicação</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Medicação">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Ações-->
                    <div class="panel panel-default"> 
                        <div class="panel-heading">Ações</div>
                        <div class="panel-body"> 
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                    <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                </div>             
        </form>
        <!-- oooooooo -->  
    </section>
</div>


<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>