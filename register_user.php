<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<?php
	//phpinfo();
    require_once("mysql_db_api.php");
    if( isset($_POST['submit']) && $_POST['submit']=='注册'){
        $name = $_POST['name'];
        $pwd = $_POST['passwd'];
        $cpwd = $_POST['cpasswd'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $grade=$_POST['grade'];
        $major = $_POST['major'];
        $bit_class=$_POST['bit_class'];

		//debug
	//	$name = "perter";
	//	$pwd="123456";
	//	$cpwd="123456";
	//	$phone="123456789";
    //    $email="qq";
    //    $school="qinghua";
    //    $grade="wuban";
    //    $major = "jihke";
    //    $bit_class="5";
        if( $name == "" || $pwd == "" || $cpwd == "" || $phone == "" ){
            echo "<script>alert('输入信息有空值！'); history.go(-1);</script>";
        }else{
            if( $pwd == $cpwd ){
	    	    $data = "'$name'".","."'$pwd'".","."'$phone'".","."'$email'".","."'$school'".","."'$grade'".","."'$major'".","."'$bit_class'";
				//echo $data;
	    	    $ret = insert_data( $data );
	    		if($ret == true ){
	    			echo "success<br/>";
	    		}else{
	    			echo "failed<br/>";
	    		}
            }else{
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";
            }
        }
	}
?>
</body>
</html>
