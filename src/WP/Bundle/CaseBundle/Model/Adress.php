<?php

namespace WP\Bundle\CaseBundle\Model;


/**
 * Klasa reprezentująca adres.
 *
 * @package WP\Bundle\CaseBundle\Model
 */
class Adress
{
    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $number;

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }


} 