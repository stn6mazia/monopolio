<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#Menu ul li :eq(1)").addClass("active"); 
        });

        function excluir(event){
            swal({   title: "Deseja realmente excluir?"
                , text: "Tem certeza?"
                ,  type: "warning"
                , showCancelButton: true
                , confirmButtonColor: "#DD6B55"
                , confirmButtonText: "Sim, excluir!"
                , closeOnConfirm: false 
            }, function() {
                swal("Excluido!",
                "Excluido com sucesso.",
                "success");
                window.location.href='http://localhost/operacoes/delete?id='+event;
            });
         }
    </script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Operações</h1>
            </section><!-- /.content-header -->

        <section class="content">

            <ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li class="active">Operações</li>
            </ul>
            
            <div class="alert alert-info text-center " role="alert">A consulta trouxe <b><?=count($operacoes)?></b> linhas.</div>

            <div class="row">
                
                <form method="post">
                    <div class="form-group col-md-2">
                        <label>Código:</label>
                        <input type="text" name="id_operacao_sistema" class="form-control" placeholder="Código">
                    </div>
                    
                    <div class="form group col-md-4">
                        <label>Descrição</label>
                        <input type="text" name="dt_inclusao" class="form-control" placeholder="Descrição">
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label>Status</label>
                        <select class="form-control" name="flg_status_operacao_sistema">
                            <option value="">Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label>Ferramentas:</label><br>
                        <a href="operacoes/incluir" class="btn btn-primary btn-flat">Incluir</a>
                        <a href="operacoes/pesquisar" class="btn btn-primary btn-flat">Pesquisar</a>
                    </div>
                </form>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Data de inclusão</th>
                            <th>Data de alteração</th>
                            <th>Status</th>
                            <th>Gerenciamento</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     if(isset($operacao)) :
                    foreach ($operacao as $operacao) :
                        {
                        ?>
                        <form method="POST">
                        <tr>
                            <th> <?=$operacao['id_operacao_sistema']?> </th>
                            <th> <?=$operacao['nom_operacao_sistema']?> </th>
                            <th> <?=$operacao['desc_operacao_sistema']?> </th>
                            <th> <?=$operacao['dt_inclusao']?> </th>
                            <th> <?=$operacao['dt_alteracao']?> </th>
                            <th> <?=$operacao['flg_status_operacao_sistema']?> </th>
                            
                            <td>
                            
                                <div class="btn-group btn-group-sm">
                                    <a href="/Operacoes/editar?id=<?=$operacao['id_operacao_sistema'] ?>" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" name="btn_excluir" class="btn btn-default btn-flat"  onclick="excluir('<?=$operacao['id_operacao_sistema']?>')"> <span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="button" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
                               </div>
                            </td>
                        </tr>
                        </form>
                    <?php
                        }
                        endforeach;
                    endif;
                    ?>                    
                    </tbody>                
                </table>
            </div>
            
        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>