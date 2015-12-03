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

foreach ($list as $file) {
    if ($file[0] === '.') {
        continue;
    }
    $name = pathinfo($file)['filename'];

    echo "![$name](https://raw.githubusercontent.com/hiqdev/payment-icons/master/src/assets/png/xs/$name.png)\n";
}
