<html>
<title>DELETION</title>
<body>
<center>
<form action="delete.php" name="form1" method="POST"><br><br><br>
     <h2> DELETE BOOK DETAILS</h2><hr><br><br>
      ENTER BOOK_ID:<input type="text" name="id"/><br><br><br><br>
                    <input type="submit" name="submit" value="DELETE BOOK DETAILS"/><br>
</form>
<?php
if($_POST)
{
	$bookid=$_POST["id"];
	include("connection.php");
	$sql="delete from book where book_id='$bookid'";
	if($conn->query($sql)===TRUE)
		echo"<br><br>Book Details deleted successfully<br><br>";
	else
		echo"Error:".$sql."<br>".$conn->error;
$conn->close();
}
?>
<a href="home.php">home</a>
<center>
</body>
</html>