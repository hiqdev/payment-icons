<?php
/**
 * 50+ icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
Yii::setAlias('@vendor', dirname(__DIR__) . '/vendor');
Yii::setAlias('@hiqdev/yii2/paymenticons', dirname(__DIR__));
Yii::setAlias('@hiqdev/yii2/paymenticons/tests', __DIR__);

/*
 * Ensures compatibility with PHPUnit 6.x
 */
if (!class_exists('PHPUnit_Framework_Constraint') && class_exists('PHPUnit\Framework\Constraint\Constraint')) {
    abstract class PHPUnit_Framework_Constraint extends \PHPUnit\Framework\Constraint\Constraint
    {
    }
}
if (!class_exists('PHPUnit_Framework_TestCase') && class_exists('PHPUnit\Framework\TestCase')) {
    abstract class PHPUnit_Framework_TestCase extends \PHPUnit\Framework\TestCase
    {
    }
}
