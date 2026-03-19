<?php
$operator = readline("Wil je de getallen bij elkaar optellen of van elkaar afhalen? kies + of -" . PHP_EOL);
//We gaan direct checken of deze invoer geldig is. 
//Als $operator niet identiek aan "+" is EN niet identiek aan "-" is, dan exit( "$operator is geen geldige invoer".PHP_EOL);
if ($operator !== "+" && $operator !== "-") {
    exit( "$operator is geen geldige invoer".PHP_EOL);
}
$getal1 = readline("Wat is het eerste getal?" . PHP_EOL);
//Als $getal1 geen getal is, dan exit met "$getal1 is geen geldige invoer"}

$getal2 = readline("Wat is het tweede getal?" . PHP_EOL);
//Als $getal2 een getal is, dan exit met "$getal2 is geen geldige invoer"

//uitvoeren van de operator 
//Als $operator is identiek aan "+", dan echo $getal1 + $getal2 . PHP_EOL; 
//Anders als $operator is identiek aan "-", dan van elkaar afhalen
if ($operator == "+") {
    echo $getal1 + $getal2 . PHP_EOL;
} elseif ($operator == "-") {
    echo $getal1 - $getal2 . PHP_EOL;
}
?>
