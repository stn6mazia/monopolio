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
                <li class="active">Informações do Sistema</li>
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
                <li class="active"><a href="#tab1" data-toggle="tab">Termos de Responsabilidade</a></li>
                <li><a href="#tab2" data-toggle="tab">Termos de Uso</a></li>
            </ul>       
            <div class="tab-content">
                <!--  Tab1 -->
                <div class="tab-pane fade in active" id="tab1"> 
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-12">

                                    <div align='justify'>

                                        <font face="Arial" size="4" color="black">Eu concordo em tomar todas as precauções para assegurar a Confidencialidade, Integridade e
                                        Disponibilidade de qualquer informação, seja ela interna ou externa, que tenha sido confiada a mim pela
                                        Empresa, além de:<br><br>
                                        o Não divulgar ou fornecer a terceiros não envolvidos na prestação de serviços assistenciais,
                                        informação sobre as condições de saúde dos consumidores, contendo dados de identificação, sem
                                        a anuência expressa dos mesmos, salvo em casos autorizados pela legislação;<br>
                                        o Não divulgar ou fornecer a terceiros não envolvidos na prestação de serviços assistenciais, as
                                        informações contidas na declaração de saúde preenchida pelo consumidor por ocasião da
                                        contratação de plano de assistência à saúde, ou que eu venha a tomar conhecimento por outros
                                        meios.<br><br>
                                        Ao término de meu vínculo empregatício ou contrato, eu concordo em devolver a Empresa toda a
                                        informação a que eu tive acesso durante a execução de minhas tarefas. Eu entendo que não estou
                                        autorizado a utilizar esta informação para propósitos particulares. Da mesma forma eu não tenho
                                        liberdade para repassar esta informação a terceiros sem o consentimento expresso e por escrito do
                                        gerente responsável pela informação.<br><br>
                                        Eu tenho acesso a uma cópia da Política de Segurança, li e entendi este documento e entendo a
                                        importância e o impacto em meu trabalho. Eu concordo em cumprir as regras definidas na Política de
                                        Segurança da informação e aos documentos de segurança que a apóiam. Eu entendo que o não
                                        cumprimento da mesma é motivo para ação disciplinar, incluindo revogação de acessos, podendo
                                        chegar à demissão bem como ações ou penalidades civis.<br><br>
                                        Eu também concordo em informar prontamente todas as violações ou suspeitas de violação da Política
                                        de Segurança a "colocar o nome da Equipe de Segurança da Informação". </font>

                                    </div> <!-- Fecha div align -->
                                </div> <!-- Fecha div class= form-group -->
                            </div> <!-- Fecha div class=row -->
                        </div> <!-- Fecha div panel-body -->
                    </div> <!-- Fecha div panel-default -->
                </div> <!-- Fecha div class="tab-pane fade in active" id="tab1 -->
                <!--  Tab2 -->
                <div class="tab-pane fade" id="tab2">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-sm-12">

                                    <div align='justify'>

                                        <font face="Arial" size="4" color="black">O presente TERMO DE LICENÇA E USO DO PROGRAMA de Sistema de saúde eletrônico (S-RES)
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
                                        mais privilegiado que seja.<br><br><br>

                                    </div> <!-- Fecha div align -->
                                </div> <!--div panel-body -->
                            </div><!--div panel-default -->
                        </div><!-- Fim do tab2 -->                               
                    </div><!-- /.tab-content -->
                </div> <!-- Fecha class="tab-pane fade" id="tab2" -->
            </div> <!-- Fecha class="tab-content" -->
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
