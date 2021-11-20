        </div>
        <!-- /#wrapper --><!-- jQuery -->
        <script src="asset/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="asset/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="asset/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="asset/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="asset/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="asset/js/startmin.js"></script>
        <?php if ($url == 'inicio'){ ?>
        <!-- Morris Charts JavaScript -->
        <script src="asset/js/raphael.min.js"></script>
        <script src="asset/js/morris.min.js"></script>
        <script src="asset/js/morris-data.js"></script>
        <?php } ?>
        <script src="asset/js/function.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>