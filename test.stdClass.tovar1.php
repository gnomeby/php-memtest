<?php
$mem = memory_get_usage();

$a = new stdClass;

$mem = memory_get_usage() - $mem;
