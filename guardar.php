
<?php
	

  	$nombreProducto = $_POST['nombreProducto'];
    $sku = $_POST['sku'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['valor'];
    $id_tienda = $_POST['id_tienda'];
    
    include('conexion/conexion.php');
    

    $nombreFoto=$_FILES['foto']['name'];
    $archivo=$_FILES['foto']['tmp_name'];
    $ruta="fotos";

    $ruta = $ruta."/".$nombreFoto."/";
    move_uploaded_file($archivo, $ruta);

    $agregarProducto = $conexion->query("INSERT INTO productos (id_producto, sku, nombre_producto, descripcion, id_tienda, valor, imagen) VALUES('','$sku', '$nombreProducto','$descripcion','$id_tienda','$valor','$ruta')");
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
	<h3>El producto se ha creado exitosamente.</h3><hr>
	<a href="index.php" type="button" class="btn btn-dark">Volver</a>
</div>