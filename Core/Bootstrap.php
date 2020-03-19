<?php
/**
 * Created By PhpStorm
 * User: dbhuang
 * Date: 2020/3/19
 * Timer:18:04
 */
namespace Core;
class Bootstrap
{
    public static function run($argv){
        try {
            switch ($argv[1]){
                case 'start':
                    echo 'start';exit();
                    break;
                case 'ws:start':
                    echo 'ws:start';exit();
                    break;
            }
        }catch (\Exception $e){
            echo $e->getMessage();exit();
        }
    }
}