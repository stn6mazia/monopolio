<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Recepção</h1>
            </section><!-- /.content-header -->
            
        <section class="content">

<ul class="breadcrumb">
                <li><a href="/">Início</a><span class="divider"></span></li>
                <li class="active">Recepção</li>
            </ul>
            
            <div class="alert alert-info text-center" role="alert">A consulta trouxe <b>??</b> linhas.</div>
            
         <div class="row">
                   
             <form method="post">  
                 <div class="form-group col-md-4">
                   <label for="nome" >Nome:</label>
                   <input type="text" id="nome" class="form-control input-mini offset-6" maxlength="70" placeholder="Nome" required>
                   </div>
               
                 <div class="form-group col-md-2">
                  <label for="data_nasc" >Data de Nascimento:</label>
                  <input type="date" id="data_nasc" class="form-control" required>
                  </div>
                             
                 <div class="form-group col-md-3">
                  <label>Ferramentas:</label><br>
                   <button type="submit" name="salvar" class="btn btn-primary btn-flat btn-flat">Pesquisar</button>
                   <a href="recepcao/incluir" class="btn btn-primary btn-flat">Incluir</a>
                   <button type="submit" name="salvar" class="btn btn-primary btn-flat btn-flat" onclick="window.history.back(-1)">Voltar</button>
                   <a class="btn btn-primary btn-flat">Fechar</a>
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
                    <!--php
                    foreach ($pacientes as $pacientes) {
                    ?-->
                        <form method="post">
                        <tr>
                            <td><!--= $pacientes['id_paciente'] ?>--></td>
                            <td><!--= $pacientes['id_telefone'] ?>--></td>
                            <td><!--= $pacientes['id_paciente'] ?>--></td>
                            <td><!--= $pacientes['id_telefone'] ?>--></td>
                            <td><!--=$pacientes['id_paciente'] ?>--></td>
                            <td>
                                <input type="hidden" name="id_operacao_sistema" value=" ">
                                <div class="btn-group btn-group-sm">
                                    <a href="pacientes" name="alterar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" name="excluir" class="btn btn-default btn-flat" <!--onclick="excluir(<=$pacientes['id_paciente']?>)"--><span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="button" name="visualizar" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-eye-open"></span></button>
                                </div>
                            </td>
                        </tr>
                        </form>
                    <!--php
                    }
                    ?-->
                    </tbody>
                </table>
            </div>
            
        </section>
    </div>


<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>

