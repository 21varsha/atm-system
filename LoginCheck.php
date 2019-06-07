<html>
<head>
</head>
<?php
if(isset($_POST['login']))
{
session_start();
include "db.php";
$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$c=trim($_POST["aid"]);
$x="select * from login where Username='$a' and Accountnumber='$c'";
$y=$conn->query($x);
if($y->num_rows==1)
{
$row = $y->fetch_assoc();
$username = $row["Username"];
$d=$row["counter"];
$pass = $row["Pin"];
if($b != $pass)
{
if($d<3)
{
$d = $d + 1;
echo "wrong pin number" . $d . "<br />\n";
$sql = "UPDATE login SET counter='$d' WHERE Accountnumber='$c'";
if ($conn->query($sql) === TRUE)
{
echo "Record updated successfully ";
}
else
{
echo "Error updating record: " . $conn->error;
}
}
else
{
include"pinerr.php";
}
}
if($b == $pass)
{
echo "<script type='text/javascript'>window.location.href='str.php';</script>";
}
}
else
{
echo "<script type='text/javascript'>alert('Wrong Username or Accountnumber or Password!!!');</script>";
include "log.php";
}
$conn->close();
}
else
echo "<script type='text/javascript'>window.top.location.href='unauthorized.php';</script>";
?>
<body>
</body>
</html>