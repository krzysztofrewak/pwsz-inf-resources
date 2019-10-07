<?php

use PPO\Zoo\Animals\Elephant;
use PPO\Zoo\Animals\Lion;
use PPO\Zoo\Zoo;

require "./vendor/autoload.php";

$zoo = new Zoo("Zoo Legnica");

$zoo->addAnimal(new Lion("Simba"))
	->addAnimal(new Lion("Mufasa"))
	->addAnimal(new Elephant("Dumbo"));

$zoo->feedAnimals("water");
