<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 2-4 氏名を表現するFullNameクラス
 */

use TakanoY\TryDdd\Chapter2\FullName;

$fullName1 = new FullName('yusuke', 'takano');

print_r($fullName1->getFullNameInJapan() . "\n"); // takano yusuke

$fullName2 = new FullName('john', 'smith');

print_r($fullName2->getFullNameInGlobal() . "\n"); // john smith