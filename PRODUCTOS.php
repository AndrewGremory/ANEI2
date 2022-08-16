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
                       <h1 style="margin-left:300px">CENTRO DE ACOPIO ANEI</h1>
		                   <hr>
		                   <div style="margin-left: 100px; margin-right:100px;">    
                       <h2 class="text-center">PRODUCTO</h2>
                        <form>       
                                       
                        Nombre Producto :
                        <select name="nombre" id="nombre">
                          <option>Selecione</option>
                          <option value="cafe pergamino seco">cafe pergamino seco</option>
                          <option value="cafe mojado">cafe mojado</option>
                          <option value="cacao seco">cacao seco</option>
                          <option value="cacao en baba">cacao en baba</option>
                        </select><br><br>

                        Tipo :
                        <select name="tipo" id="tipo">
                          <option>Selecione</option>
                          <option value="estandar">Estardar</option>
                          <option value="organico">Organico</option>
                        </select><br><br>

                        <div class="form-group row ">
                          Precio:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="precio" name="precio" ><br>
                          </div>
                        </div>

                        
                         <div class="form-group row ">
                          Prima:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="prima_producto" name="prima_producto" ><br>
                          </div>
                        </div>

                                                 
                        Politica :
                        <select name="politica" id="politica">
                          <option>Selecione</option>
                          <option value="politica1">Politica1</option>
                          <option value="politica2">Politica2</option>
                        </select><br><br>

                        <div class="form-group row ">
                          Descripcion:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" ><br>
                          </div>
                        </div>

                         <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="productos();">Guardar</button>
                            
                          </div> 
                        </div>
                        </form>
                        </div>

                        
</body>
</html>

                        <!-- ----------------- ASOCIADO--------------------------------->  

<script type="text/javascript">

  function productos()
    { 
    
      var parametros = 
      {
       
        "nombre" : $("#nombre").val(),
        "codigo" : $("#codigo").val(),
        "precio" : $("#precio").val(),
        "descripcion" : $("#descripcion").val(),
        "tipo" : $("#tipo").val(),
        "prima_producto" : $("#prima_producto").val(),
        "politica" : $("#politica").val(),
        "accion":"17"
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