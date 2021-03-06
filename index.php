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
				<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
				<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a>
				<a href="#search" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Search</a>

				<?php
					if (isset($_SESSION['user_id']))
					{
						?>
							<a href="#select" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Select Book</a>
							<a href="#submit" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Submit Book</a>
							<a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
						<?php
					}
					else
					{
						?>
							<a href="#login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a>
							<a href="#register" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Register</a>
						<?php
					}
				?>

				<!-- <a href="#login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a> -->
				<!-- <a href="#register" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Register</a> -->
				<!-- <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> -->
				<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
				<a href="#info" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a>
				</a>
			</div>
			<br>
			<br>
			<div class="w3-bar-block">
				<?php
					if (isset($_SESSION['user_id']))
					{
						echo "Logged in as: " . $_SESSION['username'];
					}
					else 
					{
						echo "You are not logged in";
					}
				?>
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
			<!-- Header -->
			<div class="w3-container" style="margin-top:80px" id="showcase">
				<h1 class="w3-jumbo"><b>The GOTO Place to Read. Made for booklovers, by booklovers.</b></h1>
				<h1 class="w3-xxxlarge w3-text-red"><b>Showcase.</b></h1>
				<hr style="width:50px;border:5px solid red" class="w3-round">
			</div>

			<!-- Photo grid (modal) -->
			<div class="w3-row-padding">
				<div class="w3-half">
					<img src="images/chaos.jpg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic1">
					<img src="images/gilga.jpg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic2">
					<img src="images/inferno.jpg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic3">
				</div>

				<div class="w3-half">
					<img src="images/java.jpeg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic4">
					<img src="images/norse.jpg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic5">
					<img src="images/tolkien.jpg" style="display:block; width:75%; height:75%; margin:auto; padding:10px" onclick="onClick(this)" alt="pic6">
					</div>
			</div>

			<!-- Modal for full size images on click-->
			<div id="modal01" class="w3-modal w3-black w3-padding-0" onclick="this.style.display='none'">
				<span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
				<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
					<img id="img01" class="w3-image">
					<p id="caption"></p>
				</div>
			</div>

			<!-- Search -->
			<div class="w3-container" id="search" style="margin-top:75px">
  				<h1 class="w3-xxxlarge w3-text-red"><b>Search.</b></h1>
  				<hr style="width:50px;border:5px solid red" class="w3-round">
  				<p>
  					Looking for something specific? There you go.
  				</p>
  				<p>
  				  <form action="search.php" method="POST">
  						<input class="w3-input w3-border" type="text" name="searchable">
  						<br>
  						<input class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit" name="search" value="Search">
  					</form>
  				</p>
			</div>

			<?php
				if (isset($_SESSION['user_id']))
				{
					?>
						<div class="w3-container" id="select" style="margin-top:75px">
							<h1 class="w3-xxxlarge w3-text-red"><b>Select Book.</b></h1>
							<hr style="width:50px;border:5px solid red" class="w3-round">

							<!-- Registered Books - START -->
							<?php
								include('database_handler.php');

								$sql = "SELECT * FROM books";
								$result = mysqli_query($connect, $sql);
							?>

							<table border="1">
								<tr>
									<th><b>Book ID</b></th>
									<th><b>ISBN</b></th>
									<th><b>Title</b></th>
									<th><b>Author</b></th>
									<th><b>Type</b></th>
									<th><b>Price</b></th>
									<th><b>Added By</b></th>
								</tr>

								<?php
									if (mysqli_num_rows($result) > 0)
									{
										while ($row = mysqli_fetch_assoc($result))
										{
											?>

											<tr>
												<td><?php echo $row['book_id']; ?></td>
												<td><?php echo $row['isbn']; ?></td>
												<td><?php echo $row['title']; ?></td>
												<td><?php echo $row['author']; ?></td>
												<td><?php echo $row['type']; ?></td>
												<td><?php echo $row['price']; ?></td>
												<td><?php echo $row['user_id']; ?></td>
											</tr>

											<?php
										}
									}
								?>
							</table>
							<!-- Registered Books - END -->
						</div>
					<?php
				}
			?>

			<?php
				if (isset($_SESSION['user_id']))
				{
					?>
						<!-- Submit book form if there is a logged in user - START -->
						<div class="w3-container" id="submit" style="margin-top:75px">
							<h1 class="w3-xxxlarge w3-text-red"><b>Submit Book.</b></h1>
							<hr style="width:50px;border:5px solid red" class="w3-round">
							<table width="100%">
								<tr>
									<td width="50%" align="center">
										<form action="submit_book.php" method="POST">
											<h1>Submit a book to out database.</h1>
											<label for="">ISBN</label>
											<input class="w3-input w3-border" type="text" name="isbn">
											<br>
											<label for="">Title</label>
											<input class="w3-input w3-border" type="text" name="title">
											<br>
											<label for="">Author</label>
											<input class="w3-input w3-border" type="text" name="author">
											<br>
											<label for="">Type</label>
											<input class="w3-input w3-border" type="text" name="type">
											<br>
											<label for="">Price</label>
											<input class="w3-input w3-border" type="text" name="price">
											<br>
											<input class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit" name="submit" value="Submit">
										</form>
									</td>
								</tr>
							</table>
						</div>
						<!-- Submit book form if there is a logged in user - END -->
					<?php
				}
			?>

			<!-- Login -->
			<div class="w3-container" id="login" style="margin-top:75px">
  				<h1 class="w3-xxxlarge w3-text-red"><b>Login.</b></h1>
				<hr style="width:50px;border:5px solid red" class="w3-round">
				<p>
					Already a member? Then login to discover new books.
				</p>
				<p>
					<table width="100%">
						<tr>
							<!-- Login Form -->
							<td width="50%" align="center">
								<form action="login.php" method="POST">
									<h1>Login</h1>
									<label>Username:</label>
									<input class="w3-input w3-border" type="text" name="username">
									<br>
									<label>Password:</label>
									<input class="w3-input w3-border" type="password" name="password">
									<br>
									<br>
									<input class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit" name="submit" value="Login">
								</form>
							</td>
						</tr>
					</table>
				</p>
 			</div>


			<!-- Sign Up -->
			<div class="w3-container" id="register" style="margin-top:75px">
  				<h1 class="w3-xxxlarge w3-text-red"><b>Register.</b></h1>
				<hr style="width:50px;border:5px solid red" class="w3-round">
				<p>
					Join our vibrant community and be part of the movement.
				</p>
				<p>
					<table width="100%">
						<tr>
							<!-- Sign Up / Register Form -->
						 	<td width="50%" align="center">
						 		<form action="register.php" method="POST">
									<h1>Create Account</h1>
									<label>Username</label>
									<input class="w3-input w3-border" type="text" name="username">
									<br>
									<label>Password</label>
									<input class="w3-input w3-border" type="password" name="password">
									<br>
									<label>Confirm Password</label>
									<input class="w3-input w3-border" type="password" name="conf_password">
									<br>
									<label>Name</label>
									<input class="w3-input w3-border" type="text" name="name">
									<br>
									<label>Surname</label>
									<input class="w3-input w3-border" type="text" name="surname">
									<br>
									<label>E-Mail</label>
									<input class="w3-input w3-border" type="text" name="email">
									<br>
									<label>Age</label>
									<input class="w3-input w3-border" type="text" name="age">
									<br>
									<label>Sex</label>
									<br>
									<select class="w3-input w3-border" name="sex">
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other" selected>Other</option>
									</select>
									<br>
									<input class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" type="submit" name="submit" value="Register">
								</form>
							</td>
						</tr>
					</table>
				</p>
 			</div>

			<!-- Contact -->
			<div class="w3-container" id="contact" style="margin-top:75px">
				<h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
				<hr style="width:50px;border:5px solid red" class="w3-round">
				<p>
					Get in touch with us.
				</p>
				<form action="contact.php" target="_blank" method="POST">
					<div class="w3-group">
						<label>Name</label>
						<input class="w3-input w3-border" type="text" name="name" required>
					</div>
					<div class="w3-group">
						<label>Email</label>
						<input class="w3-input w3-border" type="text" name="email" required>
					</div>
					<div class="w3-group">
						<label>Message</label>
						<input class="w3-input w3-border" type="text" name="msg" required>
					</div>
					<button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
				</form>  
			</div>

			<!-- info -->
			<div class="w3-container" id="info" style="margin-top:75px">
				<h1 class="w3-xxxlarge w3-text-red"><b>About Us.</b></h1>
				<hr style="width:50px;border:5px solid red" class="w3-round">
				<p>
					This website was started as a semester project for the subject of Internet Programming, Spring 2017, ICTE UOWM. Its main purpose is to learn the fundamendals of Internet Programming and the associated technologies coming with is. Focus was put on HTML, CSS, JavaScript, PHP and SQL. Have a nice time exploring the website.
				</p>
				<p>
					We are a vibrant community of booklovers that found a way to recycle the countless used books that are out there not being used by anyone. Even worse, when they are discovered, a lot of times, they are thrown away either at the trash or at best recycled as useless paper. That it what we want to rectify. We think that book hold a value way higher that the monetary price of their paper. And that is what we strive to showcase here. If you agree with us, just get on board and spread the word.
				</p>
			</div>

			<!-- End page content -->
			<!-- W3.CSS Container -->
			<!--
			<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>
			-->
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