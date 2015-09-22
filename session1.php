<html>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Your Name: <input type="text" name="name"><span> *<?php echo $error; ?> </span>
<input type="submit"></form>

<?php
//$name="";
//$error="";
 if($_SERVER("REQUEST_METHOD")=="POST")
{
	echo $name=$_POST["name"];
	if(empty($name))
	{
		$error="Please enter your name";
	}
	else
	{
		echo $name;
	}
}
?>
</body>
</html>