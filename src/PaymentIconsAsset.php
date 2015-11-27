<?php

/*
 * Yii2 asset for HiPanel logo and so on
 *
 * @link      https://github.com/hiqdev/yii2-asset-hipanel
 * @package   yii2-asset-hipanel
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\assets\paymenticons;

class PaymentIconsAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/yii2/assets/paymenticons/assets';

    public $css = [
        'css/payment-icons.css',
    ];
}
