<?php
// session_start();
include("db_connection.php");
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {

	$email = $_POST['email'];
	$password = $_POST['pswd'];

	$sql = "SELECT * FROM user1 WHERE email='" . $email . "'";
	$query = mysqli_query($conn, $sql);

	$get_no_row = mysqli_num_rows($query);

	if ($get_no_row) {
		$data = mysqli_fetch_assoc($query);
		if ($data['password'] == $password) {
			session_start();
			$_SESSION['username'] = $data['name'];
			header('location:index1.php');
		} else {
			echo "<script>
			alert('Password don\'t Match....');
			window.location.href='login.php';
		  </script>";
		}
	} else {
		echo "<script>
			alert('User not Exist...);
			window.location.href='login.php';
		  </script>";
	}
} else {
	echo "<script>
			alert('Somethings Went Wrong.\nPlease Try Again...');
			window.location.href='login.php';
		  </script>";
}