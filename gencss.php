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

foreach (['xs', 'sm', 'md', 'lg'] as $size) {
    foreach ($list as $file) {
        if ($file[0] === '.') {
            continue;
        }
        $name = pathinfo($file)['filename'];
        print ".payment-icon-$size.$name {
    background: url('../png/$size/$name.png') no-repeat right;
}\n";
    }
    print "\n";
}
