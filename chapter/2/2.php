<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 2-2 姓だけを表示する
 */

$fullName = 'takano yusuke';

[$lastName,] = explode(' ', $fullName);

print_r("lastName：" . $lastName . "\n"); // takanoが表示される