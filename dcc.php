<!DOCTYPE html>
<html>
<head>
</head>
<?php
if(isset($_POST['with']))
{
session_start();
include "db.php";
$a=trim($_POST["aid"]);
$b=trim($_POST["pid"]);
$x="select * from login where Accountnumber='$a'and BINARY Pin='$b' ";
$y=$conn->query($x);
if($y->num_rows==1)
{
$row = $y->fetch_assoc();
$_SESSION["pwd"]=$row["Pin"];
$_SESSION["aid"]=$row["Accountnumber"];
$amt = $row["Amount"];
//echo $amt;
}
else
{
echo "<script type='text/javascript'>alert('Wrong Accountnumber!!!');</script>";
exit();
}
$b=trim($_POST["amid"]);
$v = $b;
//echo $b;
$n = 500;
$j = 15000;
$d=$amt + $b;
if(($b >= $n) && ($b <= $j))
{
$sql = "UPDATE login SET Amount='$d' WHERE Accountnumber='$a'";
if ($conn->query($sql) === TRUE) {
include"dccs.php";
//echo "Record updated successfully ";
} else {
echo "Error updating record: " . $conn->error;
}
}
else {
//echo "err";
include"derr.php";
}
$conn->close();
}
?>
</html>