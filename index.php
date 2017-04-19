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

    $departements = array ('Aisne' => '02',
                           'Nord' => '59',
                           'Oise' => '60',
                           'Pas de Calais' => '62',
                           'Somme' => '80',);
    echo $departements ['Nord']. "<br />";







   ?></p>
</body>
</html>
