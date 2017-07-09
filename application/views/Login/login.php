<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
if (isset($mensaje)) {
	echo $mensaje."<br/>";
} else {
	echo "Bienvenido $alias";
}
?>
</body>
</html>