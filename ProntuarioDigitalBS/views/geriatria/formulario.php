<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <section class="content">
        <?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

        <div id="1">

            <script>
                $(document).ready(function () {
                    $("#menu ul li:eq(5)").addClass("active");
                });
            </script>
            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li><a href="/pacientes">Geriatria</a><span class="divider"></span></li>
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
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Dados Pessoais</a></li>
                <li><a href="#tab2" data-toggle="tab">Documentos</a></li>
                <li><a href="#tab3" data-toggle="tab">Endereço e Contato</a></li>
                <li><a href="#tab4" data-toggle="tab">Acompanhante ou Responsavel</a></li>
            </ul>
            <form action="cadastro" method="POST">
                <div class="tab-content">
                    <!-- Dados Pessoais -->
                    <div class="tab-pane fade in active" id="tab1">
                        <!-- Informações basicas -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Dados Pessoais</div>  
                            <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                <div class="panel-body">                               
                                    <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel-body">                              
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Número prontuário</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>*Nome</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de nascimento</label>
                                        <input type="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Idade</label>
                                        <input type="number" min="0" max="200" step="1" class="form-control input-sm" maxlength="3" placeholder="Idade"> <!--necessita apresenta a idade do usuário, calculada com base na data de nascimento que digitamos exemplo  000a00m00d).-->
                                    </div> 
                                    <div class="form-group col-sm-4">
                                        <label>CNS</label>
                                        <input type="number" min="0" max="200" step="1" class="form-control input-sm" maxlength="3" placeholder="Idade"> <!--necessita apresenta a idade do usuário, calculada com base na data de nascimento que digitamos exemplo  000a00m00d).-->
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome da Mãe</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome da Mãe">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de nascimento</label>
                                        <input type="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Idade</label>
                                        <input type="number" min="0" max="200" step="1" class="form-control input-sm" maxlength="3" placeholder="Idade"> <!--necessita apresenta a idade do usuário, calculada com base na data de nascimento que digitamos exemplo  000a00m00d).-->
                                    </div> 
                                    <div class="form-group col-sm-4">
                                        <label>Origem </label>

                                        <input type="text" class="form-control input-sm" maxlength="15" placeholder="Origem">
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Naturalidade</label>
                                        <select class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option value="Acre">Acre - AC</option>
                                            <option value="Alagoas">Alagoas - AL</option>
                                            <option value="Amapá">Amapá - AP</option>
                                            <option value="Amazonas">Amazonas - AM</option>
                                            <option value="Bahia">Bahia  - BA</option>
                                            <option value="Ceará">Ceará - CE</option>
                                            <option value="Distrito Federa">Distrito Federal  - DF</option>
                                            <option value="Espírito Santo">Espírito Santo - ES</option>
                                            <option value="Goiás">Goiás - GO</option>
                                            <option value="Maranhão">Maranhão - MA</option>
                                            <option value="Mato Grosso">Mato Grosso - MT</option>
                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul - MS</option>
                                            <option value="Minas Gerais">Minas Gerais - MG</option>
                                            <option value="Pará">Pará - PA</option>
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
                                            <option value="São Paulo">São Paulo - SP</option>
                                            <option value="Sergipe">Sergipe - SE</option>
                                            <option value="Tocantins">Tocantins - TO</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Características -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Características</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Nacionalidade (País)</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Nacionalidade">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Gênero</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Origem étinica</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Branca</option>
                                            <option>Negra</option>
                                            <option>Amarela</option>
                                            <option>Parda</option>
                                            <option>Indígena</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Estado civil</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Solteiro(a)</option>
                                            <option>Casado(a)</option>
                                            <option>Divorciado(a)</option>
                                            <option>Viúvo(a)</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Escolaridade</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Analfabeto</option>
                                            <option>Ensino Infantil</option>
                                            <option>Ensino Fundamental</option>
                                            <option>Ensino Médio Incompleto</option>
                                            <option>Ensino Médio Completo</option>
                                            <option>Ensino Superior Incompleto</option>
                                            <option>Ensino Superior Completo</option>
                                            <option>Especialização</option>
                                            <option>Mestrado</option>
                                            <option>Doutorado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Religião</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Catolicismo</option>
                                            <option>Evangélica</option>
                                            <option>Judaísmo</option>
                                            <option>Espiritualismo</option>
                                            <option>Islamismo</option>
                                            <option>Hinduísmo</option>
                                            <option>Espiritismo</option>
                                            <option>Budismo</option>
                                            <option>Ateísmo</option>
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
                                        <label>Necessita de acompanhante ou responsável?</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                    <!-- colocar origem-->
                                </div>                                                   
                            </div>                         
                        </div> 
                        <div class="panel panel-default"> <!-- inicio do painel-default -->
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

                    <!-- Documentos -->
                    <div class="tab-pane fade" id="tab2">
                        <div class="panel panel-default" id="flg_CNS_CPF">
                            <div class="panel-heading">Documentos Pessoais</div>
                            <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                <div class="panel-body">                               
                                    <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel-body">                        
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>CNS - Cartão Nacional de Saúde</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Número do CNS">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>CPF - Cadastro de Pessoa Física</label>
                                        <input type="text" class="form-control input-sm" maxlength="11" placeholder="Número do CPF"> <!--Necessita máscara-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" id="flg_CN">
                            <div class="panel-heading">CN - Certidão de Nascimento</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Menor sem Documento de Identificação com foto?</label>
                                        <select class="form-control input-sm menorBrOt" id="flg_menorSFoto">
                                            <option value="NULL">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Número da CN</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Número da CN">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" id="flg_RG">
                            <div class="panel-heading">RG - Registro Geral</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Número do RG</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Número do RG">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Orgão Emissor</label>
                                        <input type="text" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Expedição</label>
                                        <input type="date" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" id="flg_RNE">
                            <div class="panel-heading">RNE - Registro Nacional do Estrangeiro</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Número do RNE</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Número do RNE">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Outros</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Outros">
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
                    <!-- Endereço -->
                    <div class="tab-pane fade" id="tab3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Endereço</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Tipo logradouro</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Rua</option>
                                            <option>Avenida</option>
                                            <option>Praça</option>
                                            <option>Viela</option>
                                            <option>Estrada</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome do logradouro</label>
                                        <input type="text" class="form-control input-sm" maxlength="100" placeholder="Exemplo: para 'Avenida Paulista', coloque somente 'Paulista'">
                                    </div>                                                           

                                    <div class="form-group col-sm-4">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Número</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Número">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bloco</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Bloco">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Apartamento</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Apartamento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>CEP</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="CEP">
                                    </div>                               
                                    <div class="form-group col-sm-4">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Cidade">    
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Estado</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Acre</option>
                                            <option>Alagoas</option>
                                            <option>Amapá</option>
                                            <option>Amazonas</option>
                                            <option>Bahia</option>
                                            <option>Ceará</option>
                                            <option>Distrito Federal</option>
                                            <option>Espírito Santo</option>
                                            <option>Goiás</option>
                                            <option>Maranhão</option>
                                            <option>Mato Grosso</option>
                                            <option>Mato Grosso do Sul</option>
                                            <option>Minas Gerais</option>
                                            <option>Pará</option>
                                            <option>Paraíba</option>
                                            <option>Paraná</option>
                                            <option>Pernambuco</option>
                                            <option>Piauí</option>
                                            <option>Rio de Janeiro</option>
                                            <option>Rio Grande do Norte</option>
                                            <option>Rio Grande do Sul</option>
                                            <option>Rondônia</option>
                                            <option>Roraima</option>
                                            <option>Santa Catarina</option>
                                            <option>São Paulo</option>
                                            <option>Sergipe</option>
                                            <option>Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contato -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Contato</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Residêncial</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Telefone Residêncial">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Celular</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Telefone Celular">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="E-mail">
                                    </div>                   
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Comercial</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Telefone Comercial">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Ramal</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Ramal">
                                    </div>                            
                                    <div class="form-group col-sm-4">
                                        <label>Telefone para recado</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Telefone para recado">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome para recado</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome para recado">
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
                    <!-- Acompanhante -->
                    <div class="tab-pane fade" id="tab4">
                        <!-- Dados Pessoais -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> Dados Pessoais </div>
                            <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                <div class="panel-body">                               
                                    <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>*Nome do Acompanhante ou Responsável</label>
                                        <input type="text" class="form-control input-sm" placeholder="Telefone para recado">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Pais de origem</label>
                                        <select class="form-control input-sm" id="flg_acpPais">
                                            <option value="NULL">Selecione</option>
                                            <option value="BR">Brasil</option>
                                            <option value="OT">Outro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Tipo de acompanhante</label>
                                        <select class="form-control input-sm" id="flg_acpTipo">
                                            <option value="NULL">Selecione</option>
                                            <option value="par">Parente</option>
                                            <option value="amg">Amigo não parente</option>
                                            <option value="pro">Cuidador profissional</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Grau de parentesco</label>
                                        <select class="form-control input-sm" id="flg_acpTipo">
                                            <option>Selecione</option>
                                            <option>Mãe</option>
                                            <option>Pai</option>
                                            <option>Irmão</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Documentos -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Documentos </div>
                            <div class="panel-body">
                                <!-- Nacional -->
                                <div id="flg_acpBr">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>RG</label>
                                            <input type="text" class="form-control input-sm" placeholder="RG – Registro Geral">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão emissor</label>
                                            <input type="text" class="form-control input-sm" placeholder="Orgão emissor">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de expedição</label>
                                            <input type="date" class="form-control input-sm" placeholder="Data de expedição">
                                        </div>
                                        <!-- Estrangeiro -->                                

                                        <div class="form-group col-sm-4">
                                            <label>RNE</label>
                                            <input type="text" class="form-control input-sm" placeholder="RNE – Registro Nacional de Estrangeiro">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão emissor</label>
                                            <input type="text" class="form-control input-sm" placeholder="Orgão emissor">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de expedição</label>
                                            <input type="date" class="form-control input-sm" placeholder="Data de expedição">
                                        </div>                                                                  
                                        <div class="form-group col-sm-4">
                                            <label>Data de validade</label>
                                            <input type="text" class="form-control input-sm" placeholder="Data de validade">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de entrada</label>
                                            <input type="text" class="form-control input-sm" placeholder="Data de entrada">
                                        </div>                                

                                        <!-- Geral -->                             
                                        <div class="form-group col-sm-4">
                                            <label>CPF</label>
                                            <input type="text" class="form-control input-sm" placeholder="CPF – Cadastro de Pessoa Física">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CN</label>
                                            <input type="text" class="form-control input-sm" placeholder="CN – Certidão de Nascimento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Veiculo -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> Veiculo </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Possui veiculo?</label>
                                        <select class="form-control input-sm" id="flg_veiculoAcomp">
                                            <option value="NULL">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Dados do veiculo</label>
                                        <input type="text" class="form-control input-sm" placeholder="Dados do veiculo">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Placa</label>
                                        <input type="text" class="form-control input-sm" placeholder="Placa">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Veiculo adaptado</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                        <!-- Endereço -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Endereço</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>O endereço é o mesmo do paciente?</label>
                                        <select class="form-control input-sm" id="flg_endPacAcomp">
                                            <option value="NULL">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>                                    
                                    <div id="flg_endAcomp">
                                        <div class="form-group col-sm-4">
                                            <label>Tipo logradouro</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Rua</option>
                                                <option>Avenida</option>
                                                <option>Praça</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Nome logradouro</label>
                                            <input type="text" class="form-control input-sm" placeholder="Nome logradouro">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Numero</label>
                                            <input type="text" class="form-control input-sm" placeholder="Numero">
                                        </div>                                           
                                        <div class="form-group col-sm-4">
                                            <label>Complemento</label>
                                            <input type="text" class="form-control input-sm" placeholder="Complemento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CEP</label>
                                            <input type="text" class="form-control input-sm" placeholder="CEP">
                                        </div>                                                                                  
                                        <div class="form-group col-sm-4">
                                            <label>Cidade</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>São Paulo</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Estado</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Acre</option>
                                                <option>Alagoas</option>
                                                <option>Amapa</option>
                                            </select>
                                        </div>                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contato -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Contato</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Residencial</label>
                                        <input type="text" class="form-control input-sm" placeholder="Telefone Residencial">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Celular</label>
                                        <input type="text" class="form-control input-sm" placeholder="Telefone Celular">
                                    </div>                                                                            
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Comercial</label>
                                        <input type="text" class="form-control input-sm" placeholder="Telefone Comercial">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Ramal</label>
                                        <input type="text" class="form-control input-sm" placeholder="Ramal">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone para recado</label>
                                        <input type="text" class="form-control input-sm" placeholder="Telefone para recado">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome para recado</label>
                                        <input type="text" class="form-control input-sm" placeholder="Nome para recado">
                                    </div>                                   
                                </div>
                            </div>   
                        </div>
                        <div class="panel panel-default"> <!-- inicio do painel-default -->
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
                </div>
            </form>  
        </div>
    </section>   
</div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>