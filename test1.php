<html>
<head></head>

<?php
	require 'common.php';
	require 'CTest1.php';
?>
<?php
	$tt = new test1();
?>

<body>
	<form action="test1.php" method="post">
		<input type="text" name="txtID" id="txtID" style="width: 80px"/>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>

<?php
	if(@$_POST["txtID"] != NULL)
	{
		$tt->setColor($_POST["txtID"]);
		$tt->printColor();
?>
<?php
	}
?>