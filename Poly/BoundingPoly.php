<?php

namespace Headoo\GoogleVisionApiBundle\Poly;


use Headoo\GoogleVisionApiBundle\Model\Vertice;

class BoundingPoly
{
    private $vertices = [];

    /**
     * @return array
     */
    public function getVertices()
    {
        return $this->vertices;
    }

    /**
     * @param array $vertices
     */
    public function setVertices($vertices)
    {
        $this->vertices = $vertices;
    }

    /**
     * @param array $vertices
     */
    public function addVertices(Vertice $vertice)
    {
        $this->vertices[] = $vertice;
    }
}