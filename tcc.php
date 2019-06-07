<!DOCTYPE html>
<html>
<head>
</head>
<?php
if(isset($_POST['trans']))
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
//echo $b;
$d=$amt - $b;
//echo $d;
$sql = "UPDATE login SET Amount='$d' WHERE Accountnumber='$a'";
if ($conn->query($sql) === TRUE) {
//echo "Record updated successfully ";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>
<?php
if(isset($_POST['trans']))
{
//session_start();
include "db.php";
$r=trim($_POST["atid"]);
$s="select * from login where Accountnumber='$r' ";
$t=$conn->query($s);
if($t->num_rows==1)
{
$row = $t->fetch_assoc();
$amt = $row["Amount"];
//echo $amt;
}
else
{
echo "<script type='text/javascript'>alert('Wrong Accountnumber!!!');</script>";
}
$c=trim($_POST["amid"]);
//echo $c;
$e=$amt + $c;
//echo $e;
$sql = "UPDATE login SET Amount='$e' WHERE Accountnumber='$r'";
if ($conn->query($sql) === TRUE) {
include"tccs.php";
//echo"AMOUNT TRANSFERRED SUCCESSFULLY";
//echo "Record updated successfully ";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>
</html>