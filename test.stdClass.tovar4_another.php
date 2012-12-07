<?php
$mem = memory_get_usage();

$c = new stdClass;

$mem = memory_get_usage() - $mem;