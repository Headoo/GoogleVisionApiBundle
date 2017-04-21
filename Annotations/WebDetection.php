<?php

namespace Headoo\GoogleVisionApiBundle\Annotations;


use Headoo\GoogleVisionApiBundle\Model\WebEntity;
use Headoo\GoogleVisionApiBundle\Model\MatchingImage;


class WebDetection
{

    private $webEntities = [];
    private $partialMatchingImages = [];
    private $pagesWithMatchingImages = [];
    private $visuallySimilarImages = [];

    /**
     * @return mixed
     */
    public function getWebEntities()
    {
        return $this->webEntities;
    }

    /**
     * @param mixed $webEntities
     */
    public function setWebEntities($webEntities)
    {
        $this->webEntities = $webEntities;
    }

    /**
     * @param mixed $webEntities
     */
    public function addWebEntity(WebEntity $webEntities)
    {
        $this->webEntities[] = $webEntities;
    }

    /**
     * @return mixed
     */
    public function getPartialMatchingImages()
    {
        return $this->partialMatchingImages;
    }

    /**
     * @param mixed $partialMatchingImages
     */
    public function setPartialMatchingImages($partialMatchingImages)
    {
        $this->partialMatchingImages = $partialMatchingImages;
    }

    /**
     * @param mixed $partialMatchingImages
     */
    public function addPartialMatchingImage(MatchingImage $partialMatchingImages)
    {
        $this->partialMatchingImages[] = $partialMatchingImages;
    }

    /**
     * @return mixed
     */
    public function getPagesWithMatchingImages()
    {
        return $this->pagesWithMatchingImages;
    }

    /**
     * @param mixed $pagesWithMatchingImages
     */
    public function setPagesWithMatchingImages($pagesWithMatchingImages)
    {
        $this->pagesWithMatchingImages = $pagesWithMatchingImages;
    }

    /**
     * @param mixed $pagesWithMatchingImages
     */
    public function addPagesWithMatchingImage(MatchingImage $pagesWithMatchingImages)
    {
        $this->pagesWithMatchingImages[] = $pagesWithMatchingImages;
    }

    /**
     * @return mixed
     */
    public function getVisuallySimilarImages()
    {
        return $this->visuallySimilarImages;
    }

    /**
     * @param mixed $visuallySimilarImages
     */
    public function setVisuallySimilarImages($visuallySimilarImages)
    {
        $this->visuallySimilarImages = $visuallySimilarImages;
    }
    /**
     * @param mixed $visuallySimilarImages
     */
    public function addVisuallySimilarImage(MatchingImage $visuallySimilarImages)
    {
        $this->visuallySimilarImages[] = $visuallySimilarImages;
    }


}