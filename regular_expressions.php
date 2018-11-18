<?php
/**
 * Разделить текст на слова
 */

$str = 'Привет!Это хорошая вещь,или это плохая, а может.';

$arr = preg_split('/\\b\\W+/u', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($arr);
