<?php

/*
$name = $_GET['name'];
$email = $_GET['mail'];
$eta = $_GET['age'];
*/
// se definisco le variabili in questo caso quando eseguo il codice mi da un warning nel caso ci fossero dei valori vuoti
// perchè comunque cerca di definire la variabile assegnata

if (strlen($_GET['name']) > 3 && strpos($_GET['mail'], '@') !== false && strpos($email, '.') !== false && is_numeric($_GET['age'])) {

    echo "Accesso riuscito!";

} elseif (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {

    echo "Accesso negato!";

} else {

    echo ' Accesso negato!';

}