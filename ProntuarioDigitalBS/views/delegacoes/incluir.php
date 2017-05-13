<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Delegações</h1>
            </section><!-- /.content-header -->
       
            
            <section class="content">
                
                <!--**INICIO**-- 29/04/17 - FOI INSERIDO O SCRIPT DE EVENTO DE CONFIRMAÇÃO DE SALVAR ABAIXO - Ass: ALMIR  -->
                <!-- TRABALHANDO NA LOGICA (CONTINUA...) -->
                  <script>
                $(document).ready(function() {
                    $("#menu ul li:eq(1)").addClass("active");
                });
                
                function verificacaoCampos(event){
                    var delegacao = $("#flagDelegacao").val();
                    var motivo = $("#motivoNome").val();
                    var operacao = $("#flagOperacao").val();
                    var status = $("#flagStatus").val();
                    event.preventDefault();
                    swal("Cadastrado com exito!", "Clique no botão abaixo para voltar!", "success");
                    if(delegacao < 0 || (motivo === "" || motivo === null)){
                        event.preventDefault();
                        swal('Não foi possível realizar o cadastro, verifique os campos e tente novamente');
                    }                                    
            }
            </script>             
                <!--**FIM**-->
                    
                <ul class="breadcrumb">
                    <li><a href="http://localhost/" >Início</a><span class="divider"></span></li>
                    <li><a href="http://localhost/delegacoes/">Delegações</a><span class="divider"></span></li>
                    <li class="active">Incluir</li>
                </ul>

                
                <form method="post">
                    <div class="form-group col-md-6">
                        <label for="delegado">Delegado:</label>
                        <!--<input type="text" class="form-control" name="delegado" placeholder="Delegado">-->
                        <select required class="form-control" name="delegado" id="flagDelegacao" required>
                            <option value="">Selecione...</option>
                            <?php foreach ($usuarios as $usuario) : ?>
                            <option value="<?= $usuario['id_usuario'] ?>"><?= $usuario['nom_usuario'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="operacao">Operação:</label>
                        <select class="form-control" name="operacao" id="FlagOperacao" required>
                            <option value="">Selecione...</option>
                            <?php foreach ($operacoes as $operacao) : ?>
                            <option value="<?= $operacao['id_operacao_sistema'] ?>"><?= $operacao['nom_operacao_sistema'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    

                    <div class="form-group col-md-6">
                        <label>Motivo:</label>
                        <input type="text" class="form-control" name="motivo" id="motivoNome"placeholder="Motivo" pattern=".{3,}" title="Inserir no mínimo 3 caracteres" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status:</label>
                        <select class="form-control" name="flg_status_delega_poder" required>
                                <option value="">Selecione...</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                    </div>

                    <div class="form-group col-md-12">
                        <!-- <button type="submit" name="salvar" class="btn btn-success btn-flat">Salvar</button>-->
                         <button type="submit" name="salvar" class="btn btn-success btn-flat" onclick="verificacaoCampos(event)">Salvar</button>
                        <button onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                    </div>
                </form>
            </section>
</div>


<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>