<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Shtumi', __DIR__.'/../vendor/bundles');
$loader->add('WhiteOctober', __DIR__.'/../vendor/bundles');
$loader->add('liuggio', __DIR__.'/../vendor/bundles');


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
