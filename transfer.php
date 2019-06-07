<!DOCTYPE html>
<html>
<body style="font:bold" , bgcolor="LIGHTBLUE",background="back1.jpg" >
<form method="post" action="tcc.php";
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div align='center'>
<br><br><br><br><br><br>
<tr><td><label><b> ACCOUNT NUMBER <b></label></td><td><input name="aid" type="integer" size="10" maxlength="10" autofocus /> <br><br><br>
<tr><td><label><b>PIN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b></label></td><td><input name="pid" type="password" size="4" maxlength="4" /><br><br><br>
<tr><td><label><b> AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b></label></td><td><input name="amid" type="integer" size="10" maxlength="10" autofocus /><br><br><br>
<tr><td><label><b> ACCOUNT NUMBER <b></label></td><td><input name="atid" type="integer" size="10" maxlength="10" autofocus /> <br><br><br>
<br><br><br><input style="font-weight: bold; font-size:8; color: rgb(16, 41, 205);width:120px;height:360; background-color:rgb(51,204,255);"
input type="submit" name="trans">
</div>
</form>
<body>
<div style="text-align: center;">
<form action="str.php" method="post"><br>
<br><input style="font-weight: bold; font-size:8; color: rgb(16, 41, 205);width:120px;height:360; background-color:rgb(51,204,255);"
input type="submit" name="exit" value="EXIT">
</form>
</div>
</body>
</body>
</html>