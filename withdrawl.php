<!DOCTYPE html>
<html>
<body style="font:bold", background="back1.jpg" >
<form method="post" action="wcc.php";>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div align='center'>
<br><br><br><br><br><br>
<tr><td><label><b> ACCOUNT NUMBER&nbsp&nbsp <b></label></td><td><input name="aid" type="integer" size="10" maxlength="10" autofocus /> <br><br><br>
<tr><td><label><b>PIN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b></label></td><td><input name="pid" type="password" size="4" maxlength="4" /><br><br><br>
<tr><td><label><b> AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp<b></label></td><td><input name="amid" type="integer" size="5" maxlength="5" autofocus required />
<br><br><br><br><br><input style="font-weight: bold; font-size:8; color: rgb(16, 41, 205);width:120px;height:360; background-color:rgb(51,204,255);"
type="submit" name="with">
</form>
<body>
<form action="str.php" method="post"><br>
<br><br><input style="font-weight: bold; font-size:8; color: rgb(16, 41, 205);width:120px;height:60; background-color:rgb(51,204,255);"
name="exit" value="EXIT" type="submit">
</form>
</body>
</div>
</body>
</html>
