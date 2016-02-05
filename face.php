<?php
include("mysql.inc.php");
$myTable='`table`';
$result=mysqli_query($conn,"SELECT * FORM $myTable ORDER BY no: DESC");
$numRows=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<title>notepad</title>
</head>

<body>
<div id="title">
<img id="title_img" src="saltyfierce.jpg">
<h1>messageboard</h1>
</div>
<div id="maintext">
<?php
   echo " $numRows message avilable";
?>
<a href="messageboard.html">猛戳此处留言</a></div>
<?php
   if($numRows>0){
	   echo '<ul>';
	   $background=1;
	   while($row=mysqli_fetch_array($result)){
		   $name=htmlspecialchars($row['name:'], END_QUOTES);
		   $message=htmlspecialchars($row['message:'], END_QUOTES);
		   $message=str_replace('','&nbsp;&nbsp;', nl2br($message));
		   
		   if($background%2==0){
			   $liclass='even';
			   }else{
				   $liclass='odd';
				   }
		   
		   echo "<li class=\"$liclass\"> 
		   <p><strong>$name</strong>
		   <em>{$row['time']}</em></p>
		   <p>$message</p></li>";
		   $background++;
		   }
		   echo'</ul>';
	   }
?>
</div>
</body>
</html>