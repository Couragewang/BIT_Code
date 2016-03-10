<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 16/3/10
 * Time: 下午2:29
 */

require_once("mysql_db_api.php");
$name = $_POST["name"];
$passwd = $_POST["passwd"];
$info = get_name_passwd();
if($name == $info["name"] && $passwd["passwd"]){
    echo "success\n";
}else{
    echo "login failed\n";
}