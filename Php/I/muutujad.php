<?php
/* 
    Merilyn Merisalu
    Harjutus 04 - Muutujad
    
    Kuupäev - 16.06.2018 
*/


// Muutujate loomine

$eesnimi="Merilyn";
$perenimi="Merisalu";
$nimi=$eesnimi. ' ' .$perenimi;
$vanus=24;

$teineEesnimi="Karin";
$teinePerenimi="Eegelrand";
$teineNimi=$teineEesnimi. ' ' .$teinePerenimi;
$teineVanus=37;
$kaal=69.5;


// Muutuja väljastamine

echo "Minu nimi on $nimi, olen $vanus aastat vana ja olen miljardär.<br />";
echo "<br />";
echo $teineNimi. '<br />';
echo $teineVanus. '<br />';
echo $kaal. '<br >';

// Tekstiväärtused 

// Kahekordsesed jutumärgid

echo "<br />";
echo "$nimi ja $vanus! <br />";
echo "<br />";

// Ühekordsed jutumärgid

echo $teineNimi.' on '. $teineVanus. ' aastane!<br />';

// Muutujate käänamine

echo "${eesnimi}il on kiire auto!<br />";

// Jutumärkide kasutamine
echo "<br />";
echo '"Welcome to Estonia!"<br />';
echo "<br />";
echo "Shakespeare'i teosed! <br />";

echo "<br />";
echo "\"Armastus Koleera Ajal\"-Gabriel García Márquez <br />";

?>
