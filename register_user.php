<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['passwd'])){
        $pwd = $_POST['passwd'];
    }
    if(isset($_POST['cpasswd'])){
        $cpwd = $_POST['cpasswd'];
    }
    if(isset($_POST['phone'])){
        $phone=$_POST['phone'];
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
    echo $name, $pwd, $cpwd, $phone, $email, $school, $grade, $major, $bit_class;
?>
</body>
</html>
