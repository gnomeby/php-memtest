<?php
ini_set('apc.enable_cli', 0);
ini_set('apc.cache_by_default', 0);

$mem = 0;
$global_index = 0;

for($index = 0; $index < ord('z') - ord('a') + 1; $index++)
{
  $global_index++;
  $testfile = '/tmp/a_'.chr(ord('a')+$index);
  touch($testfile);

  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem;

  unlink($testfile);

  echo sprintf('%3d %-9s %7d', $global_index, $testfile, $mem).PHP_EOL;
}

for($index = 0; $index < ord('Z') - ord('A') + 1; $index++)
{
  $global_index++;
  $testfile = '/tmp/a_'.chr(ord('A')+$index);
  touch($testfile);

  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem;

  unlink($testfile);

  echo sprintf('%3d %-9s %7d', $global_index, $testfile, $mem).PHP_EOL;
}

for($index = 0; $index < ord('z') - ord('a') + 1; $index++)
{
  $global_index++;
  $testfile = '/tmp/ab_'.chr(ord('a')+$index);
  touch($testfile);

  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem;

  unlink($testfile);

  echo sprintf('%3d %-9s %7d', $global_index, $testfile, $mem).PHP_EOL;
}
