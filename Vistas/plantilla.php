
<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="icon" href="vistas/img/plantilla/logomini.png" type="image/ico" />

    <title>Sistema de Ferreteria | </title>
    <!--*********************************************
    *                     Plugins CSS                *
    *************************************************-->
    <!-- Bootstrap -->
    <link href="vistas/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vistas/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vistas/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vistas/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vistas/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vistas/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vistas/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vistas/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="vistas/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vistas/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- bootstrap-wysiwyg -->
    <link href="vistas/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vistas/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vistas/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vistas/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vistas/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="vistas/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vistas/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vistas/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vistas/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vistas/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vistas/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vistas/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vistas/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <!--SweetAle -->
    <script src="vistas/vendors/sweetalert2/sweetalert2.all.min.js"></script> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="vistas/vendors/validator/multifield.js"></script>
    <script src="vistas/vendors/validator/validator.js"></script>

        <!-- Javascript functions -->
  

    
    <!-- Custom Theme Style -->
    <link href="vistas/build/css/custom.css" rel="stylesheet">
  </head>


    <!--*********************************************
    *                     CUERPO DEL CODIGO         *
    *************************************************-->

  <body class="nav-md">
    <div class="main_container login">
      <div class="container body ">


   <?php
  if (isset($_SESSION["iniciarsesion"]) && $_SESSION["iniciarsesion"] == "ok") {

     //echo '<div class="login_wrapper">';
         if ($_SESSION["rol"] == "1"){
       include "vistas/modulos/cabezote.php";
         }elseif ($_SESSION["rol"] == "2") {
         include "vistas/modulos/cabezotemedico.php";
         }elseif ($_SESSION["rol"] == "3") {
         include "vistas/modulos/cabezoterecepcionista.php";
         }

       if (isset($_GET["ruta"])) {
           if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "calendario"||
                $_GET["ruta"] == "usuarios"||
                $_GET["ruta"] == "personas"||
                $_GET["ruta"] == "categorias"||
                    $_GET["ruta"] == "salir") {
               include "vistas/modulos/".$_GET["ruta"].".php";
           } else {
               include "vistas/modulos/404.php";
           }
       } else {
         
           include "vistas/modulos/inicio.php";
           
       }

       include "vistas/modulos/footer.php";
       //echo '</div>';
    }else {
     include "vistas/modulos/login.php";
   }
    ?>


    <!--*********************************************
    *                     Plugins CSS                *
    *************************************************-->
    
                    
                    <!-- Javascript functions -->
                  

                        
    <!-- jQuery -->
    <script src="vistas/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vistas/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vistas/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vistas/vendors/Chart.js/dist/Chart.min.js"></script>


    <!-- gauge.js -->
    <script src="vistas/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vistas/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vistas/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vistas/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vistas/vendors/Flot/jquery.flot.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.time.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vistas/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vistas/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vistas/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vistas/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vistas/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vistas/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vistas/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vistas/vendors/moment/min/moment.min.js"></script>
    <script src="vistas/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- FullCalendar -->
    <script src="vistas/vendors/moment/min/moment.min.js"></script>
    <script src="vistas/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vistas/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vistas/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vistas/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vistas/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vistas/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vistas/vendors/select2/dist/js/select2.full.min.js"></script>
  
    <!-- Autosize -->
    <script src="vistas/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vistas/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vistas/vendors/starrr/dist/starrr.js"></script>
    <!-- PNotify-->
    <script src="vistas/vendors/pnotify/dist/pnotify.js"></script>
    <script src="Vistas/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="Vistas/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Datatables -->
    <script src="vistas/vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="vistas/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vistas/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vistas/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vistas/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vistas/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vistas/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vistas/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vistas/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vistas/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vistas/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vistas/vendors/jszip/dist/jszip.min.js"></script>
    <script src="vistas/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vistas/vendors/pdfmake/build/vfs_fonts.js"></script> 
   

    <!-- Custom Theme Scripts -->
    <script src="vistas/build/js/custom.js"></script>

    <script src="vistas/js/usuarios.js"></script>
    <script src="vistas/js/personas.js"></script>
    <script src="vistas/js/categorias.js"></script>
        </div>
      </div>
      
  </body>
</html>
