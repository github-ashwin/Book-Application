<html>
<title>UPDATION</title>
<body>
<center>
<form action="update.php" name="form1" method="POST"><br><br>
	<h2> UPDATE BOOK DETAILS</h2><hr><br><br><br><br>
   BOOK_ID    <input type="text" name="id" /><br><br>
   AUTHOR NAME<input type="text" name="author"/><br><br>
              <input type="submit" name="submit" value="Update book details" /><br>
</form>
<?php
if($_POST)
{
	$bookid=$_POST["id"];
	$author1=$_POST["author"];
	include("connection.php");
	$sql="Update book set author_name='$author1' where book_id='$bookid'";
	if($conn->query($sql)===TRUE)
		echo"<br>Updated successfully";
    else
		echo"Error:" .$sql. "<br>".$conn->error;
$conn->close();
}
?>
<br><a href="home.php">Home</a>
</center>
</body>
</html>