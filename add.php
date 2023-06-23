
<html>
<title>ADD BOOK</title>
<body>
<center><br><br>
<form action="add.php" name="form1" method="POST">
    <h2> ADD BOOK DETAILS</h2><hr><br><br>
     BOOK ID:    <input type="text" name="id" /><br><br>
     AUTHOR NAME:<input type="text" name="author"/><br><br>
	 BOOK TITLE: <input type="text" name="title"/><br><br>
	 BOOK PRICE: <input type="text" name="price"/><br><br>
                  <input type="submit" name="submit" value="submit"/><br><br>
</form>
<?php
if($_POST)
{
	$bookid=$_POST["id"];
	$author1=$_POST["author"];
	$title1=$_POST["title"];
	$price1=$_POST["price"];
	include("connection.php");
	$sql="insert into book(book_id,author_name,book_title,book_price) values ('$bookid','$author1','$title1','$price1')";
if($conn->query($sql)===TRUE)
	echo"<br>New book created successfully";
else
	echo"Error:".$sql."<br>".$conn->error;
$conn->close();
}
?>
<a href="home.php">Home</a>
</body>
</html>