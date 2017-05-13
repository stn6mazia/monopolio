<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Papéis</h1>
            </section><!-- /.content-header -->
            
            <section class="content">
                
                <ul class="breadcrumb">
                    <li><a href="/">Início</a><span class="divider"></span></li>
                    <li><a href="/papeis">Papéis</a><span class="divider"></span></li>
                    <li class="active">Editar</li>
                </ul>
                
                <?php foreach ($papeis as $papel): ?>
                <form method="post">
                    <div class="form-group col-md-6">
                        <label>Descrição:</label>
                        <input type="text" class="form-control" name="papel" placeholder="Descrição" value="<?php echo $papel["papel"];?>">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>Status:</label>
                        <select class="form-control" name="flg_status_papel">
                                <?php if ($papel["flg_status_papel"] == 1) { ?>
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
                </form>
                <?php endforeach;?>
            </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>