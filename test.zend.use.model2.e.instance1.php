<?php
$mem2 = memory_get_usage();

$e = new Model2;

$mem2 = memory_get_usage() - $mem2;