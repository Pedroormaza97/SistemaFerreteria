 
  


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Administrar Categorias</h3>
      </div>
      </div>
    <div class="clearfix"></div>
    <!--CUERPO DESING Y BOTON DE NUEVO USUARIO-->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalnuevaCategoria">Nueva categoria</button>
            </div>


        


          <!--TABLA DE USUARIOS-->
<!-- TABLA -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Categoria</th>
                          <th>Fecha</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>

                         <?php
                        $item = null;
                        $valor = null;
                        $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                        foreach ($categorias as $key => $value) {
                          
                          echo '
                          <tr>
                          <td>'.$value["id"].'</td>
                          <td>'.$value["categoria"].'</td>
                          <td>'.$value["fecha"].'</td>
                          <td>

                          <div class="btn-group">
                          <button type="button" class="btn btn-warning btnEditarCategoria"  idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modaleditarCategoria"><i class="fa fa-pencil"></i></button>


                          <button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>
                          </div>
                          </td> 
                          </tr>';
                        }

                        




                        ?> 
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                
<!-- /page content -->
               
<!--MODAL DE NUEVA CATEGORIA-->

            <div  class="modal fade" id="modalnuevaCategoria" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" enctype="multipart/form-data"  novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DATOS DE LA NUEVA CATEGORIA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    
                                        
                                        <span class="section">Categoria Info</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre de la Categoria<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="nuevaCategoria"  id="nuevaCategoria" required="required" required type="text" /></div>
                                        </div>
                                        
                                       
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary btnNuevaCategoria">Ingresar</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                    
                                                </div>
                                            

                                               
                                           
                                           </div>  
                                        </div>
                                    
                                        
                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  
                </div>




              </div>
              <?php
                                             $crearCategoria = new ControladorCategorias();
                                             $crearCategoria -> ctrCrearCategorias();

                                                ?>

              </form>

                  
            </div>
           

        </div>
      </div>

<!--MODAL DE EDITAR CATEGORIA-->

            <div  class="modal fade" id="modaleditarCategoria" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form class="" action="" method="post" enctype="multipart/form-data" novalidate>
                  <div class="x_content">
                  <!--MODAL HEADER-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">EDITAR CATEGORIA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                  </div>

                  <!--MODAL CUERPO-->
                  <div class="modal-body">
        
                      <!-- start form for validation -->
                      <div class="x_content">
                                    
                                        
                                        <span class="section">Categoria Info</span>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Id Categoria<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="editarid" name="editarid"  value="" readonly type="text" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Fecha de creacion de la categoria<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="editarfecha" name="editarfecha"  value="" readonly type="text" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Editar Categoria<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="editarCategoria" name="editarCategoria" type="text" />
                                            </div>
                                        </div>
                                        
                      

                                        
                                            
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Actualizar</button>
                                                    
                                                    
                                                </div>
                                            

                                               
                                           
                                           </div>  
                                        </div>
                                    
                                        
                    <!--MODAL FOOTER-->
                  <div class="modal-footer">

                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  
                </div>




              </div>
              <?php
                                             $editarCategorias = new ControladorCategorias();
                                             $editarCategorias -> ctrEditarCategorias();

                                                ?> 

              </form>

                  
            </div>
           

        </div>
      </div>
      
    
<!-- /page content -->
          </div>
       </div>
      </div>
    </div>
  </div>


    
    <!-- Javascript functions -->
  <script>
    function hideshow(){
      var password = document.getElementById("password1");
      var slash = document.getElementById("slash");
      var eye = document.getElementById("eye");
      
      if(password.type === 'password'){
        password.type = "text";
        slash.style.display = "block";
        eye.style.display = "none";
      }
      else{
        password.type = "password";
        slash.style.display = "none";
        eye.style.display = "block";
      }

    }
  </script>

  <script>
    function hideshow1(){
      var password = document.getElementById("password2");
      var slash = document.getElementById("slash");
      var eye = document.getElementById("eye");
      
      if(password.type === 'password'){
        password.type = "text";
        slash.style.display = "block";
        eye.style.display = "none";
      }
      else{
        password.type = "password";
        slash.style.display = "none";
        eye.style.display = "block";
      }

    }
  </script>

    <script>

        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            //console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <script>

        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[1]);
        // on form "submit" event
        document.forms[1].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            //console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[1].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

<?php


  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrEliminarUsuario();

?>
