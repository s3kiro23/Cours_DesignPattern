<?php

require_once 'Entity/TransportAerien.php';
require_once 'Entity/TransportNaval.php';
require_once 'Entity/TransportTerrestre.php';

$transportT = new TransportTerrestre(110, 'Diesel');
$transportA = new TransportAerien(140, 'SP98');
$transportN = new TransportNaval(70, 'Fioul');

echo $transportT->envoi($transportT->getOil(), $transportT->getPrice());
echo $transportA->envoi($transportA->getOil(), $transportA->getPrice());
echo $transportN->envoi($transportN->getOil(), $transportN->getPrice());



