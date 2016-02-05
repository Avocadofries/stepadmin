<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>权限狗大结界</title>
<img id="title_img" src="salty.jpg">
</head>
<?php
session_start();
?>
<p>权限狗<?php  echo $_SESSION['admin']?>您好。</p>
<p>伸张正义的时刻到了。</p>
<?php
  include("mysql.inc.php");
  if(!empty($_POST['name'])&&!empty($_POST['message'])){
	  $sql="INSERT `table`(`name:`,`message`:)
	  VALUES('{$_POST['name']}','{$_POST['message']}')";
	  mysqli_query($conn,$sql);
	  }
  ?>
<body>
   <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
   用户名:<input name="name">
     留言：<input name="message" style="width:200px">
         <input name="submit" type="submit" value="插♂入">
   </form>
<?php 
    $sql="SELECT* FROM `table` ORDER BY `no:` ASC";
    $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "<hr/><table border='1'>
		<tr><td>用户名</td><td>留言</td></tr>";
		
		while($row=mysqli_fetch_array($result)){
			echo"<tr><td>{$row['name:']}</td>
			         <td>{$row['message:']}</td><tr>
		             <td><a href='deletor.php?del={$row['no:']}'>
					      删除</a></td></tr>";
			          }
		echo'</table>';
		}
?>   
</body>
</html>