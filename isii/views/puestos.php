<?php 
    include 'methods/Puestos/Puestos.php';
    $puestos = Puestos::singleton();
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Puestos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-success btn-sm" id="btnAddPuesto">
                            Agregar puesto
                        </button>
                        <!-- Modal -->
                            <div class="modal fade" id="ModalPuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="titulomodalpuesto"></h4>
                                        </div>
                                        <?php 
                                            if (isset($_POST['regPuesto'])) {
                                                $result = $puestos->addPuesto();
                                                if ($result === true) {
                                                    echo '<script>windows.location("puestos");</script>';
                                                } else {
                                                    echo '<script>
                                                        alert("'.$result.'");
                                                        windows.location("puestos");
                                                    </script>';
                                                }
                                                
                                            }
                                            if (isset($_POST['editPuesto'])) {
                                                $result = $puestos->editPuesto();
                                                if ($result === true) {
                                                    echo '<script>windows.location("puestos");</script>';
                                                } else {
                                                    echo '<script>
                                                        alert("'.$result.'");
                                                        windows.location("puestos");
                                                    </script>';
                                                }
                                                
                                            }
                                        ?>
                                        <form class="form-inline" role="form" action="" method="POST" id="formPuesto">
                                            <div class="modal-body">
                                                <div class="form-group" style="display: none;">
                                                    <input type="text" class="form-control" id="idPuesto" name="idPuesto" placeholder="Nombre del puesto">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nombrePuesto" class="control-label col-md-3">Nombre:</label>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" >
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="regPuesto" id="regPuesto" class="btn btn-success btn-sm" value="Registrar">
                                                <input type="submit" name="editPuesto" id="editPuesto" class="btn btn-warning btn-sm" value="Editar">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre del puesto</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        echo $puestos->listaPuestos();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
</div>
</div>