<?php
/**
 * 50+ icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\paymenticons\tests\unit\yii2;

use hiqdev\paymenticons\yii2\PaymentIconsAsset;

/**
 * PaymentIconsAsset.
 */
class PaymentIconsAssetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PaymentIconsAsset
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PaymentIconsAsset();
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->object->init();
    }
}
