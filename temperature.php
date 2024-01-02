<?php

// Déclaration de la fonction updateClosestTemperature.
function updateClosestTemperature($currentTemp, &$closestTemp) {
    if ($closestTemp === null) {
        $closestTemp = $currentTemp; // La première température devient la plus proche si aucune n'a été traitée.
    } else {
        // Maintenant on compare les valeurs absolues et on privilégie les nombres positifs en cas d'égalité.
        if (abs($currentTemp) < abs($closestTemp) || (abs($currentTemp) == abs($closestTemp) && $currentTemp > $closestTemp)) {
            $closestTemp = $currentTemp;
        }
    }
}

// Lecture du nombre de températures à analyser depuis l'entrée standard.
// Exemple de données d'entrée
// $n = 5;
// $inputs = "1 -2 -8 4 5";
// Mais l'exercice nous demande de lire les données depuis l'entrée standard.
fscanf(STDIN, "%d", $n);

// Lecture des températures depuis l'entrée standard et conversion en tableau.
$inputs = explode(" ", fgets(STDIN));
$closest = null;

// Traitement de chaque température.
for ($i = 0; $i < $n; $i++) {
    $t = intval($inputs[$i]); // Conversion de la température en un entier
    updateClosestTemperature($t, $closest);
}

// Afficher la température la plus proche de zéro.
echo($closest !== null ? $closest : 0);
echo("\n");
?>
