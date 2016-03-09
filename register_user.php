<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }else{
        echo "请填写用户名<br>";
        echo"<script type='text/javascript'>alert('请填写用户名');location='register.html';  </script>";
    }
    if(isset($_POST['passwd'])){
        $pwd = $_POST['passwd'];
    }else{
        //echo "请填写密码<br><a href='login.php'>返回</a>";
        echo"<script type='text/javascript'>alert('请填写密码');location='register.html';</script>";
    }
    if(isset($_POST['cpasswd'])){
        $cpwd = $_POST['cpasswd'];
    }
    if($pwd != $cpwd){
        echo"<script type='text/javascript'>alert('密码不一致，请重新输入！');location='register.html';</script>";
    }
    if(isset($_POST['phone'])){
        $phone=$_POST['phone'];
    }else{
        echo"<script type='text/javascript'>alert('请填写电话号码');location='register.html';</script>";
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['school'])){
        $school=$_POST['school'];
    }
    if(isset($_POST['Grade'])){
        $grade=$_POST['Grade'];
    }
    if(isset($_POST['major'])){
        $major=$_POST['major'];
    }
    if(isset($_POST['bit_class'])){
        $bit_class=$_POST['bit_class'];
    }
    $userinfo = collet_data();
    if($userinfo['phone'] = $phone){
        echo"<script type='text/javascript'>alert('该手机已经注册！');location='register.html';</script>";
    }
?>
</body>
</html>
