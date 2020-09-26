<!--
  Autor: Paula Daniela Galeano Soto
  Nota: Prueba Treda - Editar registro
  Fecha: 25/09/2020
--> 

<!--Incluir estilos bootstrap--> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--Incluir scripts--> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
<!--Incluir iconos--> 
<link rel="stylesheet" href="https://cdnjs.cl
oudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 

	$idproducto = $_GET['idproducto'];
	include('conexion/conexion.php');
	$consulta = $conexion->query("SELECT * from productos where id_producto like $idproducto");
	$resultado = mysqli_fetch_array($consulta);
 ?>

 <div class="row justify-content-center mt-3">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header fondo-rojo">
            <h6>Editar Producto</h6>
          </div>
          <div class="card-body">
            <form action="actualizar.php" method="GET">
              <div class="form-group">
                <div class="form-group">
                  <label class="text-danger"><small>Nombre del Producto</small></label>
                  <input type="text" class="form-control form-control-sm" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto"  value="<?=$resultado['nombre_producto'] ?>" required />
                </div>
                <label class="text-danger"><small>SKU</small></label>
                  <input type="text" class="form-control form-control-sm" id="sku" name="sku" placeholder="Ingrese el SKU" value="<?=$resultado['sku'] ?>" required />

                <div class="form-group">
                  <label class="text-danger"><small>Descripción</small></label>
                  <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" placeholder="Ingrese una descripción" value="<?=$resultado['descripcion'] ?>" required />
                </div>
                <div class="form-group">
                  <label class="text-danger"><small>Valor</small></label>
                  <input type="text" class="form-control form-control-sm" id="valor" name="valor" placeholder="Ingrese el valor" value="<?=$resultado['valor'] ?>" required /><br>
                </div>
                <div class="form-group">
                  <label class="text-danger"><small>Tienda</small></label>
                  <input type="text" class="form-control form-control-sm" id="id_tienda" name="id_tienda" placeholder="Ingrese el id de la tienda" value="<?=$resultado['id_tienda'] ?>" required /><br>
                </div>
              </div>
              <input type="hidden" name="idproducto" value="<?=$idproducto?>">
                <div class="container-fluid text-center">
			        <button class="btn btn-dark" onclick="actualizar()">Actualizar</button>
			        <button class="btn btn-dark" onclick="volver();">Volver</button>
			    </div>
            </form>
          </div>
        </div>
      </div>
    </div><hr>
   