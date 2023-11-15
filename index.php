<?php
[, $chapterNum, $listNum] = $argv;

exec('php chapter/' . $chapterNum . '/' . $listNum . '.php', $output);

print_r($output);