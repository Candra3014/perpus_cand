<?php

require "connection.php";

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('User BERHASIL Ditambahkan!');
				</script>";
	} else {
		echo "register err";
		echo mysqli_error($conn);
	}
}

if (isset($_POST["login"])) {
	if (loginlvl($_POST) > 0) {
		if (loginlvl($_POST) == 2) {
			Header("Location: adminpage.php"); /*echo "SUCCESS LVL : 2"; */
		}
		if (loginlvl($_POST) == 1) {
			Header("Location: userpage.php"); /*echo "SUCCESS LVL : 1"; */
		}
	} else {
		echo "login err";
		echo mysqli_error($conn);
	}
}

?>

<html>

<head>
	<title>Enter Perpustakaan</title>
	<style>
		.kolom {
			float: left;
			width: 50%;
		}

		label {
			display: block;
		}

		ul {
			list-style-type: none;
		}
	</style>
</head>

<body>

	<div class="kolom">
		<h2>Login</h2>
		<form action="" method="post">
			<ul>
				<li>
					<label>Username</label>
					<input type="text" name="usernamel" id="usernamel" placeholder="USERNAME">
				</li>
				<li>
					<label>Password</label>
					<input type="text" name="passwordl" id="passwordl" placeholder="PASSWORD">
				</li>
				<li><button action="submit" name="login">LOGIN</button></li>
			</ul>
			<a href="register.php">Register</a><br /><br />

		</form>
	</div>

</html>