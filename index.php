<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new animal("sheep", 4, "no");
$buduk = new Frog("buduk", 4, "no");
$kerasakti = new Ape("kera sakti", 4, "no");

$sheep->introduce();
$sheep->haveLegs();
$sheep->isColdblood();

$buduk->introduce();
$buduk->haveLegs();
$buduk->isColdblood();
$buduk->jump();

$kerasakti->introduce();
$kerasakti->haveLegs();
$kerasakti->isColdblood();
$kerasakti->yell();


?>