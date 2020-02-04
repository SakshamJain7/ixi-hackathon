<?php
  
  $con = mysqli_connect("localhost","root");
  mysqli_connect_db($con, 'education');


if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql" .mysqli_connect_errno();
}

 

 	"insert into question values ('1','Who developed C++','1')";
 	$insert_q1 = "insert into question values ('2','Who developed C++','5')";
 	$insert_q2 = "insert into question values ('3','Who developed C++','9')";
 	$insert_q3 = "insert into question values ('4','Who developed C++','13')";
 	$insert_q4 = "insert into question values ('5','Who developed C++','17')";

    // $run_pro = mysqli_query($con, $insert_q);

 // function insertAns(){

 // 	$insert_a = "insert into answers values ()"

 // }
?>