<html>
<head>
	<title>Form 2 </title>
	<link rel="stylesheet" type="text/css" href="form_css.css">
</head>
<body>
<div>
<?php

$_name = $_POST['Name'];
$_roll_no = $_POST['Roll_no'];
$_phone_no = $_POST['Phone_no'];

echo "Name: ".$_name;
echo "<br>";
echo "Roll no: ".$_roll_no;
echo "<br>";
echo "Phone no: ".$_phone_no;
echo "<br>";
?>
</div>
<a href = "form.php"><button>Back</button></a>
</body>
</html>