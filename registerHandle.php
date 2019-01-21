<?php
	header("content-type:text/html;charset=utf-8");	
	if($_POST['name']==''||$_POST['password']==''||$_POST['email']=="")
	{
		echo "<script language=\"javascript\">";
		echo "alert(\"用户名,密码,邮箱不能为空！\");";	
		echo "location.href=\"register.php\"";	
		echo "</script>";
	}
	else {
        $conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
        mysqli_query($conn, "set names utf8");
        mysqli_select_db($conn, "mytest");
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $password1 = md5($_POST['password1']);
        $email = $_POST['email'];
        $sql = "select * from user where name='$name'";
        $rs = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rs) > 0) {
            echo "<script language=\"javascript\">";
            echo "alert(\"用户名已存在！\");";
            echo "location.href=\"register.php\"";
            echo "</script>";
            echo "<br>";
        } else {
//			if($_SESSION['code']==$_POST['code']){
            $sql1 = "insert into user(name,password,email) values ('$name','$password','$email')";
            $result = mysqli_query($conn, $sql1);
            if ($password != $password1) {
                echo "<script language=\"javascript\">";
                echo "alert(\"密码不一致\");";
                echo "location.href=\"register.php\"";
                echo "</script>";
                echo "<br>";
            } else {
                if ($result) {
                    echo "<script language=\"javascript\">";
                    echo "alert(\"注册成功！\\n请重新登录！\");";
                    echo "location.href=\"login.php\"";
                    echo "</script>";
                } else {
                    echo "<script language=\"javascript\">";
                    echo "alert(\"注册失败！\");";
                    echo "location.href=\"register.php\"";
                    echo "</script>";
                    echo "<br>";
                }
            }
        }
    }
?>