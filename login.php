<?php 
	if (isset($_POST['log'])) {
        include 'db.conn.php';
    
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
    
        $user = $stmt->fetch();
    
        if ($user) {
            $storedPassword = $user['password'];
            if ($password === $storedPassword) {
                $_SESSION['email'] = $email;

                header("Location: index.php");
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Email not found.";
        }
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
		<button type="submit" name="log">Log</button>
	</form>
    
</body>
</html>
