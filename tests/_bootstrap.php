<?php

/*
 * 50+ icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
Yii::setAlias('@vendor', dirname(__DIR__) . '/vendor');
Yii::setAlias('@hiqdev/yii2/paymenticons', dirname(__DIR__));
Yii::setAlias('@hiqdev/yii2/paymenticons/tests', __DIR__);
