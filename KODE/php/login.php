<?php
	include "public.php";
	$username = $_GET["uname1"];
	$userpwd = $_GET["upwd1"];
	$sql = "SELECT `uname`,`upwd` from `user` where `uname`='$username'";
	$res = mysql_query($sql);
	$arr = mysql_fetch_array($res);
	echo $arr;
	//判断数组是否存在   如果存在，说明用户名存在
	/*if( $arr ){
		if( $userpwd == $arr["upwd2"] ){ //如果用户名存在  判断密码是否相等
			echo "<script>alert('登录成功');location.href='../index.html';</script>";
		}else{
			echo "<script>alert('密码错误');location.href='../html/login.html';</script>";
		}
	}else{
		echo "<script>alert('该用户不存在');location.href='../html/login.html';</script>";
	}*/

?>
