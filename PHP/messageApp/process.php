<?php include 'db.php'; ?>
<?php
	if(!empty($_POST['text']) && !empty($_POST['user'])) {
		$text = mysqli_real_escape_string($connection, $_POST['text']);
		$user = mysqli_real_escape_string($connection, $_POST['user']);
		date_default_timezone_set("Asia/Manila");
		$date_time = date('Y-m-d h:m:s');
		$query = "INSERT INTO messages VALUES('', '$text', '$user', '$date_time')";
		if(!mysqli_query($connection, $query)) {
			die(mysqli_error($connection));
		} else {
			header("location: index.php?success=Message%20Added");
		}
		
	} else {
		header("location: index.php?error=Please%20Fill%20In%20All%20Fields");
	}

?>