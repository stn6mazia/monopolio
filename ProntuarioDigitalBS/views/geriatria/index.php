<body class="hold-transition skin-blue sidebar-mini">
<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>
   <div class="content-wrapper">
        <section class="content-header">
            
                        <h1> Geriatria</h1>
      </section> 
       
      
    <ul class="breadcrumb">
    <li><a href="index.php">Início</a><span class="divider"></span></li>
     <li class="active">Geriatria</li>
    </ul>
       
       <div class="alert alert-info text-center" role="alert">A consulta trouxe <b>?</b> linhas.</div>
       <form method="post">
        <p> <a href="geriatria/formulario" class="btn btn-primary btn-flat">Incluir</a> </p>
         
       </form>
                      
<div class="table-responsive">
 
    <table class="table table-hover table-condensed"> 
        <thead>
            <tr>
                  <tr class="info">
                <th>Atribuidor</th>
                <th>Delegado</th>
                <th>Status</th>
                <th>Operação Delegada</th>
                <th>Ação Delegada</th>
                <th>Motivo</th>
                <th>Instante da Concessão</th>
                <th>Gerenciamento</th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td>
                               <div class="btn-group btn-group-sm">
                                   <button type="submit" name="alterar" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
                                   <button type="submit" name="excluir" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                                <button type="submit" name="visualizar" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span></button>
                               </div>
                           </td>
                        </tr>
                   </tbody>
                </table>
             </div>
        </section>
    </div>

 
   

<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>
