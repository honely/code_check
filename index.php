<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25
 * Time: 9:46
 */
date_default_timezone_set( 'asia/shanghai' );
$h=date('H');
function getGreetings($h){
    switch ($h){
        case $h >0 && $h<12:
            return 'Good Morning!';
            break;
        case $h >= 12 && $h <18:
            return 'Good Afternoon!';
            break;
        case $h >=18:
            return 'Good Evening!';
            break;
        default:
            return "error!";
    }
}
echo getGreetings($h);