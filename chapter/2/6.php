<?php

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 2-6 確実に姓を取得できる
 */

use TakanoY\TryDdd\Chapter2\FullName;

$fullName = new FullName('john', 'smith');

print_r($fullName->getLastName() . "\n"); // smithが表示される