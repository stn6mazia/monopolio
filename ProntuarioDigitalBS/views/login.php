<?php
if (! defined('ROOT_PATH')) exit();
$this->title = (!empty($this->title)) ? $this->title : "Prontuário Digital";
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->

<html lang="pt-BR">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title><?php echo $this->title ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="assets/adminlte/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- <link rel="stylesheet" href="dist/css/AdminLTE.min.css"> -->
        <link rel="stylesheet" href="assets/adminlte/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assets/adminlte/plugins/iCheck/square/blue.css">
        <style>
            html, body {
                min-height: 100%;
                padding: 0;
                margin: 0;
                font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            a,a:hover {
                text-decoration: none;
            }
            .container-fluid {
                padding: 0;
                margin: 0;
            }
            .text-muted {
                color: #999;
            }
            .modal-header, h4, .close {
            background-color: 255 255 255;
            color:black !important;
            text-align: center;
            font-size: 30px;
            }
            .modal-footer {
            background-color: #f9f9f9;
            }
            .modal-header, h4, .close {
            background-color: 255 255 255;
            color:black !important;
            text-align: center;
            font-size: 30px;
            }
            .modal-footer {
            background-color: #f9f9f9;
            }
        </style>
        
        <!-- Sweet Alert CSS -->
        <link rel="stylesheet" href="assets/adminlte/dist/css/sweetalert.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">-->
        
        <!-- Sweet Alert JS -->
        <script src="assets/adminlte/dist/js/sweetalert-dev.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>-->
        
    </head>

    <body class="hold-transition login-page">
        
        <div class="container">

<!-- Trigger the modal with a button -->
<!--<button type="button" class="btn btn-default btn-lg" id="myBtn">Termo de Uso</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content" style="width:1000px  ">
    <div class="modal-header" style="padding:35px 50px;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h6><span class=""></span>O presente TERMO DE LICENÇA E USO DO PROGRAMA de Sistema de saúde eletrônico (S-RES)
                                        regulamenta a utilização do PROGRAMA, em conjunto ou separadamente, explorados
                                        comercialmente pela Universidade Nove de Julho pessoa jurídica com sede na Av. Dr. Adolpho
                                        Pinto 109, Barra Funda, São Paulo, inscrita no CNPJ sob o nº 43.374.768/0003-08 ("UNINOVE
                                        "), que cede de forma não exclusiva para a pessoa identificada na confirmação cadastral
                                        ("USUÁRIO") o uso do PROGRAMA e as soluções a ele relacionadas.<br><br>
                                        Ao utilizar o(s) PROGRAMA (s), o USUÁRIO expressamente aceita, sem reservas ou ressalvas,
                                        todas as disposições deste TERMO DE USO.<br><br>
                                        Prontuário Digital reserva-se o direito de, a seu exclusivo critério e sem aviso prévio, modificar
                                        o presente TERMO DE USO, incluindo novas condições e/ou restrições que vierem a ser adotadas
                                        pela Prontuário Digital, razão pela qual se recomenda que o USUÁRIO, quando for utilizar os
                                        PROGRAMAS ou outros serviços disponibilizados pela Prontuário Digital no SITE UNINOVE,
                                        PROCEDA DE FORMA HABITUAL à leitura do presente TERMO DE USO contido no Site da
                                        Uninove.<br><br>
                                        ATENÇÃO: AO CLICAR O BOTÃO "ACEITO" O USUÁRIO ESTARÁ AUTOMATICAMENTE
                                        CONCORDANDO COM TODOS OS TERMOS E CONDIÇÕES DO PRESENTE INSTRUMENTO.<br><br><br>

                                        <b>1. DEFINIÇÕES:</b><br><br>

                                        1.1 Para os efeitos deste Contrato, os termos abaixo terão os seguintes significados:<br><br>
                                        ACESSO À INTERNET: serviço que provê a conexão, interligação do microcomputador do
                                        USUÁRIO ao servidor de Internet da Uninove, viabilizando o acesso à Internet.<br><br>
                                        PROVEDOR: É a pessoa jurídica que viabiliza a ligação entre os "USUÁRIOS " e a "internet";
                                        HOME PAGE: É a página inicial de um site na Internet; <br><br>
                                        PORTAL: É o site concebido com a finalidade de fornecer um amplo conjunto de informações e
                                        serviços aos USUÁRIOS de Internet;<br><br>
                                        SITE: É a página ou sequência de páginas que uma pessoa jurídica ou física mantém na Internet;<br><br>
                                        DOWNLOAD: Extração DO PROGRAMA de propriedade de uso interno da Uninove através da
                                        Internet para posterior instalação no equipamento adequado;<br><br>
                                        PROXY: Um servidor proxy é um tipo de servidor que atua nas requisições dos seus clientes
                                        executando os pedidos de conexão a outros servidores.<br><br>
                                        TERMO DE USO: condições de utilização específicas a serem observadas pelo USUÁRIO, de
                                        acordo com o tipo de serviço ou licença por estes utilizados;<br><br>
                                        USUÁRIO: é a pessoa física, ou jurídica, representada pela pessoa do seu representante legal,
                                        que acessa a Internet; considerada capaz nos termos da legislação civil em vigor, ou ainda uma
                                        pessoa jurídica legalmente constituída e devidamente representada, nos termos do presente
                                        Contrato.<br><br>
                                        As normas ABNT ISO/TR 20514[12] e ISO/TS18308[13] apresentam definições utilizadas na
                                        elaboração deste manual, em especial nos requisitos de conteúdo, estrutura e funcionalidades.
                                        As seguintes definições, extraídas destas normas, são relevantes para o entendimento deste
                                        manual:<br><br>
                                        • Registro Eletrônico em Saúde (RES): Um repositório de informação a respeito da saúde
                                        de indivíduos, numa forma processável eletronicamente.<br><br>
                                        • Sistema de Registro Eletrônico em Saúde (S-RES): Sistema para registro, recuperação e
                                        manipulação das informações de um Registro Eletrônico em Saúde.<br><br>
                                        • Arquitetura: Conjunto de artefatos de projeto ou representações descritivas que são
                                        relevantes para descrever um objeto de modo que ele possa ser produzido com base
                                        em requisitos (qualidade), como também mantido durante o período de sua vida útil
                                        (alteração).<br><br>
                                        • Arquitetura do Registro Eletrônico em Saúde (ARES): Componentes estruturais
                                        genéricos a partir dos quais todos os RES são construídos, definidos em termos de um
                                        modelo de informação.<br><br>
                                        • Informação processável em computador: Informação que pode ser programaticamente
                                        criada, armazenada, manipulada e recuperada de um computador eletrônico.
                                        • Interoperabilidade funcional: A habilidade de dois ou mais sistemas trocarem
                                        informações entre si. <br><br>
                                        • Interoperabilidade semântica: A habilidade da informação compartilhada entre
                                        sistemas ser entendida em nível dos conceitos de domínio formalmente definidos.<br><br>
                                        • Modelo lógico de informação: Modelo de informação que especifica as estruturas e
                                        relações entre as informações, mas é independente de qualquer tecnologia particular
                                        ou ambiente de implementação. <br><br><br>

                                        <b>2. DEFINIÇÕES DO SISTEMA.</b><br><br>

                                        2.1 CONTROLE DE NAVEGAÇÃO: O controle de navegação protege as suas senhas e
                                        documentos pessoais e você pode controlar conteúdos e imagens para impedir que outras
                                        pessoas acessem sua sessão; tudo isso sem comprometer a usabilidade dos outros usuários, já
                                        que os controles de acesso podem ser personalizados.<br><br>
                                        (i) A partir da aceitação deste TERMO DE USO, a Uninove garante ao USUÁRIO uma licença
                                        não exclusiva de utilização do PROGRAMA, respeitados os termos aqui previstos.<br><br>
                                        (ii) O USUÁRIO concorda expressamente que a Uninove poderá modificar unilateralmente,
                                        em qualquer momento e sem prévio aviso, a apresentação, a configuração e as disposições
                                        do PROGRAMA, assim como as condições requeridas para utilizá-lo.<br><br>
                                        2.2. Licenças de uso do PROGRAMA descritos nos itens (i) e (ii), quando adquiridas somente
                                        disponibilizarão o uso dos PROGRAMA após a realização da instalação no equipamento
                                        adequado, devendo ser efetuados sob a responsabilidade do USUÁRIO.<br><br>
                                        2.3. Mediante a contratação do Plano, o USUÁRIO autoriza a Uninove a utilizar seus dados de
                                        caráter pessoal e, desta forma, colocar à disposição de terceiros seu Perfil nos limites impostos
                                        na política de Privacidade na Página de Serviços da Uninove. <br><br><br>

                                        <b>3. UTILIZAÇÃO DO PROGRAMA.</b><br><br>

                                        3.1. O PROGRAMA poderão ser instalado em 1 (um) computador que atenda aos requisitos de
                                        configuração e sistema operacional compatível.<br><br>
                                        3.2. É vedada a extração de cópias para distribuição comercial, sujeitando o infrator às
                                        punições cíveis e criminais cabíveis. <br><br><br>

                                        <b>4. AQUISIÇÃO DE LICENÇA DE USO D O PROGRAMA</b><br><br>

                                        4.1. A aquisição da licença de uso DO PROGRAMA poderá ser feita por qualquer USUÁRIO cujo
                                        equipamento esteja conforme o caso, mediante o pagamento mensal previsto na Cláusula 5.<br><br>
                                        4.2. Ao efetuar seu cadastro, contratar o Produto e iniciar a instalação, o USUÁRIO terá acesso a
                                        um número de série (número de licença conferido pela Uninove), que será utilizado na instalação
                                        do produto, via download ou através do CD, quando aplicável. O acesso ao download também
                                        ficará disponível na Central do Assinante. <br><br>
                                        4.3. O USUÁRIO se compromete a manter confidencial o número de série ao Programa objeto
                                        deste Contrato, bem como zelar pela sua guarda.<br><br>
                                        4.4. Caso a chave do USUÁRIO seja extraviada, perdida ou roubada deverá informar
                                        imediatamente o conhecimento do fato a Uninove, por escrito, através da seção Atendimento na
                                        Central do Aluno ou Professor.<br><br>
                                        4.5. ATÉ O MOMENTO EM QUE EFETIVAMENTE COMUNICAR A Uninove O USUÁRIO
                                        RESPONDERÁ PELOS GASTOS OU PREJUÍZOS DECORRENTES DA EVENTUAL UTILIZAÇÃO INDEVIDA
                                        DE SUA SENHA OU DO NÚMERO DE SERIE POR TERCEIROS. A Uninove NÃO SE RESPONSABILIZARÁ
                                        POR QUAISQUER DANOS DECORRENTES DE TAIS FATOS ENQUANTO NÃO FOR INFORMADA PELO
                                        USUÁRIO SOBRE O EXTRAVIO, PERDA OU ROUBO DO NÚMERO DE SERIE DE HABILITAÇÃO AO
                                        SOFTWARE, SENHA E EMAIL PESSOAL. <br><br><br>

                                        <b>5. PRAZO DA LICENÇA</b><br><br>

                                        5.1 O prazo da Licença de Uso é indeterminado a partir da data de ativação feita pelo usuário
                                        através do código único de cada cópia DO PROGRAMA. A Licença é válida desde que não
                                        haja manifestação em contrário de uma das partes e mediante a continuação do pagamento
                                        mensal previsto na Cláusula 5.<br><br>
                                        5.2 O USUÀRIO desde já concorda que o presente TERMO DE USO pode ser rescindido a qualquer
                                        tempo:<br><br>
                                        (i) Pelo USUÁRIO mediante comunicação prévia à Uninove.<br>
                                        (ii) Pela Uninove mediante divulgação de descontinuidade do serviço no SITE UNINOVE
                                        ou através de comunicação por e-mail ao USUÁRIO. <br><br><br>

                                        <b>6. PRAZO DA LICENÇA</b><br><br>

                                        6.1 O prazo da Licença de Uso é indeterminado a partir da data de ativação feita pelo usuário
                                        através do código único de cada cópia DO PROGRAMA. A Licença é válida desde que não haja
                                        manifestação em contrário de uma das partes e mediante a continuação do pagamento mensal
                                        previsto na Cláusula 5.<br><br>
                                        6.2 O USUÀRIO desde já concorda que o presente TERMO DE USO pode ser rescindido a qualquer
                                        tempo:<br><br>
                                        (i) Pelo USUÁRIO mediante comunicação prévia ao Administrador.<br>
                                        (ii) Pelo Administrador mediante divulgação de descontinuidade do serviço ou
                                        através de comunicação por e-mail ao USUÁRIO <br><br><br>

                                        <b>7. DIREITOS AUTORAIS</b><br><br>

                                        7.1. O PROGRAMA é protegido por leis de Direito Autoral e Tratados Internacionais relativos a
                                        Direitos Autorais, bem como por outros dispositivos legais e Tratados sobre Propriedade
                                        Intelectual, sujeitando o infrator às penalidades criminais e cíveis cabíveis.<br><br><br>

                                        <b>8. VEDAÇÂO DE UTILIZAÇÃO</b><br><br>

                                        8.1. O USUÁRIO concorda que o PROGRAMA objeto do presente Termo são licenciados e
                                        prestados em natureza individual, ficando o USUÁRIO ciente de que não poderá
                                        comercializar, ceder, alugar, sublocar, compartilhar ou disponibilizar os PROGRAMAS a
                                        terceiros, a qualquer título, bem como, não poderá utilizá-lo como meio de prestação de
                                        serviços onerosos ou gratuitos a terceiros.<br><br><br>

                                        <b>9. LIMITAÇÂO DE RESPONSABILIDADE</b><br><br>

                                        9.1. Na extensão máxima permitida pela legislação aplicável, em nenhuma hipótese, o S-RES será
                                        responsabilizado por quaisquer danos e suas consequências, incidentais, indiretos, especiais
                                        e punitivos; ou quaisquer outros (incluindo, sem limitação, danos por lucros cessantes,
                                        interrupção de negócios, perda de informações comerciais ou outras perdas financeiras)
                                        decorrentes deste TERMO DE USO ou do uso ou da incapacidade de utilizar o PROGRAMA.<br><br>
                                        9.2. O S-RES informa previamente a configuração necessária para a instalação e utilização DO
                                        PROGRAMA, assumindo o USUÁRIO a responsabilidade dos danos causados pela instalação
                                        em equipamento inadequado.<br><br>
                                        9.3. A S-RES não se responsabiliza por eventual queda de desempenho do microcomputador do
                                        USUÁRIO em decorrência do uso DO PROGRAMA, nem por problemas de incompatibilidade
                                        com outros softwares já instalados no microcomputador.<br><br>
                                        9.4. A S-RES não se responsabiliza pelo uso ou desempenho dos PROGRAMA(S) em caso de
                                        utilização inadequada ou descumprimento pelo USUÁRIO das orientações disponibilizadas
                                        no S-RES quanto ao modo de instalação, utilização e remoção dO PROGRAMA. <br><br><br>

                                        <b>10. CADASTRAMENTO DO USUÁRIO</b><br><br>

                                        10.1. A adesão a este TERMO DE USO será considerada efetivada através do seguinte
                                        procedimento:<br><br>
                                        (i) O USUÁRIO fornece à S-RES seus dados cadastrais completos, mediante o
                                        preenchimento do formulário eletrônico de adesão ao uso DO PROGRAMA;<br>
                                        (ii) O USUÁRIO lê e toma ciência dos termos e condições do TERMO DE USO, com
                                        aceitação incondicional de seu conteúdo declarada através de seu aceite eletrônico.<br><br><br>

                                        <b>11. OBRIGAÇÔES DO USUÁRIO</b><br><br>

                                        11.1. O USUÁRIO compromete-se a: <br><br>
                                        (i) Providenciar aparelhos e equipamentos adequados AO PROGRAMA, conforme
                                        sua opção;<br>
                                        (ii) Utilizar adequadamente os PROGRAMAS, respondendo perante ao S-RES, por
                                        todo e qualquer dano ou prejuízo pelo qual for responsável em razão do presente
                                        Contrato;<br>
                                        (iii) Efetuar os pagamentos relacionados à Licença de Uso DO PROGRAMA conforme
                                        modalidade de sua opção;<br>
                                        (iv) Fornecer e manter atualizados seus dados cadastrais, quando solicitado,
                                        especialmente o endereço de correspondência, que possibilitem ao S-RES o atendimento
                                        de suas solicitações, não caracterizando o descumprimento contratual pelas S-RES,
                                        eximindo-a de qualquer responsabilidade, a impossibilidade de prestação do Serviço
                                        causada por incorreção em informação fornecida pelo USUÁRIO ou pela omissão no
                                        provimento de informação essência à sua prestação;<br>
                                        (v) Cumprir as regras e condições do presente TERMO DE USO. <br><br><br>

                                        <b>12. OBRIGAÇÕES DO S-RES</b><br><br>

                                        12.1. O S-RES compromete-se a:<br><br>
                                        (i) Envidar seus melhores esforços para assegurar e desenvolver a qualidade DO
                                        PROGRAMA objeto do presente TERMO DE USO;<br>
                                        (ii) Caso seja possível, comunicar ao USUÁRIO com 24 (vinte e quatro) horas de
                                        antecedência, através de e-mail ou aviso veiculado no Site, sobre a inoperância do (s)
                                        PROGRAMA (S) por ocasião de manutenção programada ou preventiva do sistema.<br><br><br>

                                        <b>13. DOS DIREITOS DO S-RES</b><br><br>

                                        13.1. Constituem direitos da OI INTERNET, dentre outros:<br><br>
                                        (i) Suspender o provimento do S-RES e o consequente LICENCIAMENTO dO
                                        PROGRAMA quando não cumpridas as condições previstas na Cláusula 8, bem como
                                        quando não observadas as demais condições do presente TERMO;<br>
                                        (ii) Comercializar e divulgar as informações de cunho não sigiloso do USUÁRIO,
                                        conforme a Política de Privacidade do S-RES, disponível em
                                        (http://www.sbis.org.br/politica-deprivacidade);<br>
                                        (iii) Não se responsabilizar pelas condições e pela qualidade dos serviços de
                                        provimento de ACESSO À INTERNET oferecidos pela sua prestadora.<br><br><br>

                                        <b>14. ALTERAÇÕES NOS TERMOS E CONDIÇÕES</b><br><br>

                                        14.1. A S-RES se reserva o direito de alterar unilateralmente quaisquer condições do
                                        presente TERMO DE USO. Caso o USUÁRIO não concorde com as alterações promovidas 
                                        pelo S-RES, deverá manifestar-se, expressamente, no prazo máximo de 30 (trinta) dias
                                        a contar da data da alteração.<br>
                                        14.2. A NÃO MANIFESTAÇÃO DO USUÁRIO NO PRAZO ESTIPULADO NO ITEM 14.1
                                        ACIMA, SERÁ ENTENDIDO COMO ACEITAÇÃO TÁCITA DOS NOVOS TERMOS E
                                        CONDIÇÕES CONTRATUAIS VIGENTES.<br>
                                        14.3. O USUÁRIO declara expressamente estar ciente de que a não aceitação dos novos
                                        termos facultará o S-RES rescindir de imediato o presente TERMO DE USO. <br><br><br>

                                        <b>15. CONCORDÂNCIA</b><br><br>

                                        15.1. O USUÁRIO declara ter lido entendido e estar ciente e de pleno acordo com todas
                                        as cláusulas e condições deste TERMO DE USO. <br><br><br>

                                        <b>16. DISPOSIÇÔES GERAIS</b><br><br>

                                        16.1. A tolerância, por qualquer das Partes, à violação de qualquer cláusula do presente
                                        Contrato não poderá ser arguida pela parte faltosa como novação ou precedente, aptos
                                        a justificar qualquer subsequente violação de cláusula do presente TERMO.<br>
                                        16.2. Este Contrato obriga as Partes contratantes e seus sucessores, qualquer que seja
                                        a forma de sucessão, em todos os direitos e obrigações assumidas por força deste
                                        TERMO.<br>
                                        16.3. Os casos fortuitos ou de força maior serão excludentes de responsabilidade,
                                        conforme estabelecido no parágrafo único do artigo 393 do Código Civil Brasileiro.<br>
                                        16.4. Caso qualquer dispositivo deste TERMO seja considerado contrário à lei por uma
                                        Corte competente, o referido dispositivo deverá ser aplicado na maior extensão
                                        permitida, permanecendo os demais dispositivos em pleno vigor e eficácia.<br><br><br>

                                        <b>17. FORO</b><br><br>

                                        17.1. Este TERMO DE USO é regido pelas leis da República Federativa do Brasil e as
                                        Partes elegem, para dirimir quaisquer controvérsias dele decorrentes, o Foro da
                                        Comarca da Capital do Estado de São Paulo, desistindo as Partes de qualquer outro, por
                                        mais privilegiado que seja.</h6>
</div>
<div class="modal-body" style="padding:40px 50px;">
<form role="form">

         <div class="checkbox">

        </div>
            <a href="/" class="btn btn-info btn-block"> <span class=""></span> Ao clicar no botão Aceito os Termos de Uso do Site </a>
         <!-- <button type="submit" class="btn btn-info btn-block"><span class=""></span> Ao clicar no botão Aceito os Termos de Uso do Site</button>-->
      </form>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

    </div>
  </div>
<!--Fim Modal content-->
</div>
</div>
</div>
        
        
           
        
        
        <?php if (!empty($this->login_error)): ?>
            <script type="text/javascript">
                 swal(<?php echo "'$this->login_error'"?>);
            </script>
        <?php endif; ?>
            
        <div class="login-box">
            <div class="login-logo">
                <b>Prontuário</b> Digital</a>
            </div>
                
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Faça o login para iniciar a sessão</p>

                <form method="post">
                    <div class="form-group has-feedback">
                        <input type="text" maxlength="10" placeholder="RA" name="userdata[ra]" class="form-control">
                        <span class="form-control-feedback"><b>Nº</b></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" placeholder="Senha" name="userdata[senha]" class="form-control">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue">
                                        <input type="checkbox">
                                    </div> Remember Me
                                </label>
                            </div>
                            
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="button" class="btn btn-primary btn-block btn-flat" type="submit" id="myBtn">Entrar</button>
                         <!--   <button class="btn btn-primary btn-block btn-flat" type="submit" id="myBtn">Entrar_____</button>-->
                        </div><!-- /.col -->
                   
                    </div>
                </form>
                <a href="#" data-toggle="modal" data-target="#forgotPasswordModal">Esqueci minha senha</a><br>
                <a href="#" id="link-emergency">Emergência</a>
            </div><!-- /.login-box-body -->
            
            
            <div class="login-box-body" style="background-color:#b5bcc9;" id="login-box-emergency"> <!-- Login Emergência-->
                <p class="login-box-msg">Emergência</p>
                <form method="post">
                    <div class="form-group has-feedback">
                        <label>CPF  do Paciente</label>
                        <input type="text" maxlength="10" placeholder="CPF" name="userdata[cpf]" class="form-control">
                    </div>
                    <div class="form-group has-feedback">
                         <label>RA do Médico</label>
                        <input type="text" placeholder="RA" name="userdata[ra]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <button class="btn btn-primary btn-block btn-flat" type="submit">Entrar</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <div class="pull-right">
                <a href="#" id="voltar-emergency" >Voltar</a>
                </div>
            </div><!-- /. Login Emergência -->
        </div><!-- /.login-box -->
        
        <!-- Modal Login Emergência -->
        <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                      </button>
                        <h3 class="text-center modal-title" id="myModalLabel">
                            Informe seu RA
                        </h3>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="text-center" style="margin-bottom: 2%">
                                A nova senha será encaminhada ao seu e-mail cadastrado.
                            </div>
                            <div>
                                <input type="text" maxlength="10" class="form-control" id="loginInput" placeholder="Digite seu Login" style="margin-left: 25%; width: 50%;">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="atualizarSenha()">Atualizar Senha</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery 2.1.4 -->
        <script src="assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="assets/adminlte/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
            
            function atualizarSenha(){
                debugger;
                
                var login = $('#loginInput').val();
                if(login === '')
                    swal('Digite o RA para realizar a alteração da senha');
                else {
                    var url = (window.location.href + "/atualizarSenha/" + login);
                    $.post((url), function( data ) {
                        swal(data);
                    });
                }
            }
            
            $("#login-box-emergency").hide();
            
            $( "#link-emergency" ).click(function() {
            $( "#login-box-emergency" ).show( "slow", function() {
            // Animation complete.
                });
            });
            
            $( "#voltar-emergency" ).click(function() {
            $( "#login-box-emergency" ).hide( "slow", function() {
            // Animation complete.
                });
            });
        </script>
    </body>
    
    <script>
$(document).ready(function(){
$("#myBtn").click(function(){
$("#myModal").modal();
});
});
</script>
</html>