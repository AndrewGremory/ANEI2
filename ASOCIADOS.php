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


</head>
<body>
<div  class=" text-center">
		<h1  class=" text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		
    <h2 class="text-center">ASOCIADOS</h2>  
    <div style="margin-top: 80px; margin-left:60px">
                      <form>       
                                       
                        <div class="form-group row" >
                          Nombre Completo:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cedula:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cedula_usuario" name="cedula_usuario" min="0"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Contacto:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="contacto" name="contacto"  required><br>
                          </div>
                        </div>

                        
                         <div class="form-group row ">
                          Codigo UP:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_up" name="codigo_up"  required><br>
                          </div>
                        </div>
                          
                        <div class="form-group row ">
                          Municipio:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="municipio" name="municipio"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Vereda:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="vereda" name="vereda"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Finca:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="finca" name="finca"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                         Estatus:
                         <select name="estatus" id="estatus" disabled>
		                       <option value="estandar">Estandar </option>
                           <option value="organico">Organico</option>
		                      </select><br><br>
                        </div>

                        <div class="form-group row ">
                        tipo de Vinculacion:
                         <select name="tipo_vinculcion" id="tipo_vinculacion" disabled>
		                       <option value="estandar">Estandar </option>
                           <option value="asociado">Asociado</option>
		                      </select><br><br>
                        </div>

                          
                        <div class="form-group row ">
                          Cupo_cafe:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cupo_cafe" name="cupo_cafe" min="0"  required><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          Cupo_cacao:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cupo_cacao" name="cupo_cacao" min="0"  required><br>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="usuario();">Guardar</button>
                            
                          </div> 
                        </div>
                      </form>
                        </div>
                        </div>
</body>
</html>

                        <!-- ----------------- ASOCIADO--------------------------------->  

<script type="text/javascript">

  function usuario()
    { 
    
      var parametros = 
      {
       
        "nombre_usuario" : $("#nombre_usuario").val(),
        "municipio" : $("#municipio").val(),
        "vereda" : $("#vereda").val(),
        "finca" : $("#finca").val(),
        "tipo_vinculacion" : $("#tipo_vinculacion").val(),
        "cedula_usuario" : $("#cedula_usuario").val(),
        "codigo_up" : $("#codigo_up").val(),
        "estatus" : $("#estatus").val(),
        "cupo_cafe" : $("#cupo_cafe").val(),
        "cupo_cacao" : $("#cupo_cacao").val(),
        "contacto" : $("#contacto").val(),
        "accion":"16"
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

    </script>