<?php
echo '<pre>';

$dir = dirname(__FIlE__);
$files = glob('test*.php');

$include_overhead = 0;
$include_index = 0;
$mem = $mem2 = 0;

// Test include overhead
$include_index++;
include 'include.smalltest.php';

foreach($files as $testfile)
{  
  if(strpos($testfile, 'myclass') !== FALSE || strpos($testfile, 'zend') !== FALSE)
    continue;
  $include_index++;

  include $testfile;
  
  echo sprintf('%2d %-40s %7d', $include_index, preg_replace('/test\.(.*)\.php/', '$1', $testfile), $mem).PHP_EOL;
}


$files = glob('test.myclass*.php');
$files = array_merge($files, glob('test.zend*.php'));
$char = 'aa';
$simple_testfilename = '';
$bits = '';
foreach($files as $testfile)
{
  $bits = sprintf('%b', $include_index+1);
  if(substr_count($bits , '1') == 1)
  {
    $simple_testfilename = '/tmp/_'.$char++;
    touch($simple_testfilename);
    include $simple_testfilename;
    unlink($simple_testfilename);
    $include_index++;
  }

  $include_index++;

  $mem = memory_get_usage();
  include $testfile;
  $mem = memory_get_usage() - $mem - $include_overhead;

  if(strpos($testfile, 'instance') !== FALSE)
    $mem = $mem2;

  echo sprintf('%2d %-40s %7d', $include_index, preg_replace('/test\.(.*)\.php/', '$1', $testfile), $mem).PHP_EOL;
}
