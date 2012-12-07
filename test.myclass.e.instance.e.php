<?php
$mem2 = memory_get_usage();

$e = new E;

$mem2 = memory_get_usage() - $mem2;