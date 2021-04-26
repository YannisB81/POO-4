<?php

require_once 'Car.php';
$auto1 = new Car('blanche', 4, 'du gasoil', false);
echo "1ère voiture :";
try {
    echo '<br>'.$auto1->start();     
} catch (Exception $e) {
    echo $e->getMessage();
    echo '<br>'.$auto1->setParkBrake();
} finally {
    echo "<br>Ma voiture roule comme un donut";
}
echo '<br>'.$auto1->forward();
echo '<br> Vitesse de la voiture : ' . $auto1->getCurrentSpeed() . ' km/h';
echo '<br>'.$auto1->brake();
echo '<br> Vitesse de la voiture : ' . $auto1->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto1->brake().'<br>';


$auto2 = new Car('jaune', 7, 'du charbon', true);
echo "<br>2ème voiture :";
try {
    echo '<br>'.$auto2->start();     
} catch (Exception $e) {
    echo $e->getMessage();
    echo '<br>'.$auto2->setParkBrake();
} finally {
    echo "<br>Ma voiture roule comme un donut";
}
echo '<br>'.$auto2->forward();
echo '<br> Vitesse de la voiture : ' . $auto2->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>'.$auto2->brake();
echo '<br> Vitesse de la voiture : ' . $auto2->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto2->brake().'<br>';