<!--
    Prueba Logica de programación
    Creado por: Paula Daniela Galeano Soto
    Fecha: 27/09/2020
-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div class="row">
    <div class="col-md-6">
        <div class="jumbotron">
            <h2 class="display-4">Multiplos</h2>
            <p class="lead">
            <?php
                    function multiplos($n = 10){
                        $resultado = 0;
                        for($i=0;$i<$n;$i++){
                            if ($i%3==0 or $i%5==0){
                                $resultado = $resultado + $i;
                            }  
                        }
                        
                        return "La suma de los multiplos de 3 y 5 es: " . $resultado;
                    }
                    echo multiplos(10);
                ?></p>
        </div>

        <div class="jumbotron">
            <h2 class="display-4">Metodo Camel A</h2>
            <p class="lead">
            <?php
                function camel(){
                    $string="Bienvenido a_Treda-solutions";
                    $string =str_replace(' ', '', $string);
                    $string =str_replace('_', '', $string);
                    $string =str_replace('oa', 'oA', $string);
                    $string =str_replace('-s', 'S', $string);

                    return $string;
                }
            echo camel();
            ?></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="jumbotron">
            <h2 class="display-4">Metodo Camel B</h2>
            <p class="lead">
            <?php
                function camelb(){
                    $string="bienvenido-a_Treda solutions";
                    $string =str_replace('-a', 'A', $string);
                    $string =str_replace('_', '', $string);
                    $string =str_replace(' s', 'S', $string);

                    return $string;
                }
            echo camelb();
            ?>
            </p>
        </div>

        <div class="jumbotron">
            <h2 class="display-4">Cadena Invertida</h2>
            <p class="lead">
            <?php
                function invertida(){
                    $cadena="Bienvenido a Treda Solutions";
                    $arrayPalabras = explode(" ",$cadena);

                    foreach($arrayPalabras as $item){
                        if(strlen($item) > 5){
                            echo " " .strrev($item) . " ";
                        }else{
                            echo " " . $item . " ";
                        }   
                    }  
                }
            echo invertida();
            ?>
            </p>
        </div>
    </div>
</div>