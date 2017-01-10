<?php

namespace Headoo\GoogleVisionApiBundle\Handler;

use Headoo\GoogleVisionApiBundle\Annotations\FaceAnnotation;
use Headoo\GoogleVisionApiBundle\Annotations\LabelAnnotation;
use Headoo\GoogleVisionApiBundle\Annotations\LandmarkAnnotation;
use Headoo\GoogleVisionApiBundle\Annotations\LogoAnnotation;
use Headoo\GoogleVisionApiBundle\Annotations\SafeSearchAnnotation;
use Headoo\GoogleVisionApiBundle\Annotations\TextAnnotation;
use Headoo\GoogleVisionApiBundle\Model\Landmark;
use Headoo\GoogleVisionApiBundle\Poly\BoundingPoly;
use Headoo\GoogleVisionApiBundle\Model\Color;
use Headoo\GoogleVisionApiBundle\Model\Vertice;
use Headoo\GoogleVisionApiBundle\Poly\FdBoundingPoly;
use Headoo\GoogleVisionApiBundle\Properties\ImageProperties;

class GoogleVisionApiHandler
{
    /**
     * @param $obj
     * @return FaceAnnotation
     */
    public static function objectifyFaceAnnotation($obj){

        $oFaceAnnotation = new FaceAnnotation();
        $oFaceAnnotation->setJoyLikelihood($obj->joyLikelihood);
        $oFaceAnnotation->setSorrowLikelihood($obj->sorrowLikelihood);
        $oFaceAnnotation->setAngerLikelihood($obj->angerLikelihood);
        $oFaceAnnotation->setSurpriseLikelihood($obj->surpriseLikelihood);
        $oFaceAnnotation->setUnderExposedLikelihood($obj->underExposedLikelihood);
        $oFaceAnnotation->setBlurredLikelihood($obj->blurredLikelihood);
        $oFaceAnnotation->setHeadwearLikelihood($obj->headwearLikelihood);

        $oFaceAnnotation->setDetectionConfidence($obj->detectionConfidence);
        $oFaceAnnotation->setLandmarkingConfidence($obj->landmarkingConfidence);
        $oFaceAnnotation->setTiltAngle($obj->tiltAngle);
        $oFaceAnnotation->setPanAngle($obj->panAngle);
        $oFaceAnnotation->setRollAngle($obj->rollAngle);

        if(isset($obj->boundingPoly) && isset($obj->boundingPoly->vertices)){
            $boundingPoly = new BoundingPoly();
            foreach($obj->boundingPoly->vertices as $vertice){
                $boundingPoly = self::_addVertice($boundingPoly, $vertice);
            }
            $oFaceAnnotation->setBoundingPoly($boundingPoly);
        }

        if(isset($obj->fdBoundingPoly) && isset($obj->fdBoundingPoly->vertices)){
            $fdBoundingPoly = new FdBoundingPoly();
            foreach($obj->fdBoundingPoly->vertices as $vertice){
                $fdBoundingPoly = self::_addVertice($fdBoundingPoly, $vertice);
            }
            $oFaceAnnotation->setFdBoundingPoly($fdBoundingPoly);
        }

        if(isset($obj->landmarks)){
            foreach($obj->landmarks as $landmark){
                $_landmark = new Landmark();
                $_landmark->setType($landmark->type);
                $_landmark->setPositionX($landmark->position->x);
                $_landmark->setPositionY($landmark->position->y);
                $_landmark->setPositionZ($landmark->position->z);
                $oFaceAnnotation->addLandmark($_landmark);
            }
            $oFaceAnnotation->setFdBoundingPoly($fdBoundingPoly);
        }
        return $oFaceAnnotation;
    }

    /**
     * @param $obj
     * @param $vertice
     * @return mixed
     */
    private static function _addVertice($obj, $vertice){
        $_vertice = new Vertice();

        if(isset($vertice->x)){
            $_vertice->setX($vertice->x);
        }

        if(isset($vertice->y)){
            $_vertice->setY($vertice->y);
        }

        $obj->addVertices($_vertice);

        return $obj;
    }

    /**
     * @param $obj
     * @return LandmarkAnnotation
     */
    public static function objectifyLandmarkAnnotation($obj){

        $oLandmarkAnnotation = new LandmarkAnnotation();
        $oLandmarkAnnotation->setMid($obj->mid);
        $oLandmarkAnnotation->setDescription($obj->description);
        $oLandmarkAnnotation->setScore($obj->score);
        $oLandmarkAnnotation->setLocations($obj->locations);

        return $oLandmarkAnnotation;
    }

    /**
     * @param $obj
     * @return LogoAnnotation
     */
    public static function objectifyLogoAnnotation($obj){

        $oLogoAnnotation = new LogoAnnotation();
        $oLogoAnnotation->setMid($obj->mid);
        $oLogoAnnotation->setDescription($obj->description);
        $oLogoAnnotation->setScore($obj->score);

        return $oLogoAnnotation;
    }

    /**
     * @param $obj
     * @return LabelAnnotation
     */
    public static function objectifyLabelAnnotation($obj){

        $oLogoAnnotation = new LabelAnnotation();
        $oLogoAnnotation->setMid($obj->mid);
        $oLogoAnnotation->setDescription($obj->description);
        $oLogoAnnotation->setScore($obj->score);

        return $oLogoAnnotation;
    }

    /**
     * @param $obj
     * @return TextAnnotation
     */
    public static function objectifyTextAnnotation($obj){

        $oTextAnnotation = new TextAnnotation();
        $oTextAnnotation->setDescription($obj->description);
        if(isset($obj->locale)){
            $oTextAnnotation->setLocale($obj->locale);
        }

        return $oTextAnnotation;
    }

    /**
     * @param $obj
     * @return SafeSearchAnnotation
     */
    public static function objectifySafeSearchAnnotation($obj){

        $oSafeSearchAnnotation = new SafeSearchAnnotation();
        $oSafeSearchAnnotation->setAdult($obj->adult);
        $oSafeSearchAnnotation->setSpoof($obj->spoof);
        $oSafeSearchAnnotation->setMedical($obj->medical);
        $oSafeSearchAnnotation->setViolence($obj->violence);

        return $oSafeSearchAnnotation;
    }

    /**
     * @param $obj
     * @return ImageProperties
     */
    public static function objectifyImagePropertiesAnnotation($obj){
        $oImagePropertiesAnnotation = new ImageProperties();
        foreach ($obj->dominantColors->colors as $color){
            $_color = new Color();
            $_color->setScore($color->score);
            $_color->setPixelFraction($color->pixelFraction);
            isset($color->color->red) ? $_color->setRed($color->color->red) : null;
            isset($color->color->green) ? $_color->setGreen($color->color->green) : null;
            isset($color->color->blue) ? $_color->setBlue($color->color->blue) : null;

            $oImagePropertiesAnnotation->addDominantColors($_color);
        }

        return $oImagePropertiesAnnotation;
    }
}


