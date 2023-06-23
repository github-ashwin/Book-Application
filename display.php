<!DOCTYPE html>
<html>
<body>
<h2> DISPLAY BOOK DETAILS</h2><hr><br><br>
<?php
	include("connection.php");
	$sql="select book_id,author_name,book_title,book_price from book";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			echo"<br><br>book id:".$row["book_id"]."<br>";
			echo"<br>author name:".$row["author_name"]."<br>";
			echo"<br>book title".$row["book_title"]."<br>";
			echo"<br>book price".$row["book_price"]."<br> <br>";
		}
	}
  else
		echo"0 results";
?>
<a href="home.php">Home</a>
</body>
</html>