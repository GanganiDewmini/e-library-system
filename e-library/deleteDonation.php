<?php
if (isset($_POST['deleteBook'])) {
  $bookId = $_POST['bookId'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM donations WHERE donationId = '$bookId'";

  if ($conn->query($sql) === TRUE) {
    echo "Book deleted successfully.";
	header("location:Donationadd.php");
  } else {
    echo "Error deleting book: " . $conn->error;
  }

  $conn->close();
}
?>