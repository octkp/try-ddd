<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 2-3 うまく姓を表示できないパターン
 */

$fullName = 'john smith';

[$lastName,] = explode(' ', $fullName);

print_r("lastName：" . $lastName . "\n"); // smithが正しいのにjohnが表示される