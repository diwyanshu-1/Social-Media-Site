<?php  
require 'config/config.php';


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Factfeed</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="index.php">Factfeed!</a>
		</div>

		<nav>
			<a href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name']; ?>
			</a>
			<a href="index.php">
				<i class="fa fa-home fa-lg"></i>
			</a>
			<!-- <a href="#">
				<i class="fa fa-envelope fa-lg"></i>
			</a> -->
			<a href="https://www.google.com/search?q=corona+vaccine+news&rlz=1C1CHBF_enIN852IN852&sxsrf=ALeKk00MgTtN3CQvyKrXgdbSf95u2av8aA:1619097231594&source=lnms&tbm=nws&sa=X&ved=2ahUKEwik8eGa95HwAhWHxjgGHSSlDnEQ_AUoAXoECAEQAw&biw=1280&bih=610&dpr=1.5">
				<i class="fa fa-bell fa-lg"></i>
			</a>
			<!-- <a href="#">
				<i class="fa fa-users fa-lg"></i>
			</a> -->
			<!-- <a href="#">
				<i class="fa fa-cog fa-lg"></i>
			</a> -->
			<a href="includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg"></i>
			</a>



		</nav>

	</div>


	<div class="wrapper">