<?php
/*
    II ülesanne - Celsius Fahrenheitideks 
    Merilyn Merisalu
    kuupäev: 20.06.2018
*/
    
/*
Koosta kood, mis teisendab Celsius-kraadid Fahrenheiti.Kasuta valemit:
F=(9/5)*C+32. Vastus vormindatakse 2 kohta pärast koma.";    
*/

echo "Koosta kood, mis teisendab Celsius-kraadid Fahrenheiti.
Kasuta valemit: F=(9/5)*C+32. Vastus vormindatakse 2 kohta pärast koma. <br />";

echo "<br />";

// Muutujate loomine

echo "Vajaminevad andmed: <br />";
echo "<br />";

$kraadidCelsius=31;

echo "Celsius-kraadid: $kraadidCelsius <br />";
echo "<br />";

$kraadidFahren=(9/5)*$kraadidCelsius+32;

// Vastuse vormindamine

echo "Vastus vormindamindatult: <br />";
echo "<br />";

printf("$kraadidCelsius on %0.2f fahrenheiti!", $kraadidFahren ); 


?>
