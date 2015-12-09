#!/usr/bin/env php
<?php

/*
 * Set of icons for payment systems and methods
 *
 * @link      https://github.com/hiqdev/payment-icons
 * @package   payment-icons
 * @license   MIT
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

$list = scandir('src/assets/png/xs');
$sizes = ['xs', 'sm', 'md', 'lg'];

foreach ($sizes as $size) {
    $str = '';
    foreach ($list as $file) {
        if ($file[0] === '.') {
            continue;
        }
        $name = pathinfo($file)['filename'];

        $str .= "![$name](https://raw.githubusercontent.com/hiqdev/payment-icons/master/src/assets/png/$size/$name.png)\n";
    }
    file_put_contents('./docs/Preview' . strtoupper($size) . '.md', $str);
    if ($size === 'xs') {
        $str .= "\n";
        foreach ($sizes as $s) {
            if ($s != 'xs') {
                $us = strtoupper($s);
                $str .= "[Preview $us](docs/Preview$us.md) ";
            }
        }
        file_put_contents('./docs/readme/Preview.md', $str);
    }
}
