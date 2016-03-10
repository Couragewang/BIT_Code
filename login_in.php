<!DOCTYPE html>
<html>
<head>
</head>
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
if($name == $info["name"] && $passwd == $info["passwd"]){
    echo "success\n";
}else{
    echo "login failed\n";
}
?>
<body>
<h1>login</h1>
</body>
</html>
