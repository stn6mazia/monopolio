<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <section class="content">
        <?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

        <div id="1">
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#menu ul li:eq(5)").addClass("active");
                    $("input[name='data_cadastro']").val("<?php echo date('Y-m-d');?>");

                    /* Cálculo de Idade a partir da Data de Nascimento */

                    $("input[name='data_nascimento']").blur(function () {
                        /* Meses */
                        var diasMes = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

                        /* Data de Nascimento */
                        var dataNasc = $(this).val();
                        var diaNasc = dataNasc.toString().split('-')[2];
                        var mesNasc = dataNasc.toString().split('-')[1];
                        var anoNasc = dataNasc.toString().split('-')[0];

                        /* Data Atual */
                        var dataAtual = new Date();
                        var diaAtual = dataAtual.getDate();
                        var mesAtual = dataAtual.getMonth() + 1;
                        var anoAtual = dataAtual.getFullYear();

                        diasVida = diaAtual - diaNasc;
                        mesVida  = mesAtual - mesNasc;
                        anosVida = anoAtual - anoNasc;
                        var totalDias = diasVida + ( mesVida * 30 ) + ( anosVida * 365 );

                        if ( ( mesAtual < mesNasc ) || ( ( mesAtual == mesNasc ) && ( diaAtual < diaNasc ) ) ) {
                            // Paciente ainda não fez aniversário neste ano
                            anosVida--;
                        }

                        resAnosVida = anosVida + " a";

                        mesAtual = ( mesAtual < mesNasc ? ( mesAtual+12 ) : mesAtual );
                        mesVida = mesAtual - mesNasc;

                        if ( ( mesAtual == mesNasc ) && ( diaAtual < diaNasc ) ) {
                            // Paciente ainda não fez aniversário neste ano
                            mesVida--;
                        }
                        resMesVida  = mesVida + "m";

                        if ( diaAtual >= diaNasc ) {
                            diasVida = ( diaAtual - diaNasc );
                        } else {
                            diasVida = diaAtual + (diasMes[(mesAtual>12?(mesAtual-12):mesAtual)-1]-diaNasc);
                        }
                        resDiasVida = diasVida + 'd';
                        $("input[name='idade']").val( resAnosVida + resMesVida + resDiasVida );
                    });
                });
            </script>
            <form method="POST">

                <ul class="breadcrumb">
                    <li><a href="/">Início</a><span class="divider"></span></li>
                    <li><a href="/pacientes">Pacientes</a><span class="divider"></span></li>
                    <li class="active">Incluir</li>
                </ul>

                <?php
                if (isset($_POST['salvar'])) {
                    echo "salvar";
                }

                if (isset($_POST['cancelar'])) {
                    ?>
                    <script type="text/javascript">
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
                                        <?php 
                                            // print_r(PacientesController::obterNumeroProntuario()); 
                                        ?>
                                        <input type="text" name="numero_prontuario" class="form-control input-sm"  maxlength="20" placeholder="Número do Prontuário">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Cadastro</label>
                                        <input name="data_cadastro" type="date" id="date" class="form-control input-sm" readonly="readonly" >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>* Nome do Paciente</label>
                                        <input type="text" name="nome_paciente" class="form-control input-sm" maxlength="70" placeholder="Nome do Paciente">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Apelido do Paciente</label>
                                        <input type="text" name="apelido_paciente" class="form-control input-sm" maxlength="15" placeholder="Apelido do Paciente">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Nome do Pai</label>
                                        <input type="text" name="nome_pai" class="form-control input-sm" maxlength="70" placeholder="Nome do Pai">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Nome do Mãe</label>
                                        <input type="text" name="nome_mae" class="form-control input-sm" maxlength="70" placeholder="Nome do Mãe">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Data de Nascimento</label>
                                        <input name="data_nascimento" type="date" id="date" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Idade</label>
                                        <input name="idade" type="text" class="form-control input-sm" maxlength="10" placeholder="Idade do paciente">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>Naturalidade</label>
                                        <select name="naturalidade" class="form-control input-sm">
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
                                        <input type="text" name="nacionalidade" class="form-control input-sm " maxlength="50" placeholder="Nacionalidade">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Tempo em São Paulo</label>
                                        <input type="text" name="tempo_sp" class="form-control input-sm" maxlength="15" placeholder="Tempo em São Paulo">
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
                                    <div class="form-group col-sm-4">
                                        <label>Gênero</label>
                                        <select name="genero" class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option value="">Feminino</option>
                                            <option value="">Masculino</option>
                                            <option value="">Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Origem Étnica</label>
                                        <select name="origem_etnica" class="form-control input-sm">
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
                                        <select name="estado_civil" class="form-control input-sm">
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
                                        <select name="filhos" class="form-control input-sm">
                                            <option value="NULL">Selecione</option>
                                            <option value="">Sim</option>
                                            <option value="">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Quantos Filhos</label>
                                        <input type="text" name="qtd_filhos" class="form-control input-sm" maxlength="2" placeholder="Quantos Filhos">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Escolaridade</label>
                                        <select name="escolaridade" class="form-control input-sm">
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
                                        <select name="religiao" class="form-control input-sm">
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
                                        <input type="text" name="profissao" class="form-control input-sm" maxlength="20" placeholder="Profissão">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Ocupação</label>
                                        <input type="text" name="ocupacao" class="form-control input-sm" maxlength="20" placeholder="Ocupação">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Renda Familiar</label>
                                        <select name="renda_familiar" class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Menor que três salários mínimos</option>
                                            <option>Maior que três salários mínimos</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Possui Veículo</label>
                                        <select name="possui_veiculo" class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Veículo Adaptado</label>
                                        <select name="veiculo_adaptado" class="form-control input-sm">
                                            <option>Selecione</option>
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Placa</label>
                                        <input type="text" name="placa" class="form-control input-sm" maxlength="10" placeholder="Placa ">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Dados do Veículo</label>
                                        <input type="text" name="dados_veiculo" class="form-control input-sm" maxlength="50" placeholder="Marca, modelo, ano, cor">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Necessita de Acompanhante ou responsável</label>
                                        <select name="necessita_acompanhante" class="form-control input-sm">
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
                                                <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                                <button type="reset" name="cancelar" class="btn flat btn-danger">Cancelar</button>   
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
                                        <input type="text" name="cartao_saude" class="form-control input-sm" maxlength="50" placeholder="CNS">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>CPF</label>
                                        <input type="text" name="cpf" id="cpf" class="form-control input-sm" data-inputmask="999.999.999-99" data-mask="999.999.999-99" placeholder="(xxx-xxx-xxx-xx)">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Menor sem doc. c/ foto</label>
                                        <select name="menor_s_doc_foto" class="form-control input-sm" id="flg_menorSFoto">
                                            <option value="NULL">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Certidão de Nascimento</label>
                                        <input type="text" name="certidao_nascimento" class="form-control input-sm" maxlength="20" placeholder="Certidão de Nascimento">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>RG</label>
                                        <input type="text" name="rg" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9&quot;" data-mask="" placeholder="(xx.xxx.xxx.x)">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Orgão Emissor</label>
                                        <input type="text" name="rg_orgao_emissor" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                    </div>  
                                    <div class="form-group col-sm-4">
                                        <label>Data de Expedição</label>
                                        <input type="date" name="rg_data_expedicao" id="data" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Registro Nacional de Estrangeiro</label>
                                        <input type="text" name="rne" class="form-control input-sm" maxlength="20" placeholder="RNE">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Orgão Emissor</label>
                                        <input type="text" name="rne_orgao_emissor" class="form-control input-sm" maxlength="20" placeholder="Orgão Emissor">
                                    </div>                               
                                    <div class="form-group col-sm-4">
                                        <label>País de Origem</label>
                                        <input type="text" name="rne_pais_origem" class="form-control input-sm" maxlength="50" placeholder="País de Origem">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Entrada</label>
                                        <input type="date" name="rne_dt_entrada" id="data" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Expedição</label>
                                        <input type="date" name="rne_dt_expedicao" id="data" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Data de Validade</label>
                                        <input type="date" name="rne_dt_validade" id="data" class="form-control input-sm">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Carteira Nacional de Habilitação</label>
                                        <input type="text" name="cnh" class="form-control input-sm" maxlength="20" placeholder="CNH">
                                    </div>
                                </div>
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">Ações</div>
                                    <div class="panel-body"> 
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                                <button type="reset" name="cancelar" class="btn flat btn-danger">Cancelar</button>   
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
                                        <div class="form-group col-sm-4">
                                            <label>Tipo logradouro</label>
                                            <input type="text" name="tp_endereco" id="rua" class="form-control input-sm" maxlength="20" placeholder="Avenida, Rua, Praça, Viela, Estrada">
                                        </div>   
                                        <div class="form-group col-sm-4">
                                            <label>Nome logradouro</label>
                                            <input type="text" name="nome_endereco" id="rua" class="form-control input-sm" maxlength="100" placeholder="Vergueiro,Ibirapuera,Santo Amaro">
                                        </div>                                                                        
                                        <div class="form-group col-sm-4">
                                            <label>Número</label>
                                            <input type="text" name="no_endereco" class="form-control input-sm" maxlength="10" placeholder="Número">
                                        </div>                              
                                        <div class="form-group col-sm-4">
                                            <label>Bloco</label>
                                            <input type="text" name="bloco_endereco" class="form-control input-sm" maxlength="10" placeholder="Bloco">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Apartamento</label>
                                            <input type="text" name="apto_endereco" class="form-control input-sm" maxlength="10" placeholder="Apartamento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CEP</label>
                                            <input type="text" name="cep_endereco" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999-999 &quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Bairro</label>
                                            <input name="bairro" type="text" id="bairro" class="form-control input-sm" maxlength="20" placeholder="Bairro">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Complemento</label>
                                            <input type="text" name="compl_endereco" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Cidade</label>
                                            <input type="text" name="cidade_endereco" class="form-control input-sm" maxlength="50" placeholder="Cidade">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Estado</label>
                                            <select name="estado_endereco" class="form-control input-sm">
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
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">Contatos</div>
                                    <div class="panel-body"> 
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label>Telefone Residencial</label>
                                                <input name="telefone_residencial" type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">								
                                                <span class="form-control-feedback"></span>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Ramal</label>
                                                <input name="ramal" type="tel" id="ramal" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" placeholder="xxxx">							
                                                <span class="form-control-feedback"></span>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Telefone Celular</label>
                                                <input name="telefone_celular" type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 99999 - 9999&quot;" data-mask="" placeholder="(xx) xxxxx-xxxx">								
                                                <span class="form-control-feedback"></span>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Telefone para Recado</label>
                                                <input name="telefone_recado" type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99) 9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">						
                                                <span class="form-control-feedback"></span>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Nome para Recado</label>
                                                <input name="nome_recado" type="text" class="form-control input-sm" maxlength="70" placeholder="Nome para Recado">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control input-sm" maxlength="50" placeholder="Email">
                                            </div>
                                        </div>
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                                <div class="panel panel-default"> <!-- div panel panel-default -->
                                    <div class="panel-heading">Ações</div><!-- div panel-heading -->
                                    <div class="panel-body"> <!-- div panel-body -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                                <button type="reset" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
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
                                        <div class="form-group col-sm-4">
                                            <label>* Nome do Acompanhante</label>
                                            <input type="text" name="nome_acompanhante" class="form-control input-sm" maxlength="70" placeholder="Nome do Acompanhante">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Acompanhante ou Responsável</label>
                                            <select name="parentesco" class="form-control input-sm">
                                                <option>Selecione</option>
                                                <option>Parente</option>
                                                <option>Amigo não Parente</option>
                                                <option>Cuidador Profissional</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Grau de Parentesc</label>
                                            <input type="text" name="grau_parentesco" class="form-control input-sm" maxlength="70" placeholder="Nome do Acompanhante">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Telefone Residencial</label>
                                            <input name="acomp_telefone_residencial" type="tel" id="telefone" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(99)9999 - 9999&quot;" data-mask="" placeholder="(xx) xxxx-xxxx">									
                                            <span class="form-control-feedback"></span>
                                        </div>                                 
                                        <div class="form-group col-sm-4">
                                            <label>CPF</label>
                                            <input type="text" name="acomp_cpf" id="cpf" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>RG</label>
                                            <input type="text" name="acomp_rg" id="rg" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99.999.999-9 &quot;" data-mask="" placeholder="xx.xxx.xxx.x">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Expedição</label>
                                            <input type="date" name="acomp_rg_dt_emissao" id="date" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão Emissor</label>
                                            <input type="text" name="acomp_rg_orgao_emissor" class="form-control input-sm" maxlength="5" placeholder="Orgão Emissor">
                                        </div>  
                                        <div class="form-group col-sm-4">
                                            <label>Registro Nacional de Estrangeiro</label>
                                            <input type="text" name="acomp_rne" class="form-control input-sm" maxlength="20" placeholder="RNE">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Orgão Emissor</label>
                                            <input type="text" name="acomp_rne_orgao_emissor" class="form-control input-sm" maxlength="20" placeholder="Orgão Emissor">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>País de Origem</label>
                                            <input type="text" name="acomp_rne_pais_origem" class="form-control input-sm" maxlength="50" placeholder="País de Origem ">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Entrada</label>
                                            <input type="date" name="acomp_rne_dt_entrada" id="date" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Expedição</label>
                                            <input type="date" name="acomp_rne_dt_emissao" id="date" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Data de Validade</label>
                                            <input type="date" name="acomp_rne_dt_validade" id="date" class="form-control input-sm">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Carteira Nacional de Habilitação</label>
                                            <input type="text" name="acomp_cnh" class="form-control input-sm" maxlength="20" placeholder="CNH">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Dados do Veículo</label>
                                            <input type="text" name="acomp_dados_veiculo" class="form-control input-sm" maxlength="20" placeholder="Marca, modelo, ano, cor">
                                        </div>
                                </div>
                                <div class="panel panel-default"> <!-- inicio do painel-default -->
                                    <div class="panel-heading">Endereço</div>
                                    <div class="panel-body"> 
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label>O endereço é o mesmo do paciente</label>
                                                <select name="mesmo_endereco" class="form-control input-sm">
                                                    <option>Selecione</option>
                                                    <option>Sim</option>
                                                    <option>Não</option>                                           
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Tipo logradouro</label>
                                                <input name="acomp_tp_endereco" type="text" id="rua" class="form-control input-sm" maxlength="20" placeholder="Avenida, Rua, Praça, Viela, Estrada">
                                            </div>   
                                            <div class="form-group col-sm-4">
                                                <label>Nome logradouro</label>
                                                <input type="text" name="acomp_nome_endereco" id="rua" class="form-control input-sm" maxlength="100" placeholder="Vergueiro,Ibirapuera,Santo Amaro">
                                            </div> 
                                            <div class="form-group col-sm-4">
                                                <label>Número</label>
                                                <input type="text" name="acomp_no_endereco" class="form-control input-sm" maxlength="10" placeholder="Número">
                                            </div>                              
                                            <div class="form-group col-sm-4">
                                                <label>Bloco</label>
                                                <input type="text" name="acomp_bloco_endereco" class="form-control input-sm" maxlength="10" placeholder="Bloco">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Apartamento</label>
                                                <input type="text" name="acomp_apto_endereco" class="form-control input-sm" maxlength="10" placeholder="Apartamento">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>CEP</label>
                                                <input type="text" name="acomp_cep_endereco" id="cep" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;99999-999 &quot;" data-mask="" placeholder="(xxx-xxx-xxx-xx)">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Bairro</label>
                                                <input name="acomp_bairro_endereco" type="text" id="bairro" class="form-control input-sm" maxlength="20" placeholder="Bairro">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Complemento</label>
                                                <input type="text" name="acomp_compl_endereco" class="form-control input-sm" maxlength="20" placeholder="Complemento">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Cidade</label>
                                                <input type="text" name="acomp_cidade_endereco" class="form-control input-sm" maxlength="50" placeholder="Cidade">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Estado</label>
                                                <select name="acomp_estado_endereco" class="form-control input-sm">
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
                                                <button type="submit" name="salvar" class="btn flat btn-success">Salvar</button>
                                                <button type="reset" name="cancelar" class="btn flat btn-danger">Cancelar</button>    
                                            </div>
                                        </div>
                                    </div> <!-- Fecha div panel-body -->
                                </div> <!-- Fecha div panel panel-default -->
                            </div>                      
                        </div> <!-- fim do painel-default -->
                    </div> <!-- /fim do tab4 -->
                </div><!-- /.tab-content -->
            </form><!-- /fim do form -->
        </div>
    </section>   
</div> <!-- /content-wrapper -->

<script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="/assets/adminlte/plugins/input-mask/jquery.inputmask.phone.extensions.js" type="text/javascript"></script>


<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
