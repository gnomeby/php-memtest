<?php
$mem = memory_get_usage();

unset($a);

$mem = memory_get_usage() - $mem;