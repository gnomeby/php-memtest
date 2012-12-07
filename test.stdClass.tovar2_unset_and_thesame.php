<?php
$mem = memory_get_usage();

unset($a);
$a = new stdClass;

$mem = memory_get_usage() - $mem;