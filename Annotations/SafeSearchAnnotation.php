<?php

namespace Headoo\GoogleVisionApiBundle\Annotations;


class SafeSearchAnnotation
{
    private $adult;
    private $spoof;
    private $medical;
    private $violence;

    /**
     * @return mixed
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * @param mixed $adult
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;
    }

    /**
     * @return mixed
     */
    public function getSpoof()
    {
        return $this->spoof;
    }

    /**
     * @param mixed $spoof
     */
    public function setSpoof($spoof)
    {
        $this->spoof = $spoof;
    }

    /**
     * @return mixed
     */
    public function getMedical()
    {
        return $this->medical;
    }

    /**
     * @param mixed $medical
     */
    public function setMedical($medical)
    {
        $this->medical = $medical;
    }

    /**
     * @return mixed
     */
    public function getViolence()
    {
        return $this->violence;
    }

    /**
     * @param mixed $violence
     */
    public function setViolence($violence)
    {
        $this->violence = $violence;
    }



}