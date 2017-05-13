            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Versão Beta</b> 0.2.0
                </div>
                <strong>Copyright &copy; <?= date('Y') ?> <a href="http://www.uninove.br/">Uninove</a>.</strong> Todos os direitos reservados.
            </footer><!-- /.main-footer -->
        </div><!-- /.wrapper -->

        
        <!-- jQuery UI 1.11.4 -->
        <script src="/assets/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="/assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
        <!-- <script src="assets/adminlte/plugins/morris/morris.min.js"></script> -->
        <!-- Sparkline -->
        <!-- <script src="assets/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script> -->
        <!-- jvectormap -->
        <!-- <script src="assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
        <!-- <script src="assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
        <!-- jQuery Knob Chart -->
        <!-- <script src="assets/adminlte/plugins/knob/jquery.knob.js"></script> -->
        <!-- daterangepicker -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script> -->
        <!-- <script src="assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script> -->
        <!-- datepicker -->
        <!-- <script src="assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script> -->
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- iCheck -->
        <script src="/assets/adminlte/plugins/iCheck/icheck.min.js"></script>
        <!-- Slimscroll -->
        <!-- <script src="assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
        <!-- FastClick -->
        <!-- <script src="assets/adminlte/plugins/fastclick/fastclick.min.js"></script> -->
        <!-- AdminLTE App -->
        <script src="/assets/adminlte/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="assets/adminlte/dist/js/pages/dashboard.js"></script> -->
        <!-- AdminLTE for demo purposes -->
        <script src="/assets/adminlte/dist/js/demo.js"></script>
        <!-- Sweet Alert -->
        <script src="/assets/adminlte/dist/js/sweetalert-dev.js"></script>
        
        <script>
            $(document).ready(function() {
                var url = window.location.href.replace(window.location.origin, '');
                var paths = url.split('/');
                var selectedUrl = paths[2];
                var treeViews = document.getElementsByClassName('treeview');
                
                /* Obtem todos os itens do menu lateral e verifica qual deles 
                 * possui um anchor relacionado a url para atribuir a classe active */
                for(i = 0; i < treeViews.length; i++){
                    var treeViewclass = treeViews[i].getAttribute("class");
                    var a = $(treeViews[i]).children('a')[0];
                    if(a.getAttribute("href").includes(selectedUrl) && !treeViewclass.includes('active')){
                        $(treeViews[i]).addClass('active');
                        break;
                    }
                }
            });
        </script>
        
    </body>
</html>