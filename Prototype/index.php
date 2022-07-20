<?php

require_once 'Entity/Theme.php';
require_once 'Entity/Database.php';

$db = new Database();
$GLOBALS['db'] = $db->checkDb();

$theme1 = new Theme('red', 'Times New Roman', 'green');
$theme2 = clone $theme1;

$theme1::create($theme1->getBackgroundColor(), $theme1->getPolice(), $theme1->getColor());

$theme1::create($theme1->getBackgroundColor(), $theme1->getPolice(), 'white');




