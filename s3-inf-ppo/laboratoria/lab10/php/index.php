<?php

use PPO\Notebook\Menu;
use PPO\Notebook\Notebook;

require "./vendor/autoload.php";

$notebook = new Notebook();

$menu = new Menu($notebook);
$menu->run();
