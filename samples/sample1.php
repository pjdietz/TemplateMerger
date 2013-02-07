<?php

use pjdietz\TemplateMerger\TemplateMerger;

require_once('../vendor/autoload.php');

$merger = new TemplateMerger();

$template = "Hello, my name is {NAME}.\n";
$merger->fields['{NAME}'] = 'Bob';

print $merger->merge($template);
