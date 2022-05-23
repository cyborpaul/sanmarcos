<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de nuevo nodo en el sistema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/new_nodo.php';
                  }
                  ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre del nodo" name="nodo_name">
                  </div>
                  <div class="form-group">
                    <label for="user">Descripción</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Descripción del nodo" name="nodo_description">
                  </div>

                  <div class="form-group">
                    <label for="user">Latitud</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Latitud" name="nodo_latitud">
                  </div>
                  <div class="form-group">
                    <label for="user">Longitud</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Longitud" name="nodo_longitud">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Region</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Region" name="nodo_region">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Provincia</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Provincia" name="nodo_provincia">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Distrito</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Distrito" name="nodo_distrito">
                  </div>

                  <div class="form group">
                  <label for="checks">Estado</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="nodo_habilitado" value="0">
                          <label for="customRadio1" class="custom-control-label">Habilitado</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="nodo_habilitado" value="1" checked>
                          <label for="customRadio2" class="custom-control-label">Deshabilitado</label>
                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Registrar nuevo nodo</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>