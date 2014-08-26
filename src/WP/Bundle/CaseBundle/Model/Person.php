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
    private $name;

    /**
     * @var Adress
     */
    private $adres;

    /**
     * @param Adress $adress
     * @param $name
     */
    public function __construct(Adress $adress, $name)
    {
        $this->name     = $name;
        $this->adres    = $adress;

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

} 