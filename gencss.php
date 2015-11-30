<?php

$list = scandir('src/assets/png/xs');

foreach (['xs', 'sm', 'md', 'lg'] as $size) {
    foreach ($list as $file) {
        if ($file[0] == '.') {
            continue;
        }
        $name = pathinfo($file)['filename'];
        print ".payment-icon-$size.$name {
    background: url('../png/$size/$name.png') no-repeat right;
}\n";
    }
    print "\n";
}


