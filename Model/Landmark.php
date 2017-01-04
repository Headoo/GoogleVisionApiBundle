<?php

namespace Headoo\GoogleVisionApiBundle\Model;


class Landmark
{
    private $type;
    private $positionX;
    private $positionY;
    private $positionZ;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * @param mixed $positionX
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;
    }

    /**
     * @return mixed
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * @param mixed $positionY
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;
    }

    /**
     * @return mixed
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * @param mixed $positionZ
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;
    }



}