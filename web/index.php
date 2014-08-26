<?php

require '../vendor/autoload.php';

use WP\Bundle\CaseBundle\Model\Person;
use WP\Bundle\CaseBundle\Model\Adress;

$adres = new Adress();
$person = new Person($adres, 'Janek');
echo $person->getName();

