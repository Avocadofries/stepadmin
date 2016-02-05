<?php
include("mysql.inc.php");
$myTable='`table`';
$errMsg='';
$name='';
$message='';

if(!empty($_POST['name'])&&!empty($_POST['message']))
{
	$name=$_POST['name'];
	$message=$_POST['message'];
	}
	else{
		$errMsg.='unknown user<br>';
		
		}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>messagetab</title>
</head>

<body>

<div id="textarea">

<?php
 if($errMsg==''){
	 date_default_timezone_set('Asia/Shanghai');
	 $stmt=mysqli_prepare($conn,
	 "INSERT INTO $myTable('name:','message:','time')
	 VALUES(?, ?, ?)");
 $now=date("Y-m-d H:i:s");
 $stmt->bind_param($stmt,'sss',
                        $name, $message, $now);
 $stmt->execute($stmt);
 
 
   if(mysqli_affected_rows($conn)>0){
	   echo'new message get<br>';
	   }
	   else{
		   echo 'new message unavilable<br>';
		   }
	 }
	 
	 else{
		 echo $errMsg. 'reinjection needed <br>';
		 }
  
?>
<p><a href="face.php">back to frontpage</a></p>
</div>
</body>
</html>