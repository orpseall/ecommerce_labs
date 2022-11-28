<?php
	// landing/index page
	//password_hash($_POST['password'], PASSWORD_DEFAULT);

	//conditional rendering
	//start session. Read on session
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ecommerce Labs</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- css -->
	<link href="../css/style.css" rel="stylesheet">

</head>
<body>
	<div class="text-center">
		<h1>Ecommerce Labs</h1>
	</div>

	<?php
    if(empty($_SESSION['role'])){
        ?>
    <a href="login.php">Login</a>
    <?php
    }
    ?>

    <?php
    session_start();
    if(!empty($_SESSION['role'])){
        ?>
    <a href="logout.php">Logout</a>

    <?php
    }
    ?>

	<!-- First row -->
	<div class="container">

		<!-- <div class="row"> -->

			<!-- Login or register-->
			<div class="inline bg-light p-2 col-xs-6">
				<h3>Login / Register</h3>
				<a href="register.php">
					<button type="submit" class="btn btn-primary">Register</button>
				</a>
				<a href="login.php">
					<button type="submit" class="btn btn-primary">Login</button>
				</a>
			</div>

			<!-- Products display -->
			<div class="inline bg-light p-2 col-xs-3" >
				<h3>Product Display(display & search)</h3>
				<a href="products_display.php">
					<button type="submit" class="btn btn-primary">Display Products</button>
				</a>
			</div>

		<!-- </div> -->
	</div>
	

</body>
</html>