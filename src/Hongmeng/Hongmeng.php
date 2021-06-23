<?php
namespace Hongmeng;
class Hongmeng {
  public static $scripts=[];
  public static $styles=[];
  public static function addScript($function){
    self::$scripts[]=$function;
  }
  public static function addStyle($function){
    self::$styles[]=$function;
  }
  public static function showScripts(){
    foreach (self::$scripts as $key => $value) {
      $value();
    }
  }
  public static function showStyles(){
    foreach (self::$styles as $key => $value) {
      $value();
    }
  }
  public static function getStr($str){
    list($usec, $sec) = explode(" ", microtime()); 
    $microtimestr=$sec.substr($usec,2);
    return $str.$microtimestr;
  }
}