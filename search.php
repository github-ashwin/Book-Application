<html>
<head>
<title>SEARCH BOOK DETAILS</title>
</head>
<body>
<center>
<form action="" method="POST">
	<h2> SEARCH BOOK DETAILS</h2><hr><br><br>
	ENTER THE BOOK NAME<input type="text" name="title"><br><br>
            <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	$title=$_POST["title"];
	include("connection.php");
	$query="select * from book where book_title='$title'";
	$result=mysqli_query($conn,$query);
	$row=$result-> fetch_array(MYSQLI_NUM)or die("no such book");
		echo "<br><br>BOOK INFORMATION"."<br>";
		echo"<br>Book ID=" .$row[0]."<br>";
		echo"<br>Book title=" .$row[1]."<br>";
		echo"<br>Book author name=".$row[2]. "<br>";
		echo"<br>Book price=" . $row[3]."<br>";
		
}
?>
<br><a href="home.php">Home page</a><br>
<br><a href="display.php">View Available Books</a>
</center>
</body>
</html>