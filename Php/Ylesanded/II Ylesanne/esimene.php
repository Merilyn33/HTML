<?php

/*
    Ülesanne 2 esimese osa
    Merilyn Merisalu
    Kuupäev: 20.06.2018
*/

/*
    Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse,
    korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel 
    näidatakse ka tehet ja kuvatakse eraldi ridadel. 
*/

echo "Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse,
    korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel 
    näidatakse ka tehet ja kuvatakse eraldi ridadel. <br />";
echo "<br />";
    
    // Muutujate loomine
    
    echo "Muutujate loomine: <br />";
    echo "<br />";
    $esimeneTaisarv=24;
    $teineTaisarv=2;
    
    // Tehted arvudega
    
    echo "Tehted arvudega: <br />";
    echo "<br /> ";
    
    // Liitmine
    
    echo "Liitmine: ";
    
    $liitmiseVastus=$esimeneTaisarv+$teineTaisarv;
    
    echo "$esimeneTaisarv pluss $teineTaisarv võrdub: <br /> 
    $liitmiseVastus!<br />";
    echo "<br />";
    
    
    // Lahutamine
    
    echo "Lahutamine: ";
    
    $lahutamiseVastus=$esimeneTaisarv-$teineTaisarv;
    
    echo "$esimeneTaisarv miinus $teineTaisarv võrdub: <br />
    $lahutamiseVastus!";
    
    echo "<br />";
    
    // Korrutamine
    
    echo "<br />";
    $korrutamiseVastus=$esimeneTaisarv*$teineTaisarv;
    echo "Korrutamine: $esimeneTaisarv korda $teineTaisarv võrdub: <br />
    $korrutamiseVastus!";
    
    echo "<br />";
    
    // Jagamine
    
    echo "<br />";
    
    $jagamiseVastus=$esimeneTaisarv/$teineTaisarv;
    
    echo "Jagamine: $esimeneTaisarv jagatud $teineTaisarv võrdub: <br />
    $jagamiseVastus!";
    
    echo "<br />";
    echo "<br />";
    
    // Jäägi leidmine
    
    $jagamiselSaadudJaak=$esimeneTaisarv%$teineTaisarv;
    
    echo "Jäägi leidmine: $esimeneTaisarv jagamisel $teineTaisarv tekkinud jääk
     võrdub: <br /> $jagamiselSaadudJaak!";
    
    
   
?>
