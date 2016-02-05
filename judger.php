<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>portal</title>
</head>
<body>
<?php
  $userpass=array("username"=>"Avocadofries","password"=>"neupioneer");
  
  
  if(!$_POST['username']||!$_POST['password']){
	 echo "<script>
	       alert('请输入全部用户名以及密码');
	       location='admin.html'</script>";
	  }else{
		  $username=$_POST['username'];
          $password=$_POST['password'];
		  }
     
	 if($userpass['username']==$username&&$userpass['password']==$password){
		 $_SESSION['admin']=$username;
		echo "<script>
		      alert('登陆成功');
		      location='administrator.php'</script>";
		 }
		 else
		 {
			 echo "<script>
	               alert('都说了是权限狗通道...正在返回');
	               location='admin.html'</script>";
			 }
  
?>
</body>
</html>
