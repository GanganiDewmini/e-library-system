<?php 
	
	session_start();

	include"connection.php";
	
?>
<html>
<head>
<style>
body{
	background-image:url("style/1.jpg");
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
}
a{
	text-decoration:none;
	color:white;
}

</style>
</head>
<body>
<center>
<image  class="logo" src="images/logo.png" width="8%">
<h1 style="font-size:45px;text-shadow:1px 2px red">E-Library</h1>
</center>
<br>
<h1 style="margin-left:10%;font-style:italic;text-decoration:underline">Customer Details</h1>
<button style="background-color:#0000CD;width:6%;height:4%;float:right;font-weight:bold;text-decoration-line:none;font-size:15px;color:black;border-radius:5px;margin-right:145px"><a href="adminPage.php">>>Back</a></button><br><br>
<center>
<table border="2" width="80%">
	  <thead style="background-color:black;color:white;font-size:20px">
		<tr>
		  <th scope="col">ID</th>
		  <th scope="col">User Name</th>
		  <th scope="col">Mobile Number</th>
		  <th scope="col">Email</th>
		  <th scope="col">DOB</th>
		  <th scope="col">Action</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
			$query="SELECT * FROM all_users WHERE user_type='User'";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr style="background-color:white;font-size:20px;text-align:center">
					  <td><?php echo $row['ID'] ?></td>
					  <td><?php echo $row['User_Name'] ?></td>
					  <td><?php echo $row['Mobile_Number'] ?></td>
					  <td><?php echo $row['Email'] ?></td>
					  <td><?php echo $row['DOB'] ?></td>
					  <td><button style="background-color:red;width:70%;height:30%;font-size:15px;text-weight:bold"><a href="deleteUsers.php?id=<?php echo $row['ID'] ?>">Delete</a></td>
				</tr>
				
				<?php
			}
		?>
  </tbody>
</table>
</center>
</body>
</html>