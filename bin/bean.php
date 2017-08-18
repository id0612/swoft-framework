<?php
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

require_once __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/../app/config/define.php';
require_once __DIR__. '/../app/config/model.php';

$config = require dirname(__DIR__). '/app/config/base.php';

$beanFactory = new \swoft\di\BeanFactory2($config);