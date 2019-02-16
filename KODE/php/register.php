<?php
	include "public.php";
	$username= $_GET["$uname1"];
	$upwd = $_GET["$upwd1"];
	$sql = "insert into `user`(`uname`,`upwd`) values ('$username','$upwd')";
	$row = mysql_query($sql);
	if( $row ){
		echo "<script>alert('注册用户成功');location.href='../html/login.html';</script>";
	}else{
		echo "<script>alert('注册用户失败');location.href='../html/login.html';</script>";
	}
?>