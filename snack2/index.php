<?php
 
 $name = $_GET['name'];
 $email = $_GET['mail'];
 $eta = $_GET['age'];

 if (strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($eta)) {
     echo "Accesso riuscito!";
 } else {
     echo "Accesso negato!";
 }