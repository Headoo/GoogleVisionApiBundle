GoogleVisionApiBundle
=========

[![Build Status](https://travis-ci.org/Headoo/GoogleVisionApiBundle.svg?branch=master)](https://travis-ci.org/Headoo/GoogleVisionApiBundle)
[![Code Climate](https://codeclimate.com/repos/586d36a2b6458d0057000b09/badges/716b4518f3c6428d72e2/gpa.svg)](https://codeclimate.com/repos/586d36a2b6458d0057000b09/feed)
[![Code Coverage](https://codeclimate.com/repos/586d36a2b6458d0057000b09/badges/716b4518f3c6428d72e2/coverage.svg)](https://codeclimate.com/repos/586d36a2b6458d0057000b09/coverage)
[![Latest Stable Version](https://poser.pugx.org/headoo/google-vision-api-bundle/v/stable)](https://packagist.org/packages/headoo/google-vision-api-bundle)

GoogleVisionApiBundle is a Symfony2/3 Bundle for use the API Google Vision simply (https://cloud.google.com/vision/)

## Installation

Via Composer

``` bash
$ composer require headoo/google-vision-api-bundle
```
or in composer.json file
``` bash
"headoo/google-vision-api-bundle": "dev-master"
```

Register the bundle in `app/AppKernel.php`:

``` php
public function registerBundles()
{
    return array(
        // ...
        new Headoo\GoogleVisionApiBundle\HeadooGoogleVisionApiBundle(),
        // ...
    );
}
```

Configuration
-------------

Configure the google api key in your `config.yml` :

``` yaml
headoo_google_vision_api:
    api_key: '%apikey%'
```

## Usage

It works like a service. On a Controller you can call like this:

```php
	$google_vision = $this->container->get('headoo_google_vision_api.helper');
```

You can use all detections functionality with 1 endpoint:
 ```php
 	$google_vision->vision($image, $type);
 ```
 
 Your $image must be base64 encoded, or via an URL , or an absolute path.
 
 Available $type are : 
  - TYPE_UNSPECIFIED
  - FACE_DETECTION
  - LANDMARK_DETECTION
  - LOGO_DETECTION
  - LABEL_DETECTION
  - TEXT_DETECTION
  - SAFE_SEARCH_DETECTION
  - IMAGE_PROPERTIES 

## Return
You will receive an array with http_code, raw_response and a parsed_response.

  - http_code : Google Http Code Response (often 200 for OK, and 400 for error)
  - raw_response : Google Vision Api Response Raw, without manipulation
  - parsed_response : Parsed response with objects, easier to use for a PHP user.

##Security
If you discover a security vulnerability , please email instead of using the issue tracker. All security vulnerabilities will be promptly addressed.

##License
This Bundle is open-sourced software licensed under the MIT license