<?php
    /* Tehted arvudega PHP's*/
    
    // Põhitehted
    
    $x=8;
    $y=2;
    
    $liitmine=$x+$y;
    $lahutamine=$x-$y;
    $korrutamine=$x*$y;
    $jagamine=$x/$y;
    $j22k=$x%$y;
    
    // Tulemuste väljastamine
    
    echo "Vastused: <br />";
    echo "Liitmine: $liitmine <br />";
    echo "Lahutamine: $lahutamine <br />";
    echo "Korrutamine: $korrutamine <br />";
    echo "Jagamine: $jagamine <br />";
    echo "Jääk: $j22k <br />";
    
    echo "<br />";
    
    
    // Omistamine
    
    echo "Omistamine: <br />";
    echo "Ühe liitmine muutuja x väärtusele: ";
    
    
    // Ühe liitmine muutuja x väärtusele
    
    $x++;
    
    echo "$x";
    echo "<br />";
    
    // Ühe lahutamine muutuja y väärtusest
    
    echo "Ühe lahutamine muutuja y väärtusest: ";
    
    $y--;
    echo $y;
    echo "<br />";
    
    // Muutujate väärtuste võrdustamine
    
    echo "Muutuja x väärtuse võrdustamine muutuja y väärtusega: ";
    $x=$y;
    
    echo "$x ja $y";
    echo "<br />";
    
    // Muutujate väärtuste liitmine
    
    echo "Muutujate väärtuste liitmine: ";
    echo $x+=$y;
    echo "<br />";
   
   // Muutujate väärtuste lahutamine
   
    echo "Muutujate väärtuste lahutamine: ";
    echo $x-=$y;
    echo "<br />";
    
     // Muutujate väärtuste korrutamine
   
    echo "Muutujate väärtuste korrutamine: ";
    echo $x*=$y;
    echo "<br />"; 
    
     // Muutujate väärtuste jagamin
   
    echo "Muutujate väärtuste jagamine: ";
    echo $x/=$y;
    echo "<br />"; 
    
    // Muutujate x ja y väärtuste muutmine
    
    $x=10;
    $y=2;
    
    // Muutujate x ja y väärtuste jagamisel tekkiva jäägi leidmine
    
     echo "Muutujate väärtuste jagamisel tekkiva jäägi leidmine: ";
     echo $x%=$y;
     echo "<br />"; 
     echo "<br />";
    
    // Tekstiliitmine 
    
    echo "Stringide ühtseks stringiks muutmine: ";
    $eesnimi="Kai ";
    $perekonnanimi="Kantpüks";
    $nimi=$eesnimi.$perekonnanimi;
    echo "Naise nimi on $nimi!";
    echo "<br />";
    echo "<br />";
    
    // Arvude ja teksti vormindamine printf'i abil
    
    echo "Arvude ja teksti vormindamine printf'i abil: <br />";
    echo "<br />";
    
    $nimi="Mari";
    
    printf("Tere, %s!", $nimi);
    echo "<br />";
    $vanus=27;   
    printf("Tema nimi on %s ja ta on %d aastat vana. <br />", $nimi, $vanus);
    
    $i=7.26;
    $j=2.369;
    $k=$i%$j;
    
   $vormindatud=sprintf("Vastus on %0.3f!<br />", $k);
   echo $vormindatud;
?>

