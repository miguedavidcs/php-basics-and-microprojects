<?php
// Funcion
function saludo($name = null) {
    return "Hola " . (isset($name) ? $name : 'Mundo');
}
 echo saludo('Miguel');
 echo "<br>";
 echo saludo();
 echo "<br>";
 $num = [10,1,2,3,4,5,6,7,8,9];
 function sum(...$sum){
   $resultado = array_merge(...$sum);
   return array_sum($resultado);
 }
 echo sum($num);

 

