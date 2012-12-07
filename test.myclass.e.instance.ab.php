<?php
$mem2 = memory_get_usage();

$e = new AB;

$mem2 = memory_get_usage() - $mem2;