<?php
$mem2 = memory_get_usage();

$f = new Model2;

$mem2 = memory_get_usage() - $mem2;