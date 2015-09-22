<?php session_start(); ?>
<html>
<head>
<title> This is to test session variables </title>
</head>
<body>
<?php echo "Your Favourite color is ". $_SESSION["favcolor"]."</br>";
echo "Your favourite animal is ". $_SESSION["favanimal"]."</br>";
print_r($_SESSION);
$_SESSION["favcolor"]="white";
$_SESSION["favanimal"]="Snake";
print_r($_SESSION);

session_unset();
session_destroy();
print_r($_SESSION);
echo 'testing after unset and destroy variables</br>';

echo '</br></n>';
$test=time();
$date1=date('M-m-d-D-Y-y H-I-s');
$mi=microtime();
echo $test.'</br></br>'.$date1.'</br></br>'.$mi;


echo "<br>"; 
date_default_timezone_set("UTC"); 
echo "UTC:".time(); 
echo "<br>"; 

date_default_timezone_set("Europe/Helsinki"); 
echo "Europe/Helsinki:".time(); 
echo '<br></br>'.$_SERVER['REMOTE_HOST']; 
echo '<br></br>'.$_SERVER['REMOTE_INTERFACE']; 



?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";

echo $_SERVER['SERVER_ADDR'];
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

echo $_SERVER['REQUEST_TIME'];
echo "<br>";

echo $_SERVER['QUERY_STRING'];
echo "<br>";

echo $_SERVER['REMOTE_PORT'];
echo "<br>";

echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>