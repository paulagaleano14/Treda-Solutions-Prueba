
<?php
	
    $id_producto = $_GET['idproducto'];
  	$nombreProducto = $_GET['nombreProducto'];
    $sku = $_GET['sku'];
    $descripcion = $_GET['descripcion'];
    $valor = $_GET['valor'];
    $id_tienda = $_GET['id_tienda'];


    
    include('conexion/conexion.php');
    $actualizarProducto=$conexion->query(" UPDATE productos SET id_producto='$id_producto', sku='$sku', nombre_producto='$nombreProducto', descripcion='$descripcion', id_tienda='$id_tienda', valor='$valor' WHERE id_producto='$id_producto' ");
?>

<br><br>

<!--Incluir estilos bootstrap--> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--Incluir scripts--> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
<div class="container text-center">
	<h3>El producto se actualizó exitosamente.</h3><hr>
	<a href="index.php" type="button" class="btn btn-dark">Volver</a>
</div>