<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<?php
    //$data=name,pwd,...,bit_class
    function insert_data( $data ){
        $con = mysql_connect("localhost","root","");
        if(!$con){
            die('mysql connect error: '.mysql_error());
        }
        //normal code
        mysql_select_db("bit", $con);
        $sql="INSERT INTO student_base_info (name, pwd, phone, email, school, grade, major, bit_class) VALUES "."(".$data.")";
        if (!mysql_query($sql,$con))
        {
            die('insert error: '.mysql_error());
        }
        mysql_close($con);
    }
?>
</body>
</html>
