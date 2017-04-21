<!DOCTYPEhtm>
<html>
<head>
  <meta charset="utf-8"/>
  <link type="text/css" ref="stylesheet" href="style.css"/>
</head>
<body>
  <p><?php
    $mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    echo $mois [2]. "<br />";
    print $mois {5}. "<br />";
    $mois [7] = "Août";
    echo $mois [7]. "<br />";

    $departements = array('02' => 'Aisne',
                           '59' => 'Nord',
                           '60' => 'Oise',
                           '62' => 'Pas de Calais',
                           '80' => 'Somme',);
    echo $departements['59']. "<br />";

    $departements['51'] = "Marne";
    // array_push($departements, '51');
    // echo $departements['51']. "<br />";
    // var_dump ($departements);
?>
</p>

<p><?php
  foreach ($mois as $mois) {
    echo "<li>$mois</li>";
  }
  ?></p>
<p><?php
     echo implode("<br>", $departements);
     ?>
</p>
<p><?php
    foreach ($departements as $index => $valeur) {
      echo ("<br>". 'Le département ' .$valeur. ' a le numéro ' .$index);
     }


   ?>
 </p>
</body>
</html>
