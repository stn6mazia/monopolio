<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
    <section class="content">
    <?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>
    
        <div id="1">
            <section class="content">
                <script>
                 $(document).ready(function() {
                  $("#menu ul li:eq(5)").addClass("active");
                     });
                </script>
                <ul class="breadcrumb">
                 <li><a href="index.php">Início</a><span class="divider"></span></li>
                 <li><a href="?pagina=Pesquisar">Dermatologia</a><span class="divider"></span></li>
                 <li class="active">Incluir</li>
                </ul>

    <?php
    if (isset($_POST['salvar'])) {
    echo "salvar";
    }

    if (isset($_POST['cancelar'])) {
    ?>
    <script>
        $(window.document.location).attr('href','principal.php?pagina=Pesquisar');
    </script>
    <?php
    }
    ?>
                
<form method="post">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Paciente</a></li>
            <li><a href="#tab2" data-toggle="tab">Saúde</a></li>
            <li><a href="#tab3" data-toggle="tab">Histórico</a></li>
            <li><a href="#tab4" data-toggle="tab">Sócio Econômico</a></li>
        </ul>
    <br>
    
    <div class="tab-content">
        <!-- Paciente -->
        <div class="tab-pane fade in active" id="tab1"> 
            <div class="panel panel-default"> 
                 <div class="panel-heading">Informações basicas</div>
                 <div class="panel-body"> 
                     <div class="row">
                            <div class="form-group col-sm-6">
                                <label><u>Nome:</u></label>
                                <input type="text" class="form-control input-sm" placeholder="Nome">
                                <span class="form-control-feedback"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Apelido:</label>
                                <input type="text" class="form-control input-sm" placeholder="Apelido">								
                                <span class="form-control-feedback"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <label><u>Dt de nascimento:</u></label>
                                <input type="date" class="form-control input-sm">
                            </div>
                        </div>
                 
                 </div> <!-- Fecha div panel-body -->
            
            </div>
            
            <div class="panel panel-default"> 
                 <div class="panel-heading">Acompanhante/Responsável</div>
                 <div class="panel-body"> 
                     <div class="row">
                            <div class="form-group col-sm-6">
                                <label><u>Nome:</u></label>
                                <input type="text" class="form-control input-sm" placeholder="Nome">
                                <span class="form-control-feedback"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Telefone:</label>
                                <input type="text" class="form-control input-sm" placeholder="Telefone">								
                                <span class="form-control-feedback"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <label><u>Grau Parentesco:</u></label>
                                <input type="text" class="form-control input-sm" placeholder="Parentesco">
                            </div>
                        </div>
                     <div class="row">
                         <div class="form-group col-sm-6">
                                <label><u>Endereço:</u></label>
                                <input type="text" class="form-control input-sm" placeholder="Endereço">
                                <span class="form-control-feedback"></span>
                            </div>
                     </div>
                 
                 </div> <!-- Fecha div panel-body -->
            
            </div>
        
        </div> <!-- Fecha div fade in active-->
        
        <div class="tab-pane fade" id="tab2"> 
            <!-- Doenças e Distúrbios Associados -->
            <div class="panel panel-default"> 
              <div class="panel-heading">Doenças e Distúrbios Associados</div>
               <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label><u>Pressão/hipotensão - tratamento:</u></label>
                                <input type="text" class="form-control input-sm" placeholder="Pressão alta">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Diabetes - tratamento:</label>
                                <input type="text" class="form-control input-sm" placeholder="Diabetes tratamento">
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Tipo sanguíneo:</label>
                                <input type="text" class="form-control input-sm" placeholder="Tipo sanguíneo">
                            </div>
                        </div>
                    </div>
              
            </div> <!-- Fecha div Doenças e Distúrbios Associados -->
            
            <!-- Dados Vitais -->
            <div class="panel panel-default"> 
                <div class="panel-heading"> Dados Vitais </div>
                <div class="panel-body"> 
                    <div class="row"> 
                        <div class="form-group col-sm-4"> 
                        <label><u>PA (Pressão arterial) - tratamento:</u></label>
                        <input type="text" class="form-control input-sm" placeholder="Pressão arterial">        
                        </div>
                        <div class="form-group col-sm-4"> 
                        <label><u>FC (Frequência cardíaca) - bpm:</u></label>
                        <input type="text" class="form-control input-sm" placeholder="Frequência cardíaca">        
                        </div>
                        <div class="form-group col-sm-4"> 
                        <label><u>FR (Frequência respiratória) - rpm:</u></label>
                        <input type="text" class="form-control input-sm" placeholder="Frequência respiratória">        
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Fecha div tab2 -->
        
    </div> <!-- Fecha div tab-content -->
        
</form>



		 </section>     
        </div> <!-- Fecha div 1-->
       

        </section> <!-- Fecha section content -->
    </div> <!-- Fecha DIV content-wrapper -->


<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>