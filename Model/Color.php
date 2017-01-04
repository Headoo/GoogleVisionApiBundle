<?php

namespace Headoo\GoogleVisionApiBundle\Model;


class Color
{
    private $score;
    private $pixelFraction;
    private $red;
    private $green;
    private $blue;

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getPixelFraction()
    {
        return $this->pixelFraction;
    }

    /**
     * @param mixed $pixelFraction
     */
    public function setPixelFraction($pixelFraction)
    {
        $this->pixelFraction = $pixelFraction;
    }

    /**
     * @return mixed
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * @param mixed $red
     */
    public function setRed($red)
    {
        $this->red = $red;
    }

    /**
     * @return mixed
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * @param mixed $green
     */
    public function setGreen($green)
    {
        $this->green = $green;
    }

    /**
     * @return mixed
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * @param mixed $blue
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;
    }


}