
<?php
echo "<h1>FACTORIAL DE 10</h1>";
for ($i=0; $i<= 10 ; $i++) 
{ 
    $factorial = 1;
    for ($j = 1; $j <= $i; $j++) 
    { 
        $factorial *= $j;
    } 
    echo "El factorial de " . $i . " es: " . $factorial . "<br>";
}
?>