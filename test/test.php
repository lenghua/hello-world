<?php
/**
 * Created by PhpStorm.
 * User: lenghua
 * Date: 2018/9/7
 * Time: 下午2:39
 */
require_once  realpath(dirname(__FILE__).'/../').'/vendor/autoload.php';
try{
   echo \AB\Hello\SayHello::world();
}catch (\Throwable $e) {
    echo $e->getMessage();
}
