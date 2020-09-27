<!--
  Autor: Paula Daniela Galeano Soto
  Nota: Prueba Treda - SQL
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
    $conexion = new mysqli('localhost','root','','prueba_sql_treda');;
    $consulta = $conexion->query("SELECT * from cliente INNER JOIN ciudad ON cliente.id_ciudad = ciudad.id ORDER BY dias_mora ASC");
 ?>

<!-- LISTA DE CLIENTES  --> 
<section id="listar">
  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <table class="table table-bordered table-sm col-md-9">
        <thead style="background-color: rgb(124, 15, 15); color: white;">
          <th style="width:20%">Cedula</th>
          <th style="width:30%">Nombre</th>
          <th style="width:20%">Dias de Mora</th>
          <th style="width:20%">Riesgo</th>
          <th style="width:10%">Ciudad</th>
        </thead>
        <tbody> <?php while($listar = mysqli_fetch_array($consulta)){ ?>
        
          <tr class="text-center" >
              <td><?php echo $listar['cedula']; ?></td>
              <td><?php echo $listar['primer_nombre']. " " .$listar['primer_apellido'] ?></td>
              <td><?php echo $listar['dias_mora']; ?></td>
              <td><?php 
              	if ($listar['dias_mora'] >= 1 && $listar['dias_mora'] <= 20) {
				    echo "Riesgo Bajo";
				} elseif ($listar['dias_mora'] >= 21 && $listar['dias_mora'] <= 35) {
				    echo "Riesgo Medio";
				} elseif ($listar['dias_mora'] > 35) {
				    echo "Riesgo Alto";
				}
              ?></td>
              <td><?php echo $listar['nombre']; ?></td>
          <?php } ?>
          </tr>
        </tbody>
      </table>
    </div>

    <p class="text-center">Creado por: Paula Daniela Galeano Soto</p>
  </section>