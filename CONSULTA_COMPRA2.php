<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
<body>
<?php
 $conexion = mysqli_connect("bqztnuddpckcckx4f7fx-mysql.services.clever-cloud.com", "uck36gwmenqhsuau", "VvekENXHAb8qpfRNMX6d", "bqztnuddpckcckx4f7fx") or die("Problemas con la conexión");

 $accion = $_POST['accion'];
 
 if($accion == 1)
{  
?>       
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
    	 	
	<tbody>
        <?php 
          $resul = mysqli_query($conexion,"select *from compra");
		  while($consul = mysqli_fetch_array($resul))
		  {
            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7]."||".
            $consul[8]."||".
            $consul[9]."||".
            $consul[10]."||".
            $consul[11]."||".
            $consul[12]."||".
            $consul[13]."||".
            $consul[14];
         ?> 
			 <tr>
				 <td><?php echo $consul['cedula']?></td>
				 <td><?php echo $consul['marca']?></td>
                 <td><?php echo $consul['municipio_compra']?></td>
                 <td><?php echo $consul['producto']?></td>
                 <td><?php echo $consul['tipo_grano']?></td>
				 <td><?php echo $consul['unidad']?></td>
                 <td><?php echo $consul['numero_estopas']?></td>
                 <td><?php echo $consul['estado_estopas']?></td>
                 <td><?php echo $consul['numero_sacos']?></td>
				 <td><?php echo $consul['estado_sacos']?></td>
                 <td><?php echo $consul['latas_compra']?></td>
				 <td><?php echo $consul['kilos_brutos']?></td>
                 <td><?php echo $consul['kilos_netos']?></td>
				 <td><?php echo $consul['fecha_compra']?></td>
              	 <td><?php echo $consul['observaciones']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
			 </tr>
            <?php 
            }	
            ?> 
	</tbody>
		
        <tfoot>
         <tr>
         <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
         </tr>
     </tfoot>
 </table>
 <script type="application/javascript">
    $(document).ready( function () {
    $('#cesar').DataTable();
    } );
</script>
 <?php  
 }
if($accion == 3)
{
    $resultados= mysqli_query($conexion,"update compra set producto='$_POST[producto]', municipio_compra ='$_POST[municipio]', tipo_grano='$_POST[tipo]', unidad='$_POST[unidad]', numero_estopas=$_POST[numero_estopas], estado_estopas='$_POST[estado_estopas]', numero_sacos=$_POST[numero_sacos], estado_sacos='$_POST[estado_sacos]', latas_compra=$_POST[latas], kilos_brutos=$_POST[kilos_brutos], observaciones='$_POST[observaciones]' where marca='$_POST[marca]'");
}    
if($accion == 4)
{
    mysqli_query($conexion,"delete FROM compra where numero=$_POST[eli]");
?>
<table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
    	 	
	<tbody>
        <?php 
          $resul = mysqli_query($conexion,"select *from compra");
		  while($consul = mysqli_fetch_array($resul))
		  {
            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7]."||".
            $consul[8]."||".
            $consul[9]."||".
            $consul[10]."||".
            $consul[11]."||".
            $consul[12]."||".
            $consul[13]."||".
            $consul[14];
         ?> 
			 <tr>
				 <td><?php echo $consul['cedula']?></td>
				 <td><?php echo $consul['marca']?></td>
                 <td><?php echo $consul['municipio_compra']?></td>
                 <td><?php echo $consul['producto']?></td>
                 <td><?php echo $consul['tipo_grano']?></td>
				 <td><?php echo $consul['unidad']?></td>
                 <td><?php echo $consul['numero_estopas']?></td>
                 <td><?php echo $consul['estado_estopas']?></td>
                 <td><?php echo $consul['numero_sacos']?></td>
				 <td><?php echo $consul['estado_sacos']?></td>
                 <td><?php echo $consul['latas_compra']?></td>
				 <td><?php echo $consul['kilos_brutos']?></td>
                 <td><?php echo $consul['kilos_netos']?></td>
				 <td><?php echo $consul['fecha_compra']?></td>
              	 <td><?php echo $consul['observaciones']?></td>
                 <td><input type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#modificar"  value="modificar" ></td>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
			 </tr>
			 </tr>
            <?php 
            }	
            ?> 
	</tbody>
		
        <tfoot>
         <tr>
         <th>CEDULA</th>
                <th>MARCA</th>
                <th>MUNICIPIO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>UNIDAD</th>
                <th>N° ESTOPAS</th>
                <th>ESTADO ESTOPAS</th>
                <th>N° SACOS</th>
                <th>ESTADO SACOS</th>
                <th>N° LATAS</th>
                <th>KILOS BRUTOS</th>
                <th>KILOS NETOS</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
         </tr>
     </tfoot>
 </table>
 <script type="application/javascript">
    $(document).ready( function () {
    $('#cesar').DataTable();
    } );
</script>
<?php 
} 
?>
</body>
</html>