<?php include_once VIEWS_PATH . 'layouts/default/header.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Operações</h1>
            </section><!-- /.content-header -->
            
        <section class="content">
            
            <script type="text/javascript">
function validateForm()
{
    var var1='<div class="alert alert-danger text-center">Campos obrigatórios não preenchidos!</div>';;
var x=document.forms["NomeDoForm"]["desc_operacao"].value;
if (x==null || x=="")
{
document.getElementById("demo").innerHTML =(var1);

return false;
}
}
            </script>
            
            <script>
    $(document).ready(function() {
        $("#menu ul li:eq(4)").addClass("active");
    });
</script>

<?php
if (isset($_POST['cancelar'])) {
    ?>
    <script>
        $(window.document.location).attr('href', '/operacoes');
    </script>
    <?php   
}
?>

<p id="demo"></p>

<ul class="breadcrumb">
    
    <li><a href="/operacoes">Operações</a><span class="divider"></span></li>
    <li class="active">Incluir</li>
</ul>

<form method="post" name="NomeDoForm" onsubmit="return validateForm()">
    <div class="form-group col-md-6">
        <label>Descrição da Operação:</label>
        <input type="text" id="iddescri" name="desc_operacao" class="form-control" placeholder="Descrição da Operação">
    </div>        
        
    <div class="form-group col-md-12">
        <button type="submit" name="salvar" class="btn btn-success" onclick="myFunction()">Salvar</button>
        <button type="submit" onclick="window.history.back(-1);" name="cancelar" class="btn btn-danger">Cancelar</button>
    </div>
</form>


            
        </section>
    </div>
<?php include_once VIEWS_PATH . 'layouts/default/footer.php'; ?>