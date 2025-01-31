<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<h1 style="font-size: 50px;font-weight: 600;">
		<?php echo $_SESSION['username']; ?>
	</h1>


<h1 style="font-size: 50px;font-weight: 600;">
	<pre>
	<?php

	$_SESSION['username']="Test Data Session Modify.";

	print_r($_SESSION);

	session_unset();
	session_destroy();
	print_r($_SESSION);


	?>
</pre>
</h1>




</body>
</html>