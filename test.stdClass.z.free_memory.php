<?php
$mem = memory_get_usage();

unset($b, $c);

$mem = memory_get_usage() - $mem;