<?php

namespace Headoo\GoogleVisionApiBundle\Properties;


use Headoo\GoogleVisionApiBundle\Model\Color;

class ImageProperties
{

    private $dominantColors = [];

    /**
     * @return mixed
     */
    public function getDominantColors()
    {
        return $this->dominantColors;
    }

    /**
     * @param mixed $dominantColors
     */
    public function setDominantColors(array $dominantColors)
    {
        $this->dominantColors = $dominantColors;
    }

    public function addDominantColors(Color $color)
    {
        $this->dominantColors[] = $color;
    }
}
