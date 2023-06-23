<!DOCTYPE html>
<html>
    <head>
        <title>Connection</title>
    </head>
<body>
<?php
$conn=new mysqli("localhost","root","","test");
if($conn->connect_error)
die("Connection failed:".$conn->connect_error);
else
echo "Connection established";
?>
</body>
</html>