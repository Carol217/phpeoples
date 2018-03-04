<!DOCTYPE html>
<html>
<head><title>PHP DEMO</title></head>

<body>
<form action="index.php" id="form" method="get">
<select name="drop_down">
<option value="1">Variables</option>
<option value="2">Operators</option>
<option value="3">If Else</option>
<option value="4">Loops</option>
<option value="5">Functions</option>
<option value="6">Arrays</option>
</select>
<input type="submit">
</form>
<br><br>

<?php
echo "hello world!";

/*
$option = (int)$_GET["drop_down"]
if ( option == 1){
   echo "variables!";
}else if(option == 2){
   echo "operators?";
}else{
   echo "something";
}
?>
</body>
</html>
