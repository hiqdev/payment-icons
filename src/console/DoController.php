<?php

/*
 * 50+ icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\paymenticons\console;

use hidev\helpers\FileHelper;
use Yii;

class DoController extends \yii\console\Controller
{
    /**
     * Returns list of icons.
     * @return array
     */
    public function getIconsList()
    {
        $dir = Yii::getAlias('@hiqdev/paymenticons/assets/png/xs');
        $files = scandir($dir);
        $list = [];
        foreach ($files as $file) {
            if ($file[0] === '.') {
                continue;
            }
            $name = pathinfo($file)['filename'];
            $list[$name] = $name;
        }

        return $list;
    }

    /**
     * Generates CSS file.
     * @return string
     */
    public function genCss()
    {
        $sizes = [
            'xs' => 'height: 38px; width: 60px;',
            'sm' => 'height: 75px; width: 120px;',
            'md' => 'height: 240px; width: 150px;',
            'lg' => 'height: 480px; width: 300px;',
        ];

        $res = '.pi { display: inline-block;height: 38px;width: 60px; }' . PHP_EOL;

        foreach (array_keys($sizes) as $size) {
            $res .= ".pi.pi-$size { $sizes[$size] }" . PHP_EOL;
        }

        foreach (array_keys($sizes) as $size) {
            foreach ($this->getIconsList() as $name) {
                if ($size === 'xs') {
                    $res .= ".pi.pi-$size.pi-$name, .pi.pi-$name { background: url('../png/$size/$name.png') no-repeat right; }" . PHP_EOL;
                } else {
                    $res .= ".pi.pi-$size.pi-$name { background: url('../png/$size/$name.png') no-repeat right; }" . PHP_EOL;
                }
            }
            $res .= PHP_EOL;
        }

        return $res;
    }

    public function actionGenCss()
    {
        echo $this->genCss();
    }

    public function actionWriteCss()
    {
        FileHelper::write('@hiqdev/paymenticons/assets/css/payment-icons.css', $this->genCss());
    }

    public function actionWritePreviews()
    {
        $sizes = ['xs', 'sm', 'md', 'lg'];

        foreach ($sizes as $size) {
            $str = '';
            foreach ($this->getIconsList() as $name) {
                $str .= "![$name](https://raw.githubusercontent.com/hiqdev/payment-icons/master/src/assets/png/$size/$name.png)\n";
            }
            FileHelper::write('@hiqdev/paymenticons/../docs/Preview' . strtoupper($size) . '.md', $str);
            if ($size === 'xs') {
                $ps = [];
                foreach ($sizes as $s) {
                    $us = strtoupper($s);
                    $ps[] = "[$us](docs/Preview$us.md)";
                }
                $str .= "\n" . implode(' | ', $ps);
                FileHelper::write('@hiqdev/paymenticons/../docs/readme/Preview.md', $str);
            }
        }
    }
}
