<?php 
	if (isset($_POST['register'])) {
		# database connection file
		include 'db.conn.php';

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$email, $password]);
		echo "Registration successful!";
		
		// Redirect to the login page after successful registration
		header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
	<form method="post" action="" enctype="multipart/form-data">

		<?php  
		if (isset($_GET['error'])) {
			echo "<p class='error'>";
			echo htmlspecialchars($_GET['error']);
			echo "</p>";
		}
		?>
	
<input type="text" name="email" class="styled-input" required>
<input type="password" name="password" class="styled-input" required>

		<button type="submit" name="register">register</button>
	</form>
    
</body>
</html>
