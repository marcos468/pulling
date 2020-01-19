<?php 

 $persona = [
               "nombre" => "Pedro",
               "apellido" => "Sánchez",
               "edad" => 50
          ];


          foreach ($persona as $valor) {
               echo "$valor <br>";
          }
?>




 $auto = [
               "Marca" => "Ford",
               "Modelo" => "Focus",
               "Año" => 2017
          ];

          foreach ($auto as $posicion => $valor) {
               echo "$posicion: $valor <br>";
          }
