<?php

namespace Headoo\GoogleVisionApiBundle\Annotations;


use Headoo\GoogleVisionApiBundle\Model\Landmark;
use Headoo\GoogleVisionApiBundle\Poly\BoundingPoly;
use Headoo\GoogleVisionApiBundle\Poly\FdBoundingPoly;

class FaceAnnotation
{

    private $joyLikelihood;
    private $sorrowLikelihood;
    private $angerLikelihood;
    private $surpriseLikelihood;
    private $underExposedLikelihood;
    private $blurredLikelihood;
    private $headwearLikelihood;


    private $detectionConfidence;
    private $landmarkingConfidence;
    private $tiltAngle;
    private $panAngle;
    private $rollAngle;

    private $boundingPoly;
    private $fdBoundingPoly;
    private $landmarks = [];



    /**
     * @return mixed
     */
    public function getJoyLikelihood()
    {
        return $this->joyLikelihood;
    }

    /**
     * @param mixed $joyLikelihood
     */
    public function setJoyLikelihood($joyLikelihood)
    {
        $this->joyLikelihood = $joyLikelihood;
    }

    /**
     * @return mixed
     */
    public function getSorrowLikelihood()
    {
        return $this->sorrowLikelihood;
    }

    /**
     * @param mixed $sorrowLikelihood
     */
    public function setSorrowLikelihood($sorrowLikelihood)
    {
        $this->sorrowLikelihood = $sorrowLikelihood;
    }

    /**
     * @return mixed
     */
    public function getAngerLikelihood()
    {
        return $this->angerLikelihood;
    }

    /**
     * @param mixed $angerLikelihood
     */
    public function setAngerLikelihood($angerLikelihood)
    {
        $this->angerLikelihood = $angerLikelihood;
    }

    /**
     * @return mixed
     */
    public function getSurpriseLikelihood()
    {
        return $this->surpriseLikelihood;
    }

    /**
     * @param mixed $surpriseLikelihood
     */
    public function setSurpriseLikelihood($surpriseLikelihood)
    {
        $this->surpriseLikelihood = $surpriseLikelihood;
    }

    /**
     * @return mixed
     */
    public function getUnderExposedLikelihood()
    {
        return $this->underExposedLikelihood;
    }

    /**
     * @param mixed $underExposedLikelihood
     */
    public function setUnderExposedLikelihood($underExposedLikelihood)
    {
        $this->underExposedLikelihood = $underExposedLikelihood;
    }

    /**
     * @return mixed
     */
    public function getBlurredLikelihood()
    {
        return $this->blurredLikelihood;
    }

    /**
     * @param mixed $blurredLikelihood
     */
    public function setBlurredLikelihood($blurredLikelihood)
    {
        $this->blurredLikelihood = $blurredLikelihood;
    }

    /**
     * @return mixed
     */
    public function getHeadwearLikelihood()
    {
        return $this->headwearLikelihood;
    }

    /**
     * @param mixed $headwearLikelihood
     */
    public function setHeadwearLikelihood($headwearLikelihood)
    {
        $this->headwearLikelihood = $headwearLikelihood;
    }

    /**
     * @return mixed
     */
    public function getDetectionConfidence()
    {
        return $this->detectionConfidence;
    }

    /**
     * @param mixed $detectionConfidence
     */
    public function setDetectionConfidence($detectionConfidence)
    {
        $this->detectionConfidence = $detectionConfidence;
    }

    /**
     * @return mixed
     */
    public function getLandmarkingConfidence()
    {
        return $this->landmarkingConfidence;
    }

    /**
     * @param mixed $landmarkingConfidence
     */
    public function setLandmarkingConfidence($landmarkingConfidence)
    {
        $this->landmarkingConfidence = $landmarkingConfidence;
    }

    /**
     * @return mixed
     */
    public function getTiltAngle()
    {
        return $this->tiltAngle;
    }

    /**
     * @param mixed $tiltAngle
     */
    public function setTiltAngle($tiltAngle)
    {
        $this->tiltAngle = $tiltAngle;
    }

    /**
     * @return mixed
     */
    public function getPanAngle()
    {
        return $this->panAngle;
    }

    /**
     * @param mixed $panAngle
     */
    public function setPanAngle($panAngle)
    {
        $this->panAngle = $panAngle;
    }

    /**
     * @return mixed
     */
    public function getRollAngle()
    {
        return $this->rollAngle;
    }

    /**
     * @param mixed $rollAngle
     */
    public function setRollAngle($rollAngle)
    {
        $this->rollAngle = $rollAngle;
    }


    /**
     * @return mixed
     */
    public function getBoundingPoly()
    {
        return $this->boundingPoly;
    }

    /**
     * @param mixed $boundingPoly
     */
    public function setBoundingPoly(BoundingPoly $boundingPoly)
    {
        $this->boundingPoly = $boundingPoly;
    }

    /**
     * @return mixed
     */
    public function getFdBoundingPoly()
    {
        return $this->fdBoundingPoly;
    }

    /**
     * @param mixed $fdBoundingPoly
     */
    public function setFdBoundingPoly(FdBoundingPoly $fdBoundingPoly)
    {
        $this->fdBoundingPoly = $fdBoundingPoly;
    }

    /**
     * @return mixed
     */
    public function getLandmarks()
    {
        return $this->landmarks;
    }

    /**
     * @param mixed $landmarks
     */
    public function setLandmarks($landmarks)
    {
        $this->landmarks = $landmarks;
    }

    /**
     * @param mixed $landmark
     */
    public function addLandmark(Landmark $landmark)
    {
        $this->landmarks[] = $landmark;
    }

}
