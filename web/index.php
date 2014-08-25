<?php
 require '../vendor/autoload.php';

 use  WP\Bundle\CaseBundle\Model\Person;

 $person = new Person();
 echo $person->getName();