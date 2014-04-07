<?php

namespace Euler\MathBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Math
 */
class Math
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $array;

    /**
     * @var string
     */
    private $object;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $time;

    /**
     * @var string
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $times;

    /**
     * @var string
     */
    private $details;

    /**
     * @var integer
     */
    private $points;

    /**
     * @var float
     */
    private $result;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set array
     *
     * @param string $array
     * @return Math
     */
    public function setArray($array)
    {
        $this->array = $array;

        return $this;
    }

    /**
     * Get array
     *
     * @return string 
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * Set object
     *
     * @param string $object
     * @return Math
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string 
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Math
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return Math
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Math
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set times
     *
     * @param \DateTime $times
     * @return Math
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return \DateTime 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Math
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Math
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set result
     *
     * @param float $result
     * @return Math
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return float 
     */
    public function getResult()
    {
        return $this->result;
    }
}
