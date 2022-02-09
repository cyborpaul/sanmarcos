        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro nuevo de usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/newusers.php';
                  }
                  ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="user">Nombres</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombres" name="name">
                  </div>

                  <div class="form-group">
                    <label for="user">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" name="lastname">
                  </div>
                  <div class="form-group">
                    <label for="user">Alias</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="alias" name="nickname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                  </div>

                  <div class="form group">
                  <label for="checks">Rol</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="check" value="0">
                          <label for="customRadio1" class="custom-control-label">Administrador</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="check" value="1" checked>
                          <label for="customRadio2" class="custom-control-label">Webmaster</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" name="check" value="2">
                          <label for="customRadio3" class="custom-control-label">Gestor de contenido</label>
                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Registrar nuevo usuario</button>
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