<?php
$mem = memory_get_usage();

unset($a);
$b = new stdClass;

$mem = memory_get_usage() - $mem;