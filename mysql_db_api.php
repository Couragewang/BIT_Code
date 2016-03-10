<?php
    //$data=name,pwd,...,bit_class
    function insert_data( $data ){
		$servername="localhost";
		$username="student";
		$passwd="123456";
		$db="bit";
        $sql="INSERT INTO student_base_info (name, passwd, phone, email, school, grade, major, bit_class) VALUES "."("."$data".")";
		//echo ".......... $sql............";
		$conn=mysqli_connect($servername, $username, $passwd, $db);
        if(mysqli_connect_errno($conn)){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			return false;
        }
        if (!mysqli_query($conn, $sql)){
			echo "query sql failed";
			return false;
        }
		mysqli_close($conn);
		return true;
    }
	//insert_data("'1','1','1','1','1','1','1','1'");
?>
