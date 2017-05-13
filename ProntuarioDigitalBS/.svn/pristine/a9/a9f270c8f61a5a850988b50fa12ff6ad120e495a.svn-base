<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Pacientes</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            
            <ul class="breadcrumb">
                <li><a href="http://<?=$_SERVER['HTTP_HOST']?>">Início</a><span class="divider"></span></li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes">Pacientes</a><span class="divider"></span></li>
                <li class="active">Visualizar</li>
            </ul>
            
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Dados Pessoais</a></li>
                <!--
                <li><a href="#tab2" data-toggle="tab">Documentos</a></li>
                <li><a href="#tab3" data-toggle="tab">Endereço/Contato</a></li>
                <li><a href="#tab4" data-toggle="tab">Acompanhante/Responsável</a></li>
                -->
            </ul>       
            <div class="tab-content">
                <!--  Tab1 -->
                <div class="tab-pane fade in active" id="tab1"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Dados Pessoias</div>
                        <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                            <div class="panel-body">                               
                                <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                            </div> <!-- Fecha div panel-body -->
                        </div> <!-- Fecha div panel panel-default -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Número do Prontuário</label>
                                    <input type="text" class="form-control input-sm"  maxlength="20" placeholder="Número do Prontuário" value="<?= $paciente['Num_Prontuario'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Cadastro</label>
                                    <input name="data_cadastro" type="date" id="date" class="form-control input-sm" readonly="readonly"  value="<?= $paciente['DataCriacao'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>* Nome do Paciente</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Paciente" value="<?= $paciente['Nome_Pessoa'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Apelido do Paciente</label>
                                    <input type="text" class="form-control input-sm" maxlength="15" placeholder="Apelido do Paciente" value="<?= $paciente['Nome_Social'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Nome do Pai</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Pai" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>Nome do Mãe</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Mãe" value="<?= $paciente['Nome_Mae'] ?>">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>Data de Nascimento</label>
                                    <input name="data_nascimento" type="date" id="date" class="form-control input-sm"  value="<?= $paciente['Data_Nascimento'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Idade</label>
                                    <input name="idade" type="text" class="form-control input-sm" maxlength="10" placeholder="Idade do paciente" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                              
                                <div class="form-group col-sm-4">
                                    <label>Naturalidade</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="Acre">Acre - AC</option>
                                        <option value="Alagoas">Alagoas - AL</option>
                                        <option value="Amapa">Amapá - AP</option>
                                        <option value="Amazonas">Amazonas - AM</option>
                                        <option value="Bahia">Bahia  - BA</option>
                                        <option value="Ceara">Ceará - CE</option>
                                        <option value="Distrito Federal">Distrito Federal  - DF</option>
                                        <option value="Espirito Santo">Espírito Santo - ES</option>
                                        <option value="Goias">Goiás - GO</option>
                                        <option value="Maranhao">Maranhão - MA</option>
                                        <option value="Mato Grosso">Mato Grosso - MT</option>
                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul - MS</option>
                                        <option value="Minas Gerais">Minas Gerais - MG</option>
                                        <option value="Para">Pará - PA</option>
                                        <option value="Paraiba">Paraíba - PB</option>
                                        <option value="Parana">Paraná - PR</option>
                                        <option value="Pernambuco">Pernambuco - PE</option>
                                        <option value="Piaui">Piauí - PI</option>
                                        <option value="Rio de Janeiro">Rio de Janeiro - RJ</option>
                                        <option value="Rio Grande do Norte">Rio Grande do Norte - RN</option>
                                        <option value="Rio Grande do Sul">Rio Grande do Sul - RS</option>
                                        <option value="Rondonia">Rondônia - RO</option>
                                        <option value="Roraima">Roraima - RR</option>
                                        <option value="Santa Catarina">Santa Catarina - SC</option>
                                        <option value="Sao Paulo">São Paulo - SP</option>
                                        <option value="Sergipe">Sergipe - SE</option>
                                        <option value="Tocantins">Tocantins - TO</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Nacionalidade</label>
                                    <input type="text" class="form-control input-sm " maxlength="50" placeholder="Nacionalidade" value="<?= $paciente['Nacionalidade'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Tempo em São Paulo</label>
                                    <input type="text" class="form-control input-sm" maxlength="15" placeholder="Tempo em São Paulo" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Gênero</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Feminino</option>
                                        <option value="">Masculino</option>
                                        <option value="">Outros</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Origem Étnica</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Branco </option>
                                        <option value="">Pardo</option>
                                        <option value="">Negro</option>
                                        <option value="">Indígena</option>
                                        <option value="">Amarelo(a)</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Estado Civil</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Solteiro</option>
                                        <option value="">Casado</option>
                                        <option value="">Divorciado</option>
                                        <option value="">Viúvo(a)</option>
                                        <option value="">Outros</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Filhos</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Quantos Filhos</label>
                                    <input type="text" class="form-control input-sm" maxlength="2" placeholder="Quantos Filhos">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Escolaridade</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Analfabeto</option>
                                        <option value="">Ensino infantil</option>
                                        <option value="">Ensino Fundamental</option>
                                        <option value="">Médio Incompleto</option>
                                        <option value="">Médio Completo</option>
                                        <option value="">Superior Incompleto</option>
                                        <option value="">Superior Completo</option>
                                        <option value="">Especialização</option>
                                        <option value="">Mestrado</option>
                                        <option value="">Doutorado</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Religião</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="">Catolicismo</option>
                                        <option value="">Evangélica</option>
                                        <option value="">Judaísmo</option>
                                        <option value="">Espiritualismo</option>
                                        <option value="">Islamismo</option>
                                        <option value="">Hinduísmo</option>
                                        <option value="">Budismo</option>
                                        <option value="">Ateísmo</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Profissão</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Profissão" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Ocupação</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Ocupação" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Renda Familiar</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Menor que três salários mínimos</option>
                                        <option>Maior que três salários mínimos</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Possui Veículo</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Veículo Adaptado</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Placa</label>
                                    <input type="text" class="form-control input-sm" maxlength="10" placeholder="Placa " value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Dados do Veículo</label>
                                    <input type="text" class="form-control input-sm" maxlength="50" placeholder="Marca, modelo, ano, cor" value="<?= $paciente['Nome_Pai'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Necessita de Acompanhante ou responsável</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                            </div><!-- div class row -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/visualizarPrint?id=<?=$paciente['id_pessoa']?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> <!--div panel-body -->
                    </div><!--div panel-default -->
                </div><!--div tab1 -->
                <div class="tab-pane fade" id="tab2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Documentos</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Cartão Nacional de Saúde</label>
                                    <input type="text" class="form-control input-sm" maxlength="50" placeholder="CNS">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>CPF</label>
                                    <input type="text" id="cpf" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Menor sem doc. c/ foto</label>
                                    <select class="form-control input-sm" id="flg_menorSFoto">
                                        <option value="NULL">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Certidão de Nascimento</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Certidão de Nascimento">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>RG</label>
                                    <input type="text" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9&quot;" data-mask="" placeholder="(xx.xxx.xxx.x)">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Orgão Emissor</label>
                                    <input type="text" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                </div>  
                                <div class="form-group col-sm-4">
                                    <label>Data de Expedição</label>
                                    <input type="date" id="data" class="form-control input-sm">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Registro Nacional de Estrangeiro</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="RNE">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Orgão Emissor</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Orgão Emissor">
                                </div>                               
                                <div class="form-group col-sm-4">
                                    <label>País de Origem</label>
                                    <input type="text" class="form-control input-sm" maxlength="50" placeholder="País de Origem">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Entrada</label>
                                    <input type="date" id="data" class="form-control input-sm">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Expedição</label>
                                    <input type="date" id="data" class="form-control input-sm">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Validade</label>
                                    <input type="date" id="data" class="form-control input-sm">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Carteira Nacional de Habilitação</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="CNH">
                                </div>
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> <!--div panel-body -->
                    </div><!--div panel-default -->
                </div><!--fim do tab2 -->
                <!-- /.Endereço de contatos --> 
                <div class="tab-pane fade" id="tab3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Endereço</div>
                        <div class="panel-body">
                            <div class="row">
                                <form method="get" action=".">                                      
                                    <div class="form-group col-sm-4">
                                        <label>Tipo logradouro</label>
                                        <input type="text" id="rua" class="form-control input-sm" maxlength="20" placeholder="Avenida, Rua, Praça, Viela, Estrada">
                                    </div>   
                                    <div class="form-group col-sm-4">
                                        <label>Nome logradouro</label>
                                        <input type="text" id="rua" class="form-control input-sm" maxlength="100" placeholder="Vergueiro,Ibirapuera,Santo Amaro">
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
                                        <input type="text" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999-999 &quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bairro</label>
                                        <input name="bairro" type="text" id="bairro" class="form-control input-sm" maxlength="20" placeholder="Bairro">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="Cidade">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Estado</label>
                                        <select class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option value="Acre">Acre - AC</option>
                                            <option value="Alagoas">Alagoas - AL</option>
                                            <option value="Amapa">Amapá - AP</option>
                                            <option value="Amazonas">Amazonas - AM</option>
                                            <option value="Bahia">Bahia  - BA</option>
                                            <option value="Ceara">Ceará - CE</option>
                                            <option value="Distrito Federal">Distrito Federal  - DF</option>
                                            <option value="Espirito Santo">Espírito Santo - ES</option>
                                            <option value="Goias">Goiás - GO</option>
                                            <option value="Maranhao">Maranhão - MA</option>
                                            <option value="Mato Grosso">Mato Grosso - MT</option>
                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul - MS</option>
                                            <option value="Minas Gerais">Minas Gerais - MG</option>
                                            <option value="Para">Pará - PA</option>
                                            <option value="Paraiba">Paraíba - PB</option>
                                            <option value="Parana">Paraná - PR</option>
                                            <option value="Pernambuco">Pernambuco - PE</option>
                                            <option value="Piaui">Piauí - PI</option>
                                            <option value="Rio de Janeiro">Rio de Janeiro - RJ</option>
                                            <option value="Rio Grande do Norte">Rio Grande do Norte - RN</option>
                                            <option value="Rio Grande do Sul">Rio Grande do Sul - RS</option>
                                            <option value="Rondonia">Rondônia - RO</option>
                                            <option value="Roraima">Roraima - RR</option>
                                            <option value="Santa Catarina">Santa Catarina - SC</option>
                                            <option value="Sao Paulo">São Paulo - SP</option>
                                            <option value="Sergipe">Sergipe - SE</option>
                                            <option value="Tocantins">Tocantins - TO</option>
                                        </select>
                                    </div>
                                </form>
                            </div> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Contatos</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Residencial</label>
                                            <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Ramal</label>
                                            <input type="tel" id="ramal" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" placeholder="xxxx">							
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Celular</label>
                                            <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone para Recado</label>
                                            <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">						
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Nome para Recado</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome para Recado">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Email">
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> <!-- div panel panel-default -->
                                <div class="panel-heading">Ações</div><!-- div panel-heading -->
                                <div class="panel-body"> <!-- div panel-body -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> 
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> 
                    </div>
                </div> <!-- /fim do tab3 -->                     
                <div class="tab-pane fade" id="tab4"><!-- /fim do tab4 -->       
                    <div class="panel panel-default"><!-- /painel-default -->
                        <div class="panel-heading">Acompanhante Responsável</div><!-- div painel-heading -->
                        <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                            <div class="panel-body">                               
                                <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                            </div> <!-- Fecha div panel-body -->
                        </div> <!-- Fecha div panel panel-default -->
                        <div class="panel-body"><!-- /painel-body -->
                            <div class="row">
                                <form method="get" action=".">
                                    <div class="form-group col-sm-4">
                                        <label>* Nome do Acompanhante</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Acompanhante">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Acompanhante ou Responsável</label>
                                        <select class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Parente</option>
                                            <option>Amigo não Parente</option>
                                            <option>Cuidador Profissional</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Grau de Parentesc</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Acompanhante">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Residencial</label>
                                        <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99)9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">									
                                        <span class="form-control-feedback"></span>
                                    </div>                                 
                                    <div class="form-group col-sm-4">
                                        <label>Grau de Parentesco</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Grau de Parentesco:">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>CPF</label>
                                        <input type="text" id="cpf" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>RG</label>
                                        <input type="text" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9 &quot;" data-mask="" placeholder="xx.xxx.xxx.x">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Expedição</label>
                                        <input type="date" id="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Orgão Emissor</label>
                                        <input type="text" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                    </div>  
                                    <div class="form-group col-sm-4">
                                        <label>Registro Nacional de Estrangeiro</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="RNE">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Orgão Emissor</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Orgão Emissor">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>País de Origem</label>
                                        <input type="text" class="form-control input-sm" maxlength="50" placeholder="País de Origem ">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Entrada</label>
                                        <input type="date" id="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Expedição</label>
                                        <input type="date" id="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Validade</label>
                                        <input type="date" id="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Carteira Nacional de Habilitação</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="CNH">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Dados do Veículo</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Marca, modelo, ano, cor">
                                    </div>
                                </form>
                            </div>
                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn flat btn-primary">Pesquisar</button>                                              
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Endereço</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>O endereço é o mesmo do paciente</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Sim</option>
                                                <option>Não</option>                                           
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Tipo logradouro</label>
                                            <input type="text" id="rua" class="form-control input-sm" maxlength="20" placeholder="Avenida, Rua, Praça, Viela, Estrada">
                                        </div>   
                                        <div class="form-group col-sm-4">
                                            <label>Nome logradouro</label>
                                            <input type="text" id="rua" class="form-control input-sm" maxlength="100" placeholder="Vergueiro,Ibirapuera,Santo Amaro">
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
                                            <input type="text" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999-999 &quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bairro</label>
                                            <input name="bairro" type="text" id="bairro" class="form-control input-sm" maxlength="20" placeholder="Bairro">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Complemento</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Cidade">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Estado</label>
                                            <select class="form-control input-sm">
                                                <option value="NULL">Selecione</option>
                                                <option value="Acre">Acre - AC</option>
                                                <option value="Alagoas">Alagoas - AL</option>
                                                <option value="Amapa">Amapá - AP</option>
                                                <option value="Amazonas">Amazonas - AM</option>
                                                <option value="Bahia">Bahia  - BA</option>
                                                <option value="Ceara">Ceará - CE</option>
                                                <option value="Distrito Federal">Distrito Federal  - DF</option>
                                                <option value="Espirito Santo">Espírito Santo - ES</option>
                                                <option value="Goias">Goiás - GO</option>
                                                <option value="Maranhao">Maranhão - MA</option>
                                                <option value="Mato Grosso">Mato Grosso - MT</option>
                                                <option value="Mato Grosso do Sul">Mato Grosso do Sul - MS</option>
                                                <option value="Minas Gerais">Minas Gerais - MG</option>
                                                <option value="Para">Pará - PA</option>
                                                <option value="Paraiba">Paraíba - PB</option>
                                                <option value="Parana">Paraná - PR</option>
                                                <option value="Pernambuco">Pernambuco - PE</option>
                                                <option value="Piaui">Piauí - PI</option>
                                                <option value="Rio de Janeiro">Rio de Janeiro - RJ</option>
                                                <option value="Rio Grande do Norte">Rio Grande do Norte - RN</option>
                                                <option value="Rio Grande do Sul">Rio Grande do Sul - RS</option>
                                                <option value="Rondonia">Rondônia - RO</option>
                                                <option value="Roraima">Roraima - RR</option>
                                                <option value="Santa Catarina">Santa Catarina - SC</option>
                                                <option value="Sao Paulo">São Paulo - SP</option>
                                                <option value="Sergipe">Sergipe - SE</option>
                                                <option value="Tocantins">Tocantins - TO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>  
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>                      
                    </div> <!-- fim do painel-default -->
                </div> <!-- /fim do tab4 -->
            </div><!-- /.tab-content -->
            
            <?php if(isset($paciente)) { echo '<pre>'; print_r($paciente); echo'</pre>'; } ?>
            
            
            
            
        </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
