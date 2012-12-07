<?php
$mem = memory_get_usage();

new stdClass;

$mem = memory_get_usage() - $mem;