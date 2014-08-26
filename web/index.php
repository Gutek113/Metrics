<?php

require '../vendor/autoload.php';

use WP\Bundle\CaseBundle\Model\Person;

$adres = new WP\Bundle\CaseBundle\Model\Adress();
$person = new Person($adres, 'Janek');
#echo $person->getName();

