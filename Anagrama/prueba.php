<!DOCTYPE html>
<html>
<body>
<?php
// $a= strtolower('hola, que buena ola Laomir');
// $b= strtolower('oal');
$a = 'hola, que buena ola laomir';
$b = 'oal';
$result= 0;
for($i = 0; $i <= strlen($b)-1; $i++){
  $str = substr($b, $i, 1);
  $pos = strpos($a, $str);
  $count = substr_count($a, $str);
  for($o = 1; $o <= $count; $o++){
    $str2 = substr($a, $pos, strlen($b));
    if(count_chars($str2, 1) == count_chars($b, 1)){
      $result++;
    }
  }
}
echo $result;
?>
// el for se usa para recorrer $b. $i vale 0 porque la primera letra de $b se encuentra en la posición cero. Por eso se utiliza el strlen($b)-1, porque el largo de $b es 3 al
restarle 1 en el último recorrido da 2 que es la posición de la letra "l".
luego se utiliza substr($b, $i, 1); para extraer la palabra en la posición $i del string que es la variable $b. Y lo guarda en la variable $str.
strpos($a, $str); devuelve la posición de $str en $a y lo guarda en $pos.
substr_count($a, $str); devuelve el número de veces que encontro $str en el string. Y lo guarda en $count.
el for se hace con $count para que no de mas vueltas que las veces que encontro $stre en $a.
substr($a, $pos, strlen($b)); esta vez lo que el substr realiza es la extracción del largo de $b (3) en la posición indicada por $pos. Osea extrae 3 caractéres de $a.
el count_chars se utiliza para contar el número de veces que aparace lo buscado en el string. En este caso se usa en el modo 1 porque devuelve las coincidencias de valor
superior a 0. Si son iguales ambos resultados se le suma 1 a $result y así hasta terminar.
terminología de PHP.
</body>
</html>
