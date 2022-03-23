<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de nueva sede</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/new_sede.php';
                  }
                  ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre institución</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la institución" name="institucion">
                  </div>
                  <div class="form-group">
                    <label for="user">Responsable</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Responsable" name="responsable">
                  </div>

                  <div class="form-group">
                    <label for="user">Contacto</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contacto" name="contacto">
                  </div>
                  <div class="form-group">
                    <label for="user">Correo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="correo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Celular</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Celular" name="celular">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripción" name="descripcion">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Registrar nueva sede</button>
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