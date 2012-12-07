<?php
$mem2 = memory_get_usage();

$f = new Model1;

$mem2 = memory_get_usage() - $mem2;
