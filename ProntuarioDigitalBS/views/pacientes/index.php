<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Pacientes</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            
            <script>
                $(document).ready(function() {
                    $("#menu ul li:eq(1)").addClass("active");
                });
                
                function excluir(event){
                    swal({   title: "Deseja realmente excluir?",
                    text: "Tem certeza?", 
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55", 
                    confirmButtonText: "Sim, excluir!", 
                    closeOnConfirm: false },
                    function()
                    { 
                        swal("Excluido!",
                        "Excluido com sucesso.",
                        "success");
                        window.location.href= 'http://localhost/pacientes/delete?id='+event;
                    });
                }
            </script>
            
            <ul class="breadcrumb">
                <li><a href="http://<?=$_SERVER['HTTP_HOST']?>">Início</a><span class="divider"></span></li>
                <li class="active">Pacientes</li>
            </ul>
            
            <div class="alert alert-info text-center" role="alert">Foram encontrado(s) <b><?= sizeof($pacientes) ?></b> registro(s).
                <?php if(sizeof($pacientes) == 0) : ?>
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/incluir" class="btn btn-warning btn-flat">OK</a>
                <?php endif; ?>
            </div>
            
            <div class="row">
                
                <form method="post" action="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/pesquisar">
                    <div class="form-group col-md-2">
                        <label>Código:</label>
                        <input name="id" type="text" class="form-control" placeholder="Código">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>Nome:</label>
                        <input name="nome" type="text" class="form-control input-mini" maxlength="70" placeholder="Nome">
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label>CPF - Cadastro de Pessoa Física:</label>
                        <input name="cpf" type="text" class="form-control" maxlength="11" placeholder="Número do CPF">
                    </div>
                   
                    <div class="form-group col-md-3">
                        <label>Ferramentas:</label><br>
                        <button type="submit" class="btn btn-primary btn-flat">Pesquisar</button>
                        <a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/incluir" class="btn btn-primary btn-flat">Incluir</a>
                    </div>
                </form>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr class="info">
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>CPF</th>
                            <th>Nome da Mãe</th>
                            <th>Gerenciamento</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($pacientes)) :
                        foreach ($pacientes as $paciente):

                    ?>
                        <tr>
                            <td><?=$paciente['id_pessoa']?></td>
                            <td><?=$paciente['Nome_Pessoa']?></td>
                            <td><?=  date('d/m/Y', strtotime($paciente['Data_Nascimento']))?></td>
                            <td><?=$paciente['CPF']?></td>
                            <td><?=$paciente['Nome_Mae']?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/visualizar?id=<?=$paciente['id_pessoa']?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/pacientes/editar?id=<?=$paciente['id_pessoa']?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="#" class="btn btn-default btn-flat" onclick="excluir(<?=$paciente['id_pessoa']?>)"><span class="glyphicon glyphicon-trash"></span></a>
                                    
                                   
                                </div>
                            </td>
                        </tr>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
            
        </section>
    </div>

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
