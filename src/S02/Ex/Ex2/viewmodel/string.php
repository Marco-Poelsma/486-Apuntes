<?php

require_once "../model/text.php";
global $text;

$substrings = str_split($text);

$substring = array_slice($substrings, 34);

// https://www.php.net/manual/en/function.implode.php
$substring = implode($substring);
