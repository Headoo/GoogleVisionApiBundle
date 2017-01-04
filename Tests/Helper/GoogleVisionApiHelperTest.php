<?php

namespace Headoo\GoogleVisionApiHelper\Tests\Helper;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GoogleVisionApiHelperTest extends KernelTestCase
{
    /**
     * @var \Headoo\GoogleVisionApiBundle\Helper\GoogleVisionApiHelper
     */
    private $_googleVisionApiHelper;

    private $_image_face;
    private $_image_faces;
    private $_image_landmark;
    private $_image_logo;
    private $_image_text;


    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        self::bootKernel();
        $this->_googleVisionApiHelper   = static::$kernel->getContainer()->get('headoo_google_vision_api.helper');
        $this->_image_face              = static::$kernel->locateResource('@HeadooGoogleVisionApiBundle/Resources/public/images/face.jpg');
        $this->_image_faces             = static::$kernel->locateResource('@HeadooGoogleVisionApiBundle/Resources/public/images/faces.jpg');
        $this->_image_landmark          = static::$kernel->locateResource('@HeadooGoogleVisionApiBundle/Resources/public/images/landmark.jpg');
        $this->_image_logo              = static::$kernel->locateResource('@HeadooGoogleVisionApiBundle/Resources/public/images/logo.png');
        $this->_image_text              = static::$kernel->locateResource('@HeadooGoogleVisionApiBundle/Resources/public/images/text.png');
    }

    public function testTypeUnspecified()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_face ,'TYPE_UNSPECIFIED')['http_code']);
    }

    public function testFaceDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_face ,'FACE_DETECTION')['http_code']);
    }

    public function testFacesDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_faces ,'FACE_DETECTION')['http_code']);
    }

    public function testLandmarkDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_landmark ,'LANDMARK_DETECTION')['http_code']);
    }

    public function testLogoDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_logo ,'LOGO_DETECTION')['http_code']);
    }

    public function testLabelDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_face,'LABEL_DETECTION')['http_code']);
    }

    public function testTextDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_text,'TEXT_DETECTION')['http_code']);
    }

    public function testSafeSearchDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_face,'SAFE_SEARCH_DETECTION')['http_code']);
    }

    public function testImagePropertiesDetection()
    {
        $this->assertEquals(200 , $this->_googleVisionApiHelper->vision($this->_image_face,'IMAGE_PROPERTIES')['http_code']);
    }
}
