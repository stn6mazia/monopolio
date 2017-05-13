<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Usuários</h1>
            </section><!-- /.content-header -->
            
    <section class="content">
        
        <script>
                $(document).ready(function() {
                    $("#menu ul li:eq(1)").addClass("active");
                });
                
                function inserir(){
                    swal({   title: "Confirma o cadastro do usuário?",
                    text: "Tem certeza?", 
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55", 
                    confirmButtonText: "Sim,!", 
                    closeOnConfirm: false },
                    function()
                    { 
                        swal("Cadastrado!",
                        "Cadastrado com sucesso.",
                        "success");
                        window.location.href= 'http://localhost/usuarios/insert';
                    });
                }
       </script>
        
        <ul class="breadcrumb ">
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>">Início</a><span class="divider"></span></li>
            <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/usuarios">Usuários</a><span class="divider"></span></li>
            <li class="active">Incluir</li>
        </ul>
        
        <form method="POST">            
            <div class="panel panel-default">
                <div class="panel-heading">Informações pessoais</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="Nome_Pessoa" value="<?= (isset($usuarioInfo) == false) ? '' : $usuarioInfo->Nome_Pessoa ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Data de nacimento:</label>
                            <input type="text" class="form-control mascarar-data" name="Data_Nascimento" value="<?= (isset($usuarioInfo) == false) ? '' : $usuarioInfo->Data_Nascimento ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Campus:</label>
                              <!--php 
                                $selected_campus = (null != $usuario->getDesc_campus()) ? $usuario->getDesc_campus() : ""; 
                              -->
                            <select class="form-control" name="Campus">
                                <option value="">Selecione</option>
                                <option value="Memorial" >Memorial</option>
                                <option value="Santo Amaro" >Santo Amaro</option>
                                <option value="Vilamaria" >Vila Maria</option>
                                <option value="Vergueiro" >Vergueiro</option>
                                <option value="Vila Prutente" >Vila Prudente</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nome da Mãe:</label>
                            <input type="text" class="form-control" name="Nome_Mae" value="<?= (isset($usuarioInfo) == false) ? '' : $usuarioInfo->Nome_Mae ?>">
                        </div>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">Usuario</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="form-group col-md-4">
                            
                            
                            
                            <label>Matrícula (RA):</label>
                            <input type="text" class="form-control mascarar-ra" name="Num_matricula_RA" value="<?= (isset($usuarioInfo) == false) ? '' : $usuarioInfo->Num_matricula_RA ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Senha:</label>
                            <input type="password" class="form-control" name="Senha">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Confirmar senha:</label>
                            <input type="password" class="form-control" name="ConfirmaSenha">
                        </div>
                    </div>
                    
                    
                    

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Status:</label>
                            <!--php $statusUsuario = ($usuario->getFlg_status_usuario()!=="") ? $usuario->getFlg_status_usuario() : "" -->
                            <select class="form-control" name="Situacao"> <!--ATUALIZAR ESTE CAMPO-->
                                <option value="">Selecione</option>
                                <option value="1" >Ativo</option>
                                <option value="0" >Inativo</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Perfil:</label>
                            <select class="form-control" name=""><!--ATUALIZAR ESTE CAMPO-->
                                <option value="">Selecione</option>
                                <!--php
                                $selected_idPerfil = (null != $perfilUsuario->getId_perfil_acesso()) ? $perfilUsuario->getId_perfil_acesso() : "";
                                //Repetição para apresentação de linhas.
                                while ($linha = mysql_fetch_array($resultadoPerfis)) {
                                    -->
                                <!--option value="<php echo $linha['id_perfil_acesso'] ?>" <php echo ($linha['id_perfil_acesso'] == $selected_idPerfil) ? "selected" : "" ?>><php echo $linha['desc_perfil'] ?></option-->
                                    <!--php
                                }
                                -->
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Papeis Vinculados:</label>
                            <select class="form-control" name="desc_manter_papeis">
                                <option value="0">Selecione</option>
                                <!--php
                                $selected_idPapel = (null != $manterPapeis->getId_manter_papeis()) ? $manterPapeis->getId_manter_papeis() : "";
                                //Repetição para apresentação de linhas.
                                while ($linha = mysql_fetch_array($resultadoPapeis)) {
                                    ?>
                                    <option value="<php echo $linha['id_manter_papeis'] ?>" <php echo ($linha['id_manter_papeis'] == $selected_idPapel) ? "selected" : "" ?>><php echo $linha['desc_manter_papeis']; ></option>
                                    <php
                                }
                                -->
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Grupos Vinculados:</label>
                            <select class="form-control" name="desc_grupo_usuario">
                                <option value="">Selecione</option>
                                <!--php
                                $selected_idGrupo = (null != $grupoUsuario->getId_grupo_usuario()) ? $grupoUsuario->getId_grupo_usuario() : "";
                                //Repetição para apresentação de linhas.
                                while ($linha = mysql_fetch_array($resultadoGrupo)) {
                                    >
                                    <option value="<php echo $linha['id_grupo_usuario'] ?>" <php echo ($linha['id_grupo_usuario'] == $selected_idGrupo) ? "selected" : "" ?>><php echo $linha['desc_grupo_usuario'] ?></option>
                                    <php
                                }
                                -->
                            </select>
                        </div>    
                    </div>

                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>RG:</label>
                            <input type="text" class="form-control" name="num_rg" value="<xx.xxx.xxx-x">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Data de Expiração:</label>
                            <input type="text" class="form-control mascarar-data" name="dt_validade_login" value="xx/xx/xxxx">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>CPF:</label>
                            <input type="text" class="form-control mascarar-cpf" name="num_cpf" value="xxx.xxx.xxx/xx">
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Contato</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tel. Residencial:</label>
                            
                            <input type="text" class="form-control mascarar-tel" name="num_telefone" value="(xx)xxxx-xxxx">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Celular:</label>
                            <input type="text" class="form-control mascarar-cel" name="num_celular" value="(xx)x xxxx-xxxx">
                        </div>   
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tel. Comercial:</label>
                            <input type="text" class="form-control mascarar-tel" name="num_comercial" value="(xx)xxxx-xxxx">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Ramal:</label>
                            <input type="text" class="form-control" name="ramal" value="Digite o ramal">
                        </div>   
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>E-mail:</label>
                            <input type="text" class="form-control" name="desc_email" value="<?= (isset($usuarioInfo) == false) ? 'Digite seu e-mail' : $usuarioInfo->desc_email ?>">
                        </div>   
                    </div>
                </div>
            </div>
                        
            <button type="submit" onclick="inserir()" name="salvar" class="btn btn-success btn-flat">Salvar</button> <!-- onclick="insert(<?=$usuario['id_pessoa']?>)" -->
            <button type="submit" onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
        </form>
    
    </section>
</div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
