<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<title>PaperShare | The Goto place to read</title>
	<meta charset="UTF-8">

	<!-- Automatic resize -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS file. Provided by W3Schools -->
	<link rel="stylesheet" href="w3.css">

	<!-- Custom font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

	<style>
		body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
		body {font-size:16px;}
		.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
		.w3-half img:hover{opacity:1}
	</style>

	<body>
		<!-- Sidebar menu -->
		<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
			
			<!-- Sidebar Title -->
			<div class="w3-container">
				<h3 class="w3-padding-64"><b>PaperShare</b></h3>
			</div>

			<!-- Sidebar Contents -->
			<div class="w3-bar-block">
				<a href="index.html#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
			</div>
		</nav>

		<!-- Top menu on small screens -->
		<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
			<a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
			<span>PaperShare</span>
		</header>

		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<!-- PAGE CONTENT -->
		<div class="w3-main" style="margin-left:340px;margin-right:40px">
			<h1>Login check and authorization</h1>
			<b>Username:</b> <?php echo $_POST["username"]; ?>
			<br>
			<b>Password:</b> <?php echo $_POST["password"]; ?>

			<br>

			<?php
				include("database_handler.php");

				//Create connection
				$connect = mysqli_connect($server_name, $username, $password, $dbName);

				//Chech if connection is live
				if (!$connect)
				{
					die("Connection Failed: " . mysqli_connect_error());
				}
				else
				{
					echo "Successfull Connection<br>";
				}

				$username = $_POST["username"];
				$password = $_POST["password"];
				$sql = "SELECT * FROM accounts WHERE Username = '$username' AND Password = '$password'";
				$result = mysqli_query($connect, $sql);

				if (mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "Matching account:" . "<br>";
						//echo "ID: " . $row["ID"] . " --- Title: " . $row["Title"] . " --- Author: " . $row["Author"] . " --- Type: " . $row["Type"] . " --- ISBN: " . $row["ISBN"] . " --- Price: " . $row["Price"] . "<br>";
						echo "UID: " . $row["user_id"] . " --- Username: " . $row["username"] . " --- Password: " . $row["password"] . " --- Name: " . $row["name"] . " --- Surname: " . $row["surname"] . " --- Email: " . $row["email"] . " --- Age: " . $row["age"] . " --- Sex: " . $row["sex"] . "<br>";
						
						$_SESSION['user_id'] = $row["user_id"];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['surname'] = $row['surname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['age'] = $row['age'];
						$_SESSION['sex'] = $row['sex'];

						header('Location: index.html');
					}
				}
				else
				{
					echo "0 results" . "<br>";
					echo "No matching account";
				}

				mysqli_close($connect);
			?>
		</div>

		<script>
			// Script to open and close sidebar
			function w3_open()
			{
				document.getElementById("mySidebar").style.display = "block";
				document.getElementById("myOverlay").style.display = "block";
			}
 
			function w3_close()
			{
				document.getElementById("mySidebar").style.display = "none";
				document.getElementById("myOverlay").style.display = "none";
			}

			// Modal Image Gallery
			function onClick(element)
			{
				document.getElementById("img01").src = element.src;
  				document.getElementById("modal01").style.display = "block";
  				var captionText = document.getElementById("caption");
 				captionText.innerHTML = element.alt;
			}
		</script>
	</body>
</html>