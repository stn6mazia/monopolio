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
                    <li><a href="/">Início</a><span class="divider"></span></li>
                    <li><a href="/psicologia">Psicologia</a><span class="divider"></span></li>
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
                        <li class="active"><a href="#tab1" data-toggle="tab">Informações Sobre o Paciente</a></li>
                        <li><a href="#tab2" data-toggle="tab">Dados Pessoais</a></li>
                        <li><a href="#tab3" data-toggle="tab">Documentos</a></li>
                        <li><a href="#tab4" data-toggle="tab">Endereço/Contato</a></li>
                        <li><a href="#tab5" data-toggle="tab">Acompanhante/Responsável</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Tab1 -->
                        <div class="tab-pane fade in active" id="tab1"> 
                            <div class="panel panel-default"> 
                                
                                <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                    <div class="panel-body">                               
                                        <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>*Nome</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Nascimento</label>
                                            <input type="date" class="form-control input-sm" required>
                                        </div>
                                        <div class="form-group col-sm-4" >
                                            <label>E-mail</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="E-mail">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Contatos</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Residencial</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Celular</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Recado</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Sintomas</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Descreva</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Descreva" required>							
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Disponibilidade do Paciente</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Selecione</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="1x/semana" >1x/semana</option>
                                                <option value="1x/15dias">1x/15 dias</option>
                                                <option value="1x/mês">1x/mês</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Questionário sobre tratamentos anteriores</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Já participou de tratamentos emocionais antes? (sim/não) </label>                                        
                                            <select id="tratamento" class= "form-control">
                                                <option value="Sim" >Sim</option>
                                                <option value="Não">Não</option>
                                            </select>    
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Nome </label>
                                            <input type="text" class="form-control input-sm tratamento" maxlength="50" placeholder="Descreva" >	
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Que tipo de atendimento ?</label>                                                     
                                            <select class= "form-control tratamento">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Psiquiatra" >Psiquiatra</option>
                                                <option value="Psicólogo" >Psicólogo</option>
                                                <option value="Atendimento Individual" >Atendimento Individual</option>
                                                <option value="Atendimento em Grupo" >Atendimento em Grupo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fecha div panel-body -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Medicações e usos (psicotrópicos)? (Sim/não) </div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <select id="medicacoes" class= "form-control">
                                                <option value="Sim" >Sim</option>
                                                <option value="Não">Não</option>
                                            </select>                                      
                                            <label>Quais ?</label>
                                            <textarea class="form-control medicacoes" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fecha div panel-body -->
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Questionamento complementar</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Outros tratamentos na Uninove? (sim/não)</label>
                                            <select id="complementar" class= "form-control">
                                                <option value="Sim" >Sim</option>
                                                <option value="Não">Não</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Em qual Local?</label>
                                            <input type="text" class="form-control input-sm complementar" maxlength="50" placeholder="Descreva" >							
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Fecha div panel-body -->
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
                        </div> <!-- Fecha Tab 1 -->
                        <!-- Tab2 --> 
                        <div class="tab-pane fade" id="tab2"> 
                            <div class="panel panel-default"> 
                                <!--<div class="panel-heading">Dados Pessoais</div> -->
                                <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                    <div class="panel-body">                               
                                        <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel-body"> 
                                    <div class="row">
                                         <div class="form-group col-sm-4">
                                    <label>Número do Prontuário</label>
                                    <input type="text" class="form-control input-sm"  maxlength="09" placeholder="Número do Prontuário">
                                </div>
                                        <div class="form-group col-sm-4">
                                            <label>*Nome Paciente</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome Paciente" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Nascimento</label>
                                            <input type="date" class="form-control input-sm" required>
                                        </div>                                        
                                        <div class="form-group col-sm-4" >
                                            <label>Idade</label>
                                            <input type="text" class="form-control input-sm" maxlength="5" placeholder="Idade">
                                            <span class="form-control-feedback"></span>
                                        </div>                                       
                                        <div class="form-group col-sm-4">
                                            <label>Nome da Mãe</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome da Mãe" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Nascimento</label>
                                            <input type="date" class="form-control input-sm" required>
                                        </div>
   
                                

                                        <div class="form-group col-sm-4" >
                                            <label>Origem</label>
                                            <input type="text" class="form-control input-sm" maxlength="15" placeholder="Origem">
                                            <span class="form-control-feedback"></span>
                                        </div> 
                                        <div class="form-group col-sm-4" >
                                            <label>Nacionalidade</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Nacionalidade">
                                            <span class="form-control-feedback"></span>
                                        </div> 
                                        <div class="form-group col-sm-4" >
                                            <label>Religião</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Religião">
                                            <span class="form-control-feedback"></span>
                                        </div> 
                                        <div class="form-group col-sm-4">
                                            <label>Naturalidade</label>
                                            <select class= "form-control">
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
                                        <div class="form-group col-sm-4">                            
                                            <label>Gênero</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Masculino" >Masculino</option>
                                                <option value="Feminino" >Feminino</option>
                                                <option value="Outros" >Outros</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">                                       
                                            <label>Origem Étnica</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Branca" >Branca</option>
                                                <option value="Negra" >Negra</option>
                                                <option value="Amarela" >Amarela</option>
                                                <option value="Parda" >Parda</option>   
                                                <option value="Indígena" >Indígena</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">                                           
                                            <label>Estado Cívil</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Casado" >Casado</option>
                                                <option value="Solteiro" >Solteiro</option>
                                                <option value="Separado" >Separado</option>
                                                <option value="Divorciado" >Divorciado</option>   
                                                <option value="Viúvo" >Viúvo</option>
                                                <option value="Outros" >Outros</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">                                           
                                            <label>Escolaridade</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Analfabeto" >Analfabeto</option>
                                                <option value="Ensino Infantil" >Ensino Infantil</option>
                                                <option value="Ensino Fundamental" >Ensino Fundamental</option>
                                                <option value="Ensino Médio Incompleto" >Ensino Médio Incompleto</option>   
                                                <option value="Ensino Médio Completo" >Ensino Médio Completo</option>
                                                <option value="Ensino Superior Incompleto" >Ensino Superior Incompleto</option>
                                                <option value="Ensino Superior Completo" >Ensino Superior Completo</option>
                                                <option value="Especialização" >Especialização</option>
                                                <option value="Mestrado" >Mestrado</option>
                                                <option value="Doutorado" >Doutorado</option>                                                
                                            </select>
                                        </div>
                                         <div class="form-group col-sm-4">                                           
                                            <label>Necessita de Acompanhante ou Responsável?</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Sim" >Sim</option>
                                                <option value="Não" >Não</option>
                                            </select>
                                        </div>
                                         <div class="form-group col-sm-4" > 
                                            <label>Religião</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Religião">
                                            <span class="form-control-feedback"></span>
                                        </div>                                        
                                        <div class="form-group col-sm-4" > 
                                            <label>Profissão</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Profissão">
                                            <span class="form-control-feedback"></span>
                                        </div> 
                                        <div class="form-group col-sm-4" >
                                            <label>Ocupação</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Ocupação">
                                            <span class="form-control-feedback"></span>
                                        </div> 
                                       
                                        </div>
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
                        </div> <!-- Fecha TAB 2 -->
                        <!-- Tab3 --> 
                        <div class="tab-pane fade" id="tab3"> 
                            <div class="panel panel-default"> 
                               <!--- <div class="panel-heading">Documentos</div>-->
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Cartão Nacional de Saúde</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="CNS">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CPF</label>
                                            <input type="text" class="form-control input-sm" maxlength="11" placeholder="CPF">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Menor sem Documento de Identificação com foto?</label>
                                            <select class= "form-control">
                                                <option value="" >Selecione uma Opção</option>
                                                <option value="Sim" >Sim</option>
                                                <option value="Sim" >Não</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>*Certidão de Nascimento</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="CN" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>*RG</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="RG" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Expedição</label>
                                            <input type="date" class="form-control input-sm" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão Emissor</label>
                                            <input type="text" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>*Registro Nacional de Estrangeiro</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="RNE" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Outros</label>
                                            <input type="text" class="form-control input-sm" maxlength="20" placeholder="Outros" required>
                                        </div>
                                    </div> <!-- Fecha div class="row" -->
                                </div> <!-- Fecha div class="panel-body" -->
                            </div> <!-- Fecha div panel panel-default -->

                            <div class="panel panel-default"> 
                                <div class="panel-heading">Ações</div>
                                <div class="panel-body"> 
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                                            <button type="submit" name="cancelar" class="btn btn-danger">Cancelar</button>    
                                        </div>
                                    </div> <!-- Fecha div class="row" -->
                                </div> <!-- Fecha div class="panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
                        </div> <!-- Fecha TAB 3 -->

                        <!-- Tab4 --> 
                        <div class="tab-pane fade" id="tab4"> 
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Endereço</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>CEP</label>
                                            <input type="text" class="form-control input-sm" maxlength="15" placeholder="CEP" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Nome do Logradouro</label>
                                            <input type="text" class="form-control input-sm" maxlength="100" placeholder="Ex: Av .Vergueiro, Rua Ibirapuera, Praça Santo Amaro" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Número</label>
                                            <input type="text" class="form-control input-sm" maxlength="10" placeholder="Numero" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bloco</label>
                                            <input type="text" class="form-control input-sm" maxlength="10" placeholder="Bloco" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Apartamento</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Apartamento" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Complemento</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Complemento" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Cidade" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Bairro" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Estado</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Estado" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div> <!-- Fecha div class="row" -->
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div class="panel panel-default" -->

                            <div class="panel panel-default"> 
                                <div class="panel-heading">Contatos</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Residencial</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Celular</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Comercial</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Ramal</label>
                                            <input type="text" class="form-control input-sm" maxlength="10" placeholder="Ramal" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone para Recado</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Nome para Recado</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome para Recado" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div> <!-- Fecha div class="row" -->
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->

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
                        </div> <!-- Fecha TAB 4 -->
                        <!-- Tab5 --> 
                        <div class="tab-pane fade" id="tab5"> 
                            <div class="panel panel-default"> 
                               <!-- <div class="panel-heading">Informações Básicas 5</div> -->
                                <div class="panel panel-default"> <!-- inicio do painel-default -->                               
                                    <div class="panel-body">                               
                                        <label>Os campos sinalizado com o asterisco (*) são obrigatório o seu preenchimento.</label>                                                                 
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label> Nome do Acompanhante </label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="Nome" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                        <label>RG</label>
                                        <input type="text" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9&quot;" data-mask="" placeholder="(xx.xxx.xxx.x)">
                                    </div>  
                                        <div class="form-group col-sm-4">
                                            <label>Data de Nascimento </label>
                                            <input type="date" class="form-control input-sm" required>
                                        </div>
                                        <div class="form-group col-sm-4" >
                                            <label>E-mail</label>
                                            <input type="text" class="form-control input-sm" maxlength="70" placeholder="E-mail">
                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div>
                            <div class="panel panel-default"> 
                                <div class="panel-heading">Contato do Acompanhante ou Responsável</div>
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                         <div class="form-group col-sm-4">
                                            <label>CEP</label>
                                            <input type="text" class="form-control input-sm" maxlength="15" placeholder="CEP" required>
                                            <span class="form-control-feedback"></span>
                                        </div>  
                                         <div class="form-group col-sm-4">
                                            <label>Grau de Parentesco ou de Responsabilidade </label>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                            <span class="form-control-feedback"></span>
                                        </div>
                                       
                                        <div class="form-group col-sm-4">
                                            <label>Nome do Logradouro</label>
                                            <input type="text" class="form-control input-sm" maxlength="100" placeholder="Ex: Av .Vergueiro, Rua Ibirapuera, Praça Santo Amaro" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Número</label>
                                            <input type="text" class="form-control input-sm" maxlength="10" placeholder="Numero" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bloco</label>
                                            <input type="text" class="form-control input-sm" maxlength="10" placeholder="Bloco" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Apartamento</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Apartamento" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Complemento</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Complemento" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Cidade" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Bairro" required>
                                            <span class="form-control-feedback"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Estado</label>
                                            <input type="text" class="form-control input-sm" maxlength="50" placeholder="Estado" required>
                                            <span class="form-control-feedback"></span>
                                        </div>  
                                    </div>
                                </div> <!-- Fecha div panel-body -->
                            </div> <!-- Fecha div panel panel-default -->
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
                        </div> <!-- Fecha TAB 5 -->

                    </div> <!-- Fecha class="tab-content"  -->
                    </div> <!-- Fecha div id="1"-->         
            </section> <!-- Fecha class="content" --> 
        </div> <!-- Fecha class="content-wrapper"-->


        <script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.phone.extensions.js" type="text/javascript"></script>

        <script>
                        $("[data-mask]").inputmask();

                        $("#tratamento").change(function () {
                            if ($("#tratamento").val() == "Não") {

                                $(".tratamento").attr("disabled", "disabled");

                            } else {
                                $(".tratamento").removeAttr("disabled");
                            }
                        })

                        $("[data-mask]").inputmask();

                        $("#medicacoes").change(function () {
                            if ($("#medicacoes").val() == "Não") {

                                $(".medicacoes").attr("disabled", "disabled");

                            } else {
                                $(".medicacoes").removeAttr("disabled");
                            }
                        })

                        $("[data-mask]").inputmask();

                        $("#complementar").change(function () {
                            if ($("#complementar").val() == "Não") {

                                $(".complementar").attr("disabled", "disabled");

                            } else {
                                $(".complementar").removeAttr("disabled");
                            }
                        })

        </script>

        <?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>