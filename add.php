<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<style>
	.error{
		color: red;
	}
</style>
<body>
	<form method="post" action="wel.php">
		<b>Name:<span style="color:red;">*</span></b><input type="text" name="name"/><br>
		<b>age:<span style="color:red;">*</span></b><input type="number" name="age"/><br>
		<span class="error">* <?php echo $ageer;?></span>
<br><br>
		<b>Marks:<span style="color:red;">*</span></b><input type="number" name="marks"/><br>
		<input type="submit" value="submit"/>
	</form>
</body>
</html>