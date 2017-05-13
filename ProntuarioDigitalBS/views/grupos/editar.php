<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Grupos</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            
            <ul class="breadcrumb">
                <li><a href="http://<?=$_SERVER['HTTP_HOST']?>">Início</a><span class="divider"></span></li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/grupos">Grupos</a><span class="divider"></span></li>
                <li class="active">Editar</li>
            </ul>
            <?php  foreach($grupo as $grupo):?>
            
            <form method="post">
                <div class="form-group col-md-6">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" name="desc_grupo" id="desc_grupo" placeholder="Descrição" value="<?= $grupo[1] ?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label>Status:</label>
                    <select class="form-control" name="flg_status_grupo_usuario" id="flg_status_grupo_usuario">
                        
                        <option value="1" <?php if($grupo[3] == 1){ echo selected; }?>>Ativo</option>
                        <option value="0" <?php if($grupo[3] == 0){ echo selected; }?>>Inativo</option>


                        
                    </select>
                </div>
                
                <div class="form-group col-md-12">
                    <button type="submit" name="salvar" class="btn btn-success btn-flat">Salvar</button>
                    <button onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger btn-flat">Cancelar</button>
                </div>
            </form>
            <?php endforeach;?>
            
        </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
