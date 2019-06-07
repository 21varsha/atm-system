<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="font:bold" , background="back.jpg" >
</body>
<form action="LoginCheck.php" id="LoginForm" method="post"><br/><br/>
<body>
<?php
// define variables and set to empty values
$nameErr = $acntnoErr = $pinErr = "";
$name = $acntno = $pin = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
}
if (empty($_POST["acntno"])) {
$acntnoErr = "Account number is required";
} else {
$email = test_input($_POST["acnt"]);
}
if (empty($_POST["pin"])) {
$pinErr = "Pin is required";
} else {
$pin = test_input($_POST["pin"]);
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h1 align="center" class="style1">WELCOME</h1><br />
<h1 align="center" class="style2">ATM SYSTEM</h1>
<br /><p>
<div align='center'><p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table border="0" align="center" cellspacing="20">
<tr><td><label><b>User Name<b></label></td><td><input name="uid" type="text" size="20" maxlength="20" autofocus />
<span class="error">* <?php echo $nameErr;?></span>
</td></tr>
<tr><td><label><b>Account Number<b></label></td><td><input name="aid" type="integer" size="10" maxlength="10" autofocus />
<span class="error">* <?php echo $acntnoErr;?></span>
</td></tr>
<tr><td><label><b>Pin<b></label></td><td><input name="pid" type="password" size="4" maxlength="4" />
<span class="error">* <?php echo $pinErr;?></span>
</td></tr>
</table>
<div align='center'><input name="login" type="submit" value="Log In" /></div></p>
<input type="reset" value="Clear">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</form>
</body>
</html>
<?php
if(isset($_POST['SignIn']))
{
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="dbb";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error)
{
echo "<script type='text/javascript'>alert('Connection Error. Please Contact Admin');window.location.href = 'log.php';</script>";
}
$v=trim($_POST["pid"]);
$p = 1111;
if($v == $p)
{
$sql = "INSERT INTO `cus1`(`Pin`) VALUES ('$v')";
if ($conn->query($sql) === TRUE) {
//include"wccs.php";
echo "Record updated successfully ";
} else {
echo "Error updating record: " . $conn->error;
}
}
$conn->close();
}
?>
