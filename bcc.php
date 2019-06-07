<!DOCTYPE html>
<html>
<body style="font:bold" , background="back1.jpg" >
<br><br><br><br><br><br><br><br><br><br>
<head>
</head>
<?php
if(isset($_POST['bal']))
{
session_start();
include "db.php";
$txt1="YOUR BALANCE IS";
$a=trim($_POST["aid"]);
$b=trim($_POST["pid"]);
$x="select * from login where Accountnumber='$a'and BINARY Pin='$b' ";
$y=$conn->query($x);
if($y->num_rows==1)
{
$row = $y->fetch_assoc();
$amt = $row["Amount"];
$_SESSION["pwd"]=$row["Pin"];
$_SESSION["aid"]=$row["Accountnumber"];
//echo $amt;
echo "<h2>" .$txt1. "</h2>";
echo "<h2>" .$amt. "</h2>" ;
}
else
{
echo "<script type='text/javascript'>alert('Wrong Accountnumber!!!');</script>";
exit();
}
$conn->close();
}
?>
<body>
</body>
</html>