<?php
$mem2 = memory_get_usage();

$e = new Model1;

$mem2 = memory_get_usage() - $mem2;
