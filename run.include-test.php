<?php
$mem = 0;
$min_mem = 0;
$global_index = 0;
$filename = "/tmp/aaa";

echo sprintf('%3s %9s %7s %s', '#', 'Test name', 'Memory', "Additional overhead").PHP_EOL;
for($index = 0; $index < 80; $index++)
{
  $global_index++;
  $testfile = $filename++;
  touch($testfile);

  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem;
  if(!$index)
    $min_mem = $mem;

  unlink($testfile);

  echo sprintf('%3d %-9s %7d %s', $global_index, $testfile, $mem, $mem != $min_mem ? "Y" : "").PHP_EOL;
}
