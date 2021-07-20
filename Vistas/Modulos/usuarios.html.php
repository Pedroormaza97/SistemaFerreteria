<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Administrar Usuarios</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo usuario</button>
<!--MODAL DE NUEVO USUARIO-->
            <form id="demo-form" data-parsley-validate class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"  >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DATOS DEL NUEVO USUARIO</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">

                      <!-- start form for validation -->

                        <label for="fullname">Nombre * :</label>
                        <input type="text" id="nombre" class="form-control" name="nuevoNombre" required data-parsley-pattern="^[a-zA-Z ]+$" />

                        <label for="user">User * :</label>
                        <input type="text" id="usuario" class="form-control" name="nuevoUsuario"  required data-parsley-pattern="^[a-zA-Z0-9_]+$" />

                        <label for="password">Password * :</label>
                        <input type="text" id="password" class="form-control" name="password"  required data-parsley-pattern="^[a-zA-Z0-9.]+$" />
                        </div>

                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button   type="submit" class="btn btn-primary source"  onclick="new PNotify({
                                    title: 'Oh No!',
                                    text: 'Something terrible happened.',
                                    type: 'error',
                                    styling: 'bootstrap3'
                                });">GUARDAR</button>
                  </div>



              </div>



              <!-- end form for validations -->

                    </div>
                  </div>


            </form>








          <!--TABLA DE USUARIOS-->

          <table class="table table-striped projects">

            <thead>

            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo Ingreso</th>
              <th>Acciones</th>

            </tr>

            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Pedro Ormaza </td>
                <td>Admin</td>

                <td><img src="vistas/img/usuarios/imguser.png" class="avatar" alt="Avatar"></td>
                <td>Admin del Sistema</td>
                <td><button type="button" class="btn btn-success btn-xs">Success</button></td>
                <td>2021-Junio-12 </td>
                <td>
                  <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Borrar </a>
                </td>
              </tr>







          </table>



      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
