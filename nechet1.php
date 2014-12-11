<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<input name="chislo" type="text" /><BR />
<input name="chislo" type="parol" /><BR />
<input name="Submit" type="submit" value="najimai" id="Submit" />
</form>
<?php
$chislo = $_POST["chislo"];
$ost = $chislo % 2;
if ($ost != 0) {
	echo "Nechetnoe";
	} else{
		echo "Chetnoe";
		}
?>
</body>
</html>