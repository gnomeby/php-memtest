<?php

$mem = 0;
$memusage_stat = array();

for($index = 0; $index < ord('z') - ord('a') + 1; $index++)
{
  $testfile = '/tmp/a_'.chr(ord('a')+$index);
  touch($testfile);

  $include_index++;
  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem;

  unlink($testfile);

  $memusage_stat[] = $mem;
}
sort($memusage_stat);
$include_overhead = array_shift($memusage_stat);