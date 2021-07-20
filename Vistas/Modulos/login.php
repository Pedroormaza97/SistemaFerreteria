
<div id="back"></div>
<div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="post" action="">
          <img src="Vistas/img/plantilla/logomini1.png" class="img_responsive">
          <div>
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required />
          </div>


            <div>

                   <button  class="btn btn-primary btn-block btn-flat" type="submit">Ingresar al sistema</button>
            </div>




            <a class="reset_pass" href="#">Olvidó su contraseña?</a>


          <div class="clearfix"></div>



            <div class="clearfix"></div>
            <div>
              <li class="glyphicon glyphicon-cog fa-3x fa-lg" aria-hidden="true"><h1> SISTEMA FERRETERIA</h1></li>

            </div>
            <div class="separator">
              <p class="change_link">Contactar a los
                <a href="#signup" class="to_register"> Administradores del sistema </a>
              </p>
              <p>©2021 Todos los derechos reservados.</p>
          </div>
          <?php
            $login = new ControladorUsuarios();
            $login ->ctrIngresoUsuario();
            ?>

        </form>

      </section>
    </div>
  </div>
