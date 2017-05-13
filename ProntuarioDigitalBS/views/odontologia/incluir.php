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
                <li><a href="index.php">Início</a><span class="divider"></span></li>
                <li><a href="?pagina=Pesquisar">Odontologia</a><span class="divider"></span></li>
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
                <li><a href="#tab3" data-toggle="tab">Endereço/Contato</a></li>
                <li><a href="#tab4" data-toggle="tab">Acompanhante/Responsável</a></li>
                <li><a href="#tab5" data-toggle="tab">Dados da Saúde</a></li>
                <li><a href="#tab6" data-toggle="tab">Exame físico</a></li>
                <li><a href="#tab7" data-toggle="tab">Odontologia Infantil</a></li>
            </ul>   
            <div class="tab-content">
                <!--  Tab1 -->
                <div class="tab-pane fade in active" id="tab1"> 
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Número do Prontuário</label>
                                    <input type="text" class="form-control input-sm"  maxlength="09" placeholder="Número do Prontuário">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Nome do Paciente</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Paciente">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Cartão Nacional de Saúde</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="CNS">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Nome da Mãe</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Mãe">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Nascimento</label>
                                    <input type="date" id="date" class="form-control input-sm">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Idade</label>
                                    <input type="text" class="form-control input-sm" maxlength="70" placeholder="Idade da Mãe">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Origem</label>
                                    <input type="text" class="form-control input-sm" maxlength="15" placeholder="Origem">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Naturalidade</label>
                                    <select class="form-control input-sm">
                                        <option value="NULL">Selecione</option>
                                        <option value="Acre">Acre - AC</option>
                                        <option value="Alagoas">Alagoas - AL</option>
                                        <option value="Amapá">Amapá - AP</option>
                                        <option value="Amazonas">Amazonas - AM</option>
                                        <option value="Bahia">Bahia     - BA</option>
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
                                        <option value="Paulo">São Paulo - SP</option>
                                        <option value="Sergipe">Sergipe - SE</option>
                                        <option value="Tocantins">Tocantins - TO</option>
                                    </select>
                                </div>
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
                                        <option value="">Outros</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Etnia</label>
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
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Religião">
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
                                    <label>Necessita de Acompanhante</label>
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
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> <!--div panel-body -->
                    </div><!--div panel-default -->
                </div><!--div tab1 -->
                <div class="tab-pane fade" id="tab2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Cartão nacional de saúde</label>
                                    <input type="text" class="form-control input-sm" maxlength="50" placeholder="CNS">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>CPF</label>
                                    <input type="text" id="cpf" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Menor sem documento com foto:</label>
                                    <select class="form-control input-sm" id="flg_menorSFoto">
                                        <option value="NULL">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Certidão de Nascimento</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="CN">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>RG</label>
                                    <input type="text" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9&quot;" data-mask="" placeholder="(xx.xxx.xxx.x)">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Data de Expedição</label>
                                    <input type="date" id="data" class="form-control input-sm">
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
                                    <label>Outros</label>
                                    <input type="text" class="form-control input-sm" maxlength="20" placeholder="Outros">
                                </div>
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
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
                                        <label>CEP</label>
                                        <input type="text" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999-999 &quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome logradouro</label>
                                        <input type="text" id="rua" class="form-control input-sm" placeholder="Nome logradouro ">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bairro</label>
                                        <input name="bairro" type="text" id="bairro" class="form-control input-sm" placeholder="Bairro">
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
                                        <label>Cidade</label>
                                        <input type="text" class="form-control input-sm" placeholder="Cidade">
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
                                            <label>Telefone Comercial</label>
                                            <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">						
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> <!-- div panel panel-default -->
                                <div class="panel-heading">Ações</div><!-- div panel-heading -->
                                <div class="panel-body"> <!-- div panel-body -->
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> 
                    </div>
                </div> <!-- /fim do tab3 -->                     
                <div class="tab-pane fade" id="tab4"><!-- /fim do tab4 -->       
                    <div class="panel panel-default"><!-- /painel-default -->
                        <div class="panel-body"><!-- /painel-body -->
                            <div class="row">
                                <form method="get" action=".">
                                    <div class="form-group col-sm-4">
                                        <label>Nome do Acompanhante</label>
                                        <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome do Acompanhante">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefone Residencial</label>
                                        <input type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99)9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">									
                                        <span class="form-control-feedback"></span>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>RG</label>
                                        <input type="text" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9 &quot;" data-mask="" placeholder="xx.xxx.xxx.x">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Grau de Parentesco</label>
                                        <input type="text" class="form-control input-sm" maxlength="30" placeholder="Grau de Parentesco:">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>CEP</label>
                                        <input type="text" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999 - 999&quot;" data-mask="" placeholder="xxxxx-xxx">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome logradouro</label>
                                        <input name="rua" type="text" id="rua" class="form-control input-sm" maxlength="100" placeholder="Nome logradouro">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bairro</label>
                                        <input type="text" id="bairro" class="form-control input-sm" maxlength="50" placeholder="Bairro">
                                    </div>                                       
                                    <div class="form-group col-sm-4">
                                        <label>Número</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Número">
                                    </div>                                       
                                    <div class="form-group col-sm-4">
                                        <label>Apartamento</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Apartamento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Bloco</label>
                                        <input type="text" class="form-control input-sm" maxlength="10" placeholder="Bloco">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Cidade</label>
                                        <input name="cidade" type="text" id="cidade" class="form-control input-sm" placeholder="Cidade">
                                    </div>   
                                    <div class="form-group col-sm-4">
                                        <label>Estado</label>
                                        <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="2" placeholder="Estado">
                                    </div> 
                                </form>
                            </div>
                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>                      
                    </div> <!-- fim do painel-default -->
                </div> <!-- /fim do tab4 -->

                <div class="tab-pane fade" id="tab5"><!-- /fim do tab6 -->       
                    <div class="panel panel-default"><!-- /painel-default -->
                        <!--<div class="panel-heading">Dados da Saúde</div><!-- div painel-heading -->
                        <div class="panel-body"><!-- /painel-body -->
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>Ordem de necessidade de tratamento</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Cariologia</option>
                                        <option>Cirurgia</option>
                                        <option>COI-A(Hebiatria)</option>
                                        <option>COI-B</option>
                                        <option>COI-Reabilitadora</option>
                                        <option>Dentística</option>
                                        <option>Endodontia</option>
                                        <option>Odontopediatria</option> 
                                        <option>Periodontia</option>
                                        <option>Prótese Fixa</option>
                                        <option>Prótese Removível</option>
                                        <option>Prótese Total(superior, inferior)</option>
                                        <option>Radiologia</option>
                                    </select>
                                </div>


                            </div>
                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading"></div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="form-group col-sm-4">
                                            <label>Queixa principal</label>
                                            <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="50" placeholder="(SIC)">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>História atual da doença</label>
                                            <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="50" placeholder="História atual da doença">
                                        </div> 

                                        <div class="form-group col-sm-4">
                                            <label>História médica Pregressa</label>
                                            <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="50" placeholder="História médica Pregressa">
                                        </div> 

                                        <div class="form-group col-sm-4">
                                            <label>História médica atual</label>
                                            <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="50" placeholder="História médica atual">
                                        </div> 

                                        <div class="form-group col-sm-4">
                                            <label>Antecedentes familiares, Faz uso de Medicamentos ? </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Quais?</label>
                                            <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="50" placeholder="Descreva">
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->

                            <div class="panel panel-default"> 
                                <div class="panel-heading">Frequência</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="form-group col-sm-4">
                                            <label>Hábitos</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Fumo</option>
                                                <option>Alcool</option>
                                                <option>Drogas</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Alergia</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Analgésicos</option>
                                                <option>Anti-inflamatórios</option>
                                                <option>Antibióticos</option>
                                                <option>Anestésicos</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Tem ou já teve ?</label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Asma/Bronquite</option>
                                                <option>Pneumonia</option>
                                                <option>Hipertensão</option>
                                                <option>Hipotensão</option>
                                                <option>Problemas Cardíacos</option>
                                                <option>Cirurgia cardíaca</option>
                                                <option>AVC</option>
                                                <option>Problemas de Tireóide</option>
                                                <option>Problemas de Figado</option>
                                                <option>Problemas Renais</option>
                                                <option>Úlceras Gástricas</option>
                                                <option>Hepatite</option>
                                                <option>Tuberculose</option>
                                                <option>Sífilis</option>
                                                <option>HIV positivo</option>
                                                <option>Doenças Infantis</option>
                                                <option>Febre Reumática</option>
                                                <option>Hemofilia</option>
                                                <option>Anemias</option>
                                                <option>Hemorragias</option>
                                                <option>Transfusão de sangue</option>
                                                <option>Convulsão</option>
                                                <option>Epilepsia</option>
                                                <option>Tratamento Psiquiátrico</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default"> 
                                <div class="panel-heading">Sangramento</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="form-group col-sm-4">
                                            <label> Já se submeteu a algum tratamento cirúrgico ? </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label> Hemorragias ? </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label> Possui alterações de cicatrização ? </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>
                    </div> <!-- fim do painel-default -->
                </div> <!-- /fim do tab5 -->

                <div class="tab-pane fade" id="tab6"><!-- /fim do tab6 -->       
                    <div class="panel panel-default"><!-- /painel-default -->
                       <!-- <div class="panel-heading">Exame físico</div><!-- div painel-heading -->
                        <div class="panel-body"><!-- /painel-body -->
                            <div class="row">

                                <div class="form-group col-sm-4">
                                    <label> Extrabucal </label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Assimetria</option>
                                        <option>Linfonodos</option>
                                        <option>ATM (Desvio de Abertura e Fechamento, Sintomatologia Dolorosa, Limitação de Abertura, Creptação e Estalidos)</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>Intrabucal</label>
                                    <input name="uf" type="text" id="uf" class="form-control input-sm" maxlength="80" placeholder="História médica atual">
                                </div> 

                                <div class="form-group col-sm-4">
                                    <label> Avaliação dos sinais vitais</label>
                                    <select class="form-control input-sm">
                                        <option>Selecione</option>
                                        <option>Pulso, PA (Pressão Arterial), Respiração e Temperatura (Cº)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div>      
                    </div> <!-- fim do painel-default -->
                </div> <!-- /fim do tab6 -->



                <div class="tab-pane fade" id="tab7"><!-- /fim da tab7 -->       
                    <div class="panel panel-default"><!-- /painel-default -->
                        <!--<div class="panel-heading">Odontologia infantil</div><!-- div painel-heading -->
                        <div class="panel-body"><!-- /painel-body -->
                            <div class="row">

                            </div>


                            <div class="panel panel-default"> 
                                <div class="panel-heading"> Exame Clinico</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="form-group col-sm-4">
                                            <label> Clinica Infantil </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option> Dentes Presentes, Carie, Mancha Branca, Restaurações, Dentes que Foram Extraidos, Dentes que Necessitam de Terapia Pulpar </option>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label> Exame Inicial </label>
                                            <input type="date" id="date" class="form-control input-sm">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label> Exame final </label>
                                            <input type="date" id="date" class="form-control input-sm">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label> Planejamento Clinica Infantil </label>
                                            <select class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option> Sequencia </option>
                                                <option> Procedimento </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>  




                            <div class="panel panel-default"> <!-- inicio do painel-default -->
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->

                        </div>                      
                    </div> <!-- fim do painel-default -->
                </div> <!-- /fim do tab7 -->


            </div>
        </div>
    </section>  
</div> <!-- /content-wrapper -->

<script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.phone.extensions.js" type="text/javascript"></script>


<!-- Adicionando JQuery Mascara-->

<script>

                    $("[data-mask]").inputmask();
                    $("#telefone").mask("(999) 99999-9999");
                    $("#celular").mask("(999) 99999-9999");
                    $("#cep").mask("(99999-999");
                    $("cpf").mask("999.999.999-99");
</script>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
