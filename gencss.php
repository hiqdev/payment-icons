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
$hw = [
    'xs' => "height: 38px; width: 60px;",
    'sm' => "height: 75px; width: 120px;",
    'md' => "height: 240px; width: 150px;",
    'lg' => "height: 480px; width: 300px;",
];
print ".pi { display: inline-block;height: 38px;width: 60px; }" . PHP_EOL;

foreach (array_keys($hw) as $size) {
    print ".pi.pi-$size { $hw[$size] }" . PHP_EOL;
}

foreach (array_keys($hw) as $size) {
    foreach ($list as $file) {
        if ($file[0] === '.') {
            continue;
        }
        $name = pathinfo($file)['filename'];
        if ($size === 'xs') {
            print ".pi.pi-$size.pi-$name, .pi.pi-$name { background: url('../png/$size/$name.png') no-repeat right; }" . PHP_EOL;
        } else {
            print ".pi.pi-$size.pi-$name { background: url('../png/$size/$name.png') no-repeat right; }" . PHP_EOL;
        }
    }
    print PHP_EOL;
}
