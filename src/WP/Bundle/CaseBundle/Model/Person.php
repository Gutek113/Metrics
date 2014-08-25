<?php

namespace WP\Bundle\CaseBundle\Model;

/**
 * Klasa reprezentująca osobę.
 *
 * @package WP\Bundle\CaseBundle\Model
 */
class Person
{
    /**
     * @var string
     */
    private $name = 'Janek';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

} 