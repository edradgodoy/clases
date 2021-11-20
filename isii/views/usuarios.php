<?php 
    include 'methods/Usuarios/usuarios.php';
    $usuarios = Usuarios::singleton();
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Usuarios</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-success btn-sm" id="btnAddUsuarios">
                            Agregar usuario
                        </button>
                        <!-- Modal -->
                            <div class="modal fade" id="ModalUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="titulomodalusuairo"></h4>
                                        </div>
                                        <?php 
                                            if (isset($_POST['regUsuario'])) {
                                                $result = $usuarios->addUsuario();
                                                if ($result === true) {
                                                    echo '<script>windows.location.href("usuarios");</script>';
                                                } else {
                                                    echo '<script>
                                                        alert("'.$result.'");
                                                        windows.location.href("usuarios");
                                                    </script>';
                                                }
                                                
                                            }
                                            if (isset($_POST['editPuesto'])) {
                                                $result = $usuarios->editPuesto();
                                                if ($result === true) {
                                                    echo '<script>windows.location.href("usuarios");</script>';
                                                } else {
                                                    echo '<script>
                                                        alert("'.$result.'");
                                                        windows.location.href("usuarios");
                                                    </script>';
                                                }
                                                
                                            }
                                        ?>
                                        <form class="form-inline" role="form" action="" method="POST" id="formUsuario">
                                            <div class="modal-body">
                                                <div class="form-group" style="display: none;">
                                                    <input type="text" class="form-control" id="idUsuario" name="idUsuario" placeholder="Nombre del puesto">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="pnombre">primer Nombre</label>
                                                    <input type="text" class="form-control" id="pnombre" name="pnombre" placeholder="Primer nombre">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="snombre">segundo Nombre</label>
                                                    <input type="text" class="form-control" id="snombre" name="snombre" placeholder="Segundo nombre">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="papellido">Primer apellido</label>
                                                    <input type="text" class="form-control" id="papellido" name="papellido" placeholder="Primer apellido">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="sapellido">Segundo apellido</label>
                                                    <input type="text" class="form-control" id="sapellido" name="sapellido" placeholder="Segundo apellido">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="idpuesto">Puesto</label>
                                                    <select name="idpuesto" id="idpuesto" class="form-control">
                                                        <?php echo $usuarios->listaPuestos(); ?>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="email">Correo Electronico</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="username">Nombre de usuario</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password">Contraseña</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Nombre de usuario">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="estcuenta">Estadod cuenta</label>
                                                    <select name="estcuenta" id="estcuenta" class="form-control">
                                                        <option value="">Seleccione un estado</option>
                                                        <option value="Est_0001">Activa</option>
                                                        <option value="Est_0002">Desactivada</option>
                                                        <option value="Est_0003">Bloqueada</option>
                                                    </select>
                                                  </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="regUsuario" id="regUsuario" class="btn btn-success btn-sm" value="Registrar">
                                                <input type="submit" name="editUsuario" id="editUsuario" class="btn btn-warning btn-sm" value="Editar">
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
                                        <th>Nombre completo</th>
                                        <th>Correo</th>
                                        <th>Nombre de usuario</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        echo $usuarios->listaUsuarios();
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