<?php
/**
 * 50+ icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\paymenticons\yii2;

class PaymentIconsAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/hiqdev/payment-icons/src/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/payment-icons.css',
    ];
}
