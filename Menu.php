<html>
<head>
</head>
<body>
<script>
window.alert('Welcome to web page') ;
</script>
<body style="font:bold" , background="back.jpg" >
</body>
<h1 style="background-color: rgb(51, 204, 255); text-align: center; color: rgb(51, 51, 153);"><big>SELECT A TRANSACTION</big></h1>
<?php
include "db.php";
?>
<body>
<div style="text-align: center;">
<form action="withdrawl.php" method="post"><br><br>
<input style="font-weight: bold; font-size:18; color: rgb(16,41,205); width:120px;height:60; background-color:rgb(51,204,255);"
name="Withdrawl" value="WITHDRAW" type="submit">
</form>
</div>
</body>
<body>
<div style="text-align: center;">
<form action="deposit.php" method="post"><br><br>
<input style="font-weight: bold; font-size:18;color: rgb(16,41,205); width:120px;height:60; background-color:rgb(51,204,255);"
name="deposit" value="DEPOSIT" type="submit">
</form>
</div>
</body>
<body>
<div style="text-align: center;">
<form action="transfer.php" method="post"><br><br>
<input style="font-weight: bold; font-size:18; color: rgb(16,41,205); width:120px;height:60; background-color:rgb(51,204,255);"
name="transfer" value="TRANSFER" type="submit">
</form>
</body>
<body>
<div style="text-align: center;">
<form action="balance.php" method="post"><br><br>
<input style="font-weight: bold; font-size:18; color: rgb(16,41,205); width:120px;height:60; background-color:rgb(51,204,255);"
name="balance" value="BALANCE" type="submit">
</form>
</body>
<body>
<div style="text-align: center;">
<form action="log.php" method="post"><br>
<input style="font-weight: bold; font-size:18; color: rgb(16,41,205); width:120px;height:60; background-color:rgb(51,204,255);"
name="exit" value="EXIT" type="submit">
</form>
</div>
</body>
</html>
