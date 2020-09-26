<!--
  Autor: Paula Daniela Galeano Soto
  Nota: Prueba Treda
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--Consulta a la base de datos--> 
<?php 
	include('conexion/conexion.php');
  $consulta = $conexion->query("SELECT * from productos");
  $consulta1 = $conexion->query("SELECT * from productos");
 ?>

<!-- LISTA DE PRODUCTOS --> 
<section id="listar">
  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <table class="table table-bordered table-sm col-md-9">
        <thead style="background-color: rgb(124, 15, 15); color: white;">
          <th style="width:20%">Nombre del Producto</th>
          <th style="width:10%">SKU</th>
          <th style="width:20%">Descripción</th>
          <th style="width:20%">Tienda</th>
          <th style="width:10%">Valor</th>
          <th style="width:10%">Imagen</th>
        </thead>
        <tbody> <?php while($listar = mysqli_fetch_array($consulta1)){ ?>
          <tr>
              <td class="text-center"><?php echo $listar['nombre_producto']; ?></td>
              <td><?php echo $listar['sku']; ?></td>
              <td><?php echo $listar['descripcion']; ?></td>
              <td><?php echo $listar['id_tienda']; ?></td>
              <td><?php echo $listar['valor']; ?></td>
              <td class="text-center">
                <?php
                echo '<img src="' . $listar["imagen"] . '"
                 style="height: 50px; width: 50px;">'
                ?>
              </td>
          <?php } ?>
          </tr>
        </tbody>
      </table>
      <div class="container-fluid text-center">
        <button class="btn btn-dark" onclick="crear()">Crear Producto</button>
        <button class="btn btn-dark" onclick="administrar();">Administrar Productos</button>
      </div>
    </div>
  </section>
<!-- FORMULARIO CREAR PRODUCTO--> 
 <div class="container-fluid mt-5">
  <section id="crear">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header fondo-rojo">
            <h6>Crear Producto</h6>
          </div>
          <div class="card-body">
            <form action="guardar.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="form-group">
                  <label class="text-danger"><small>Nombre del Producto</small></label>
                  <input type="text" class="form-control form-control-sm" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto" required />
                </div>
                <label class="text-danger"><small>SKU</small></label>
                  <input type="text" class="form-control form-control-sm" id="sku" name="sku" placeholder="Ingrese el SKU" required />

                <div class="form-group">
                  <label class="text-danger"><small>Descripción</small></label>
                  <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" placeholder="Ingrese una descripción" required />
                </div>
                <div class="form-group">
                  <label class="text-danger"><small>Valor</small></label>
                  <input type="text" class="form-control form-control-sm" id="valor" name="valor" placeholder="Ingrese el valor" required /><br>
                </div>
                <div class="form-group">
                  <label class="text-danger"><small>Tienda</small></label>
                  <input type="text" class="form-control form-control-sm" id="id_tienda" name="id_tienda" placeholder="Ingrese el id de la tienda" required /><br>
                </div>
                <div class="form-group">
                  <label class="text-danger"><small>Foto</small></label>
                  <input type="file" class="form-control" id="foto" name="foto" accept="image/*" placeholder="Ingrese la foto" /><br>
                </div>
              </div>
              <button type="submit" class="btn btn-dark">Crear Producto</button>
            </form>
          </div>
        </div>
      </div>
    </div><hr>
    <div class="container-fluid text-center">
      <button class="btn btn-dark" onclick="volver()">Volver</button>
    </div>
  </section>
</div>

<!-- FORMULARIO ADMINISTRAR PRODUCTO--> 
<div class="container-fluid mt-5">
  <section id="administrar">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <table class="table table-bordered table-sm col-md-9">
          <thead style="background-color: rgb(124, 15, 15); color: white;">
              <th style="width:20%">Nombre del Producto</th>
              <th style="width:10%">SKU</th>
              <th style="width:20%">Descripción</th>
              <th style="width:20%">Tienda</th>
              <th style="width:10%">Valor</th>
              <th style="width:10%">&nbsp</th>
          </thead>
          <tbody> <?php while($listar1 = mysqli_fetch_array($consulta)){  ?>
              <tr>
                  <td class="text-center"><?php echo $listar1['nombre_producto']; ?></td>
                  <td><?php echo $listar1['sku']; ?></td>
                  <td><?php echo $listar1['descripcion']; ?></td>
                  <td><?php echo $listar1['id_tienda']; ?></td>
                  <td><?php echo $listar1['valor']; ?></td>
                  <td class="text-center">
                    <a href="editar.php?idproducto=<?=$listar1['id_producto'] ?>"><i class="fa fa-edit"></i></a>
                    <a href="eliminar.php?idproducto1=<?=$listar1['id_producto'] ?>"><i class="fa fa-trash"></i></a>
                  </td>
              <?php } ?>
              </tr> 
          </tbody>
        </table>
      </div>
    </div>
    <div class="container-fluid text-center">
      <button class="btn btn-dark" onclick="volver()">Volver</button>
    </div>
  </section>
</div>

