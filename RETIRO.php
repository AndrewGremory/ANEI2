<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

                           <h1 style="margin-left:300px">CENTRO DE ACOPIO ANEI</h1>
		                        <hr>
		                        <div style="margin-left: 100px; margin-right:100px;">    



                        <input type="text" id="cuadro_buscar" class="form-control" onkeyup="mi_busqueda();" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("bqztnuddpckcckx4f7fx-mysql.services.clever-cloud.com", "uck36gwmenqhsuau", "uck36gwmenqhsuau", "bqztnuddpckcckx4f7fx")) or die("Problemas con la conexión");

                            $regi = mysqli_query($conexion, "select *from ahorro group by (cedula_ahorro)") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($consu = mysqli_fetch_array($regi)) 
                            {
                           
                        ?>
        
                        <option label="<?php echo $consu['nombre_ahorro']?>"   value="<?php echo $consu['cedula_ahorro']?>" >
                        
                        <?php } ?>
                        </datalist>                     
        </div>

    
    </div>

		<hr>
		
   <div class="row justify-content-md-center">		
    <div class="col-md-6">
    <div id="mostrar_mensaje"></div>
    
    </div>
   </div>
</div>
    
			<!-- -----------------CAFE --------------------------------->	
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">
 

<!-- ----------------- SECADO--------------------------------->  
function retiro()
    { 
    
      var parametros = 
      {
        "cedula_retiro" : $("#cedula_retiro").val(),
        "nombre_retiro" : $("#nombre_retiro").val(),
        "valor_retiro" : $("#valor_retiro").val(),
        "accion":"19"
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
 
   
     
<!-- ----------------- BUSQUEDA--------------------------------->  

	function mi_busqueda()
    { 
    	buscar = document.getElementById('cuadro_buscar').value;
     
      var parametros = 
      {
        "mi_busqueda" : buscar,
        
        "accion" : "18"
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
    <!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
  
    

<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
