GoogleVisionApiBundle
=========

[![Build Status](https://travis-ci.org/Headoo/GoogleVisionApiBundle.svg?branch=master)](https://travis-ci.org/Headoo/GoogleVisionApiBundle)

GoogleVisionApiBundle is a Symfony Bundle for use the API Google Vision simply (https://cloud.google.com/vision/)

## Install

`composer require Headoo/google-vision-api-bundle`

## Usage

It works like a service

```php
	$google_vision = $this->container->get('headoo_google_vision_api.helper');
```

You can use all detections functionality with 1 endpoint like this
 ```php
 	$google_vision->vision($image, $type);
 ```
 
 Your image must be base64 encoded, or via an URL , or an absolute path.
 
 Available types are : 
  - TYPE_UNSPECIFIED
  - FACE_DETECTION
  - LANDMARK_DETECTION
  - LOGO_DETECTION
  - LABEL_DETECTION
  - TEXT_DETECTION
  - SAFE_SEARCH_DETECTION
  - IMAGE_PROPERTIES 
