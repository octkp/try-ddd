<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 2-5 FullNameクラスのLastNameプロパティを利用する
 */

use TakanoY\TryDdd\Chapter2\FullName;

$fullName = new FullName('yusuke', 'takano');

print_r($fullName->getLastName() . "\n"); // takanoが表示される