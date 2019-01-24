<?php

setlocale(LC_ALL, 'fr_FR.utf8');

function myAutoLoader($classe)
{
  require $classe . '.php';
}

spl_autoload_register('myAutoLoader'); // Enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on en instancie une 

// $voiture1 = new Voiture('BE1-BFE-926', 2016, 54000, 'Audi', 'A3', 'grise', '2 Tonnes');
// $voiture1->display();

// $voiture2 = new Voiture('BE1-BFE-926', 2019, 127000, 'VW', 'Golf', 'Blanche', '1.3 Tonnes');
// $voiture2->display();

$db = new DataBase('localhost', 'learnpoo' , 'root', 'root');
$db->showAll('username', 'users');