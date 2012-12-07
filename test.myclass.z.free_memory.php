<?php
$mem2 = memory_get_usage();

unset($e, $f);

$mem2 = memory_get_usage() - $mem2;