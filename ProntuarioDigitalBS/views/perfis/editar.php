<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Perfis</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            
            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li><a href="/perfis">Perfis</a><span class="divider"></span></li>
                <li class="active">Editar</li>
            </ul>
            
            <form method="post">
                <div class="form-group col-md-6">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" name="desc_perfil" id="desc_perfil" placeholder="Descrição" value="<?= $perfis['desc_perfil'] ?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label>Status:</label>
                        <select class="form-control" name="flg_status_perfil_acesso" id="flg_status_perfil_acesso">
                          
                                <?php if ($perfis["flg_status_perfil_acesso"] == 1) { ?>
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
                    <a href="/perfis" name="cancelar" class="btn btn-danger btn-flat">Cancelar</a>
                </div>
            </form>
            
    </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
