<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <section class="content">
        <?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

        <div id="1">
            <section class="content">
                <script>
                    $(document).ready(function () {
                        $("#menu ul li:eq(5)").addClass("active");
                    });
                </script>
                <ul class="breadcrumb">
                    <li><a href="index.php">Início</a><span class="divider"></span></li>
                    <li><a href="?pagina=Pesquisar">Fisioterapia</a><span class="divider"></span></li>
                    <li class="active">Incluir</li>
                </ul>

                <?php
                if (isset($_POST['salvar'])) {
                    echo "salvar";
                }

                if (isset($_POST['cancelar'])) {
                    ?>
                    <script>
                        $(window.document.location).attr('href', 'principal.php?pagina=Pesquisar');
                    </script>
                    <?php
                }
                ?>

                <form method="post">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Dados Pessoais</a></li>
                        <li><a href="#tab2" data-toggle="tab">Documentos</a></li>
                        <li><a href="#tab3" data-toggle="tab">Endereço/Contato</a></li>
                        <li><a href="#tab4" data-toggle="tab">Acompanhante/Responsável</a></li>
                        <li><a href="#tab5" data-toggle="tab">Dados de Saúde</a></li>
                        <li><a href="#tab6" data-toggle="tab">Sócio Econômico</a></li>
                    </ul>
                    <br>

                    <div class="tab-content">
                        <!-- Dados Pessoais -->
                        <div class="tab-pane fade in active" id="tab1"> 
                            <!-- Inicio Informações Basicas --> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Informações basicas</div>
                                <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                    <div class="panel-body">                               
                                        <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Número de prontuário</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Número">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>*Nome do Paciente</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Apelido</label>
                                            <input type="text" class="form-control input-sm" maxlength="15" placeholder="Apelido">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de nascimento</label>
                                            <input type="date" class="form-control input-sm" maxlength="8">
                                        </div>                                                    
                                        <div class="form-group col-sm-4">
                                            <label>Data abertura prontuário</label>
                                            <input type="date" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Horário de abertura prontuário</label>
                                            <input type="time" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data início tratamento</label>
                                            <input type="date" class="form-control input-sm" maxlength="8">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data consulta</label>
                                            <input type="date" class="form-control input-sm" maxlength="8">
                                        </div>                                    
                                        <div class="form-group col-sm-4">
                                            <label>Nome da mãe</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome da mãe">								
                                        </div> 
                                        <div class="form-group col-sm-4">
                                            <label>Naturalidade</label>
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option value="Acre">Acre - AC</option>
                                                <option value="Amapá">Alagoas - AL</option>
                                                <option value="">Amapá - AP</option>
                                                <option value="Amazonas">Amazonas - AM</option>
                                                <option value="Bahia">Bahia  - BA</option>
                                                <option value="Ceará">Ceará - CE</option>
                                                <option value="Distrito Federa">Distrito Federal  - DF</option>
                                                <option value="Espírito Santo">Espírito Santo - ES</option>
                                                <option value="Goiás">Goiás - GO</option>
                                                <option value="Maranhão">Maranhão - MA</option>
                                                <option value="Mato Grosso">Mato Grosso - MT</option>
                                                <option value="Mato Grosso do Sul">Mato Grosso do Sul - MS</option>
                                                <option value="Pará">Minas Gerais - MG</option>
                                                <option value="">Pará - PA</option>
                                                <option value="Paraíba">Paraíba - PB</option>
                                                <option value="Paraná">Paraná - PR</option>
                                                <option value="Pernambuco">Pernambuco - PE</option>
                                                <option value="Piauí">Piauí - PI</option>
                                                <option value="Rio de Janeiro">Rio de Janeiro - RJ</option>
                                                <option value="Rio Grande do Norte">Rio Grande do Norte - RN</option>
                                                <option value="Rio Grande do Sul">Rio Grande do Sul - RS</option>
                                                <option value="Rondônia">Rondônia - RO</option>
                                                <option value="Roraima">Roraima - RR</option>
                                                <option value="Santa Catarina">Santa Catarina - SC</option>
                                                <option value="Paulo">São Paulo - SP</option>
                                                <option value="Sergipe">Sergipe - SE</option>
                                                <option value="Tocantins">Tocantins - TO</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Sexo</label>
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option value="">Feminino</option>
                                                <option value="">Masculino</option>
                                                <option value="">Outros</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Etnia / Cor</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Branco</option>
                                                <option>Pardo</option>
                                                <option>Negro</option>
                                                <option>Indio</option>
                                                <option>Amarelo</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-sm-4">
                                            <label>Estado civil</label>        
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option>Solteiro(a)</option>
                                                <option>Casado(a)</option>
                                                <option>Divorciado(a)</option>
                                                <option>Viúvo(a)</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Escolaridade</label>
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option>Ensino Fundamental (completo)</option>
                                                <option>Ensino Fundamental (incompleto)</option>
                                                <option>Ensino Médio (completo)</option>
                                                <option>Ensino Médio (incompleto)</option>
                                                <option>Ensino Superior (completo)</option>
                                                <option>Ensino Superior (incompleto)</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Religião</label>
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option>Cristianismo</option>
                                                <option>Católico</option>
                                                <option>Ortodoxo</option>
                                                <option>Protestante</option>
                                                <option>Islamismo</option>
                                                <option>Budismo</option>
                                                <option>Hinduísmo</option>
                                                <option>Judaismo</option>
                                                <option>Espírita</option>
                                                <option>Mormons</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Profissão</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Profissão">
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div Informações Básicas -->
                            <!-- Inicio Diagnostico -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Diagnóstico</div>    
                                <div class="panel-body">
                                    <div class="form-group col-sm-4">
                                        <label>CID (Código Identificador de Doença)</label>
                                        <input type="text" class="form-control input-sm" maxlength="3" placeholder="CID">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Início Tratamento</label>
                                        <input type="date" class="form-control input-sm">
                                    </div>     
                                    <div class="form-group col-sm-4">
                                        <label>Consulta</label>
                                        <input type="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Mobilidade</label>
                                        <select class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option>Cadeira de rodas</option>
                                            <option>Marcha não funcional</option>
                                            <option>Marcha normal</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- Fecha div Diagnostico -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> <!-- Fecha div fade in active-->
                        <!-- Documentos -->
                        <div class="tab-pane fade" id="tab2"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">Documentos</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>RG</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="RG">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão Emissor</label>
                                            <input type="text" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CPF</label>
                                            <input type="text" class="form-control input-sm" maxlength="11" placeholder="CPF">                    
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CNS</label>
                                            <input type="text" class="form-control input-sm" maxlength="25" placeholder="Cartão Nacional de Saúde">
                                        </div>
                                    </div> <!-- Fecha row -->
                                </div><!-- Fecha panel body -->
                            </div> <!-- Fecha panel default -->  
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> <!-- Fecha div tab2 -->
                        <!-- TAP 3 Endereço / Contato -->
                        <!-- Endereço -->
                        <div class="tab-pane fade" id="tab3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Endereço</div>
                                <div class="panel-body">
                                    <div class="form-group col-sm-4">
                                        <label>Logradouro</label>
                                        <input type="text" class="form-control input-sm" maxlength="100" placeholder="Logradouro">								
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bairro</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Bairro">								
                                    </div>  
                                    <div class="form-group col-sm-4">
                                        <label>CEP</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="CEP">								
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Endereço -->
                            <!-- Contato -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Contato</div>
                                <div class="panel-body">
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Residencial</label>
                                        <input type="tel" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 999-9999&quot;" data-mask="" placeholder="(  ) XXX-XXXX">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Celular</label>
                                        <input type="tel" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" placeholder="(  ) XXXX-XXXX">
                                    </div>     
                                    <div class="form-group col-sm-4">
                                        <label>Recado</label>
                                        <input type="tel" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" placeholder="(  ) XXXX-XXXX">
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Contato -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div><!-- Fecha div tab3 -->
                        <!-- Sócio Econômico -->
                        <div class="tab-pane fade" id="tab4"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">Acompanhante/Responsável</div> 
                                <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                    <div class="panel-body">                               
                                        <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>*Nome</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control input-sm" maxlength="11" placeholder="Telefone">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Grau Parentesco</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Parentesco">
                                        </div>
                                    </div> <!-- Fecha row tab4 -->    
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Endereço">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha panel-body tab4 -->
                            </div> <!-- Fecha panel-default tab-4 --> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> <!-- Fecha div tab4 -->
                        <!-- TAB 5 Dados da Saúde -->
                        <div class="tab-pane fade" id="tab5"> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Doenças e Distúrbios Associados</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Pressão / Hipotensão</label>
                                            <input type="text" class="form-control input-sm" placeholder="Tratamento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Diabetes</label>
                                            <input type="text" class="form-control input-sm" placeholder="Diabetes tratamento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Tipo sanguíneo</label>
                                            <input type="text" class="form-control input-sm" placeholder="Tipo sanguíneo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Tabagismo</label>
                                            <input type="text" class="form-control input-sm" placeholder="Tratamento - qntd. dias">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Dermato Alterações / Alergias</label>
                                            <input type="text" class="form-control input-sm" placeholder="Analgésicos, Anti-inflamatórios, outros">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Ulcera de pressão e Gástricas</label>
                                            <input type="text" class="form-control input-sm" placeholder="Tratamento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Displidemia</label>
                                            <input type="text" class="form-control input-sm" placeholder="Não tratamento">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Doenças e Distúrbios Associados -->
                            <div class="panel panel-default">  <!-- Dados Vitais -->
                                <div class="panel-heading"> Dados Vitais </div>
                                <div class="panel-body"> 
                                    <div class="row"> 
                                        <div class="form-group col-sm-4"> 
                                            <label>PA (Pressão arterial)</label>
                                            <input type="text" class="form-control input-sm" placeholder="Tratamento">        
                                        </div>
                                        <div class="form-group col-sm-4"> 
                                            <label>FC (Frequência cardíaca) - bpm</label>
                                            <input type="text" class="form-control input-sm" placeholder="Frequência cardíaca">        
                                        </div>
                                        <div class="form-group col-sm-4"> 
                                            <label>FR (Frequência respiratória) - rpm</label>
                                            <input type="text" class="form-control input-sm" placeholder="Frequência respiratória">        
                                        </div>
                                        <div class="form-group col-sm-4"> 
                                            <label>Medicação</label>
                                            <input type="text" class="form-control input-sm" placeholder="Especifique">        
                                        </div>
                                        <div class="form-group col-sm-4"> 
                                            <label>Dose</label>
                                            <input type="text" class="form-control input-sm" placeholder="Medicação especifique">        
                                        </div>
                                        <div class="form-group col-sm-4"> 
                                            <label>Horário</label>
                                            <input type="text" class="form-control input-sm" placeholder="HH:MM">        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fecha dados Vitais --> 

                            <div class="panel panel-default"> 
                                <div class="panel-heading">Antecedentes Pessoais</div>

                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Hábitos de vida</label>
                                            <input type="text" class="form-control input-sm" placeholder="Hábitos de vida">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Atividades Físicas</label>
                                            <input type="text" class="form-control input-sm" placeholder="Atividades Físicas">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Alimentação</label>
                                            <input type="text" class="form-control input-sm" placeholder="Alimentação">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fecha div panel-dafault Antecedentes -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Dados sobre enfermidade / História da doença HDA</div>

                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Socorro</label>
                                            <input type="text" class="form-control input-sm" placeholder="Nível e conteúdo de conciencia">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Terapias realizadas</label>
                                            <input type="text" class="form-control input-sm" placeholder="Individual / Grupo">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Atividades atuais</label>
                                            <input type="text" class="form-control input-sm" placeholder="Especifique">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Queixa principal</div>            
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Alimentação</label>
                                            <input type="text" class="form-control input-sm" placeholder="Servi-se, beber e comer">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Outros</label>
                                            <input type="text" class="form-control input-sm" placeholder="Especifique">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>
                        <!-- Fim TAB 5 -->

                        <!-- TAB 6 Sócio econômico -->
                        <div class="tab-pane fade" id="tab6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Estudo sócio econômico do paciente </div>
                                <div class="panel-body">
                                    <div class="row"> 
                                        <div class="form-group col-sm-4">
                                            <label>Moradia</label>
                                            <input type="text" class="form-control input-sm" placeholder="casa própria | aluguel (Valor R$) | provisória">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Número de cômodos</label>
                                            <input type="text" class="form-control input-sm" placeholder="Número de cômodos">
                                        </div>  
                                        <div class="form-group col-sm-4">
                                            <label>Meio transporte da família</label>
                                            <input type="text" class="form-control input-sm" placeholder="carro particular | ônibus | metrô">
                                        </div> 
                                        <div class="form-group col-sm-4">
                                            <label>Composição Familiar</label>
                                            <input type="text" class="form-control input-sm" placeholder="pessoas que residem no endereço">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Renda Familiar</label>
                                            <input type="text" class="form-control input-sm" placeholder="Renda Familiar">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Benefício da Previdência</label>
                                            <input type="text" class="form-control input-sm" placeholder="Não, Deu entrada">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Benefício para cuidador de 25%</label>
                                            <input type="text" class="form-control input-sm" placeholder="Não, Deu entrada">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>
                        <!-- Fim TAB 6 -->
                    </div> <!-- Fecha div 1 -->
                    </div> <!-- Fecha div tab-content -->
                </form>
            </section>     <!-- Fecha section content -->
        </div> <!-- Fecha DIV content-wrapper -->
        <!-- Adicionado plugins AdminLTE para mascara Telefone -->
        <script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.phone.extensions.js" type="text/javascript"></script>

        <!-- Adicionado script para carregar plugins AdminLTE para mascara Telefone -->
        <script>
                    $("[data-mask]").inputmask();
        </script>
        <?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>