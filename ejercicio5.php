<?php
$pizzas=1;
$precio_unitario=8000;
do{
    $total=$pizzas*$precio_unitario;
    $texto_pizza = ($pizzas==1)?"pizza":"pizzas";
    echo $pizzas."". $texto_pizza. "=$".$total."<br>";
    $pizzas++;
}while($pizzas<=8);
?>
