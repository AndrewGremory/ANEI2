<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">


    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  
  <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
  <script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
  <script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>
  
  <link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet">  
  <script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="#">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Portfolio</a>
	          </li>
	          <li>
              <a href="#">Contact</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- -----------------COMPRA --------------------------------->	
        <div class=" text-center">
          <h1  class=" text-center">CENTRO DE ACOPIO ANEI</h1>
          <hr>
          
          <div style="margin-left: 350px; margin-right:150px;">
          <input type="text" id="cuadro_buscar" class="form-control" onkeypress="mi_busqueda();" list="listanavegadores" placeholder="Buscar cedula..."> 
              <datalist id="listanavegadores">
              <?php
            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
      
            $registros = mysqli_query($conexion, "select  *from asociados") or die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {?>
              
              <option label="<?php echo $reg['nombre_usuario']?>" value="<?php echo $reg['cedula_usuario']?>" >
              
              <?php } ?>
              </datalist> 
        
              </div>
      
          <hr>
          <h2 class="text-center">SERVICIOS</h2>
         <div class="row justify-content-md-center">		
          <div class="col-md-2">
          <div id="mostrar_mensaje"></div>
          </div>
         </div>
      </div>
        
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>



<script type="text/javascript">
 
  <!-- ----------------- COMPRAR --------------------------------->  
    function compra()
      { 
      
        var parametros = 
        {
          "cedula_compra" : $("#cedula_compra").val(),
          "marca" : $("#marca").val(),
          "unidad" : $("#unidad").val(),
          "producto" : $("#producto").val(),
          "kilos_brutos" : $("#kilos_brutos").val(),
          "kilos_netos" : $("#kilos_netos").val(),
          "tipo_grano" : $("#tipo_grano").val(),
          "latas_compra" : $("#latas_compra").val(),
          "numero_sacos" : $("#numero_sacos").val(),
          "estado_sacos" : $("#estado_sacos").val(),
          "observaciones" : $("#observaciones").val(),
          "numero_estopas" : $("#numero_estopas").val(),
          "estado_estopas" : $("#estado_estopas").val(),
          "ahorro" : $("#ahorro").val(),
          "total_ahorro" : $("#total_ahorro").val(),
          "municipio_compra" : $("#municipio_compra").val(),
          "accion":"10"
        };
  
        $.ajax({
          data: parametros,
          url: 'ANEI2.php',
          type: 'POST',
          
          beforesend: function()
          {
            $('#mostrar_mensaje').html("Mensaje antes de Enviar");
          },
  
          success: function(mensaje)
          {
            $('#mostrar_mensaje').html(mensaje);
          }
        });
        return false;
      }
   
  <!-- ----------------- COMPRAR CAFE--------------------------------->
        
  <!-- ----------------- BUSQUEDA--------------------------------->  
  
    function mi_busqueda()
      { 
        buscar = document.getElementById('cuadro_buscar').value;
        var parametros = 
        {
          "mi_busqueda" : buscar,
          "accion" : "4"
        };
  
        $.ajax({
          data: parametros,
          url: 'ANEI2.php',
          type: 'POST',
          
          beforesend: function()
          {
            $('#mostrar_mensaje').html("Mensaje antes de Enviar");
          },
  
          success: function(mensaje)
          {
            $('#mostrar_mensaje').html(mensaje);
          }
        });
      }
  <!-- ----------------- BUSQUEDA --------------------------------->
  </script>
  <!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
  