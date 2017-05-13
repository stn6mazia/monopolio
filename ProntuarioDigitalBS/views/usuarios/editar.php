

<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Usuarios</h1>
    </section><!-- /.content-header -->

    <section class="content">

        <ul class="breadcrumb">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>">Início</a><span class="divider"></span></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/usuarios">Usuários</a><span class="divider"></span></li>
            <li class="active">Editar</li>
        </ul>

        <!--            <form method="post">
                        <div class="form-group col-md-6">
                            <label>Login:</label>
                            <input type="text" class="form-control" name="desc_grupo_usuarios" maxlength="50" placeholder="Descrição" value="<?php echo $linha["desc_usuarios"]; ?>">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>Status:</label>
                            
                           <select class="form-control" name="flg_status_usuarios_acesso">
        /<?php if ($linha["flg_status_usuarios_acesso"] == 1) { ?>
                                                                        <option value="1" selected>Ativo</option>
                                                                        <option value="0">Inativo</option>
        <?php } else { ?>
                                                                        <option value="1">Ativo</option>
                                                                        <option value="0" selected>Inativo</option>
        <?php } ?>
                            </select>
                           
                        </div>
                                        
                        <div class="form-group col-md-12">
                            <button type="submit" name="salvar" class="btn btn-success btn-flat">Salvar</button>
                            <button type="submit" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                        </div>
                    </form>-->
 
    <?php foreach ($usuario as $usuarios) { ?><!--Inicio do foreach (Array)-->
    
    <?php } ?><!--Fim do foreach-->
        <form method="POST" action="../../models/UsuariosModel.php">    

            <tbody>
                <!---->
                <div class="panel panel-default">
                    <div class="panel-heading">Informações pessoais</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="Nome_Pessoa" value="<?= $usuario['Nome_Pessoa'] ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Data de nacimento:</label>
                                <input type="text" class="form-control mascarar-data" name="Data_Nascimento" value="<?= $usuario['Data_Nascimento'] ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Campus:</label>
                                <!--php 
                                  $selected_campus = (null != $usuario->getDesc_campus()) ? $usuario->getDesc_campus() : ""; 
                                -->
                                <select class="form-control" name="Campus">
                                    <option value="">Selecione</option>
                                    <option value="<?= $usuario["Campus"] ?>" selected ><?= $usuario["Campus"] ?></option>
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
                                <input type="text" class="form-control" name="Nome_Mae" value="<?= $usuario["Nome_Mae"] ?>">
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
                                <input type="text" class="form-control mascarar-ra" name="Num_matricula_RA" value="<?= $usuario['id_pessoa'] ?>">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Senha:</label>
                                <input type="password" class="form-control" name="Senha">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Confirmar senha:</label>
                                <input type="password" class="form-control" name="Senha">
                            </div>
                        </div>




                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Status:</label>
                                <!--php $statusUsuario = ($usuario->getFlg_status_usuario()!=="") ? $usuario->getFlg_status_usuario() : "" -->
                                <select class="form-control" name="Situacao"> <!--ATUALIZAR ESTE CAMPO-->
                                    <option value="">Selecione</option>
                                    <?php
                                    $verificar = $usuario["SituacaoSistema"];

                                    if ($verificar == "1") {
                                        ?>
                                        <option value="1" selected >Ativo</option>
                                        <option value="0" >Inativo</option> 
                                        <?php
                                    } else {
                                        ?>
                                        <option value="1" >Ativo</option>
                                        <option value="0" selected >Inativo</option> 
                                        <?php
                                    }
                                    ?>


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
                                <input type="text" class="form-control" name="num_rg" placeholder="xx.xxx.xxx-x" value="<?=$usuario["RG"] ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Data de Expiração:</label>
                                <input type="text" class="form-control mascarar-data" name="dt_validade_login" placeholder="xx/xx/xxxx" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>CPF:</label>
                                <input type="text" class="form-control mascarar-cpf" name="num_cpf" placeholder="xxx.xxx.xxx/xx"value="<?=$usuario["CPF"] ?>">
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

                                <input type="text" class="form-control mascarar-tel" name="num_telefone" placeholder="(xx)xxxx-xxxx"value="<?=$usuario["Telefone"]?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Celular:</label>
                                <input type="text" class="form-control mascarar-cel" name="num_celular" placeholder="(xx)x xxxx-xxxx"value="<?=$usuario["Tel_Cel"]?>">
                            </div>   
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Tel. Comercial:</label>
                                <input type="text" class="form-control mascarar-tel" name="num_comercial" placeholder="(xx)xxxx-xxxx"value="<?=$usuario["Telefone_Comercial"]?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Ramal:</label>
                                <input type="text" class="form-control" name="ramal" value="Digite o ramal">
                            </div>   
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>E-mail:</label>
                                <input type="text" class="form-control" name="desc_email" value="<?=$usuario["Email"]?>">
                            </div>   
                        </div>
                    </div>
                </div>

                <button type="submit" name="salvar" class="btn btn-success btn-flat">Salvar</button>
                <button type="submit" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                </tbody> <!--Fim do Tbody-->  
           
        </form>
<!---->
    </section>
</div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>

