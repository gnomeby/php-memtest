<?php
$dir = dirname(__FIlE__);
$files = glob('test*.php');

$include_overhead = 0;
$include_index = 0;
$mem = 0;

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

// Init ZF autoload
require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();

$files = glob('test.myclass*.php');
$files = array_merge($files, glob('test.zend*.php'));
$char = 'a';
$simple_testfilename = '';
foreach($files as $testfile)
{
  $simple_testfilename = '/tmp/b_'.$char;
  copy($testfile, $simple_testfilename);  
  $char++;

  $include_index++;

  $mem = memory_get_usage();
  include $simple_testfilename;
  $mem = memory_get_usage() - $mem - $include_overhead;

  unlink($simple_testfilename);
  
  echo sprintf('%2d %-40s %7d', $include_index, preg_replace('/test\.(.*)\.php/', '$1', $testfile), $mem).PHP_EOL;
}
