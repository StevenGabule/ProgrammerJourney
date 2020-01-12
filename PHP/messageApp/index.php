<?php include 'db.php'; ?>
<?php
	$query = "SELECT * FROM messages ORDER BY id DESC";
	$messages = mysqli_query($connection, $query);
	
	if(isset($_GET['action']) == 'delete' && isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM messages WHERE id = $id";
		if(!mysqli_query($connection, $query)) {
			die(mysqli_error($connection));
		} else {
			header("location: index.php?remove=Deleted%20Successfully.");
		}
	}
	
	if(isset($_GET['error'])) {
		$error = $_GET['error'];
	}
	
	if(isset($_GET['remove'])) {
		$remove = $_GET['remove'];
	}
	
	if(isset($_GET['success'])) {
		$success = $_GET['success'];
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>MessageApp</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>MessageApp</h1>
			
			<?php if(isset($error)) : ?>
				<div class="alert"><?php echo $error;?></div>
			<?php endif; ?>
			
			<?php if(isset($remove)) : ?>
				<div class="success"><?php echo $remove;?></div>
			<?php endif; ?>
			
			<?php if(isset($success)) : ?>
				<div class="success"><?php echo $success;?></div>
			<?php endif; ?>
			
		</header>
		<div class="main">
			<form method="post" action="process.php">
				<label></label>
				<input type="text" name="text" placeholder="Enter Message text">
				<input type="text" name="user" placeholder="Enter username">
				<input type="submit" name="submit" value="Submit">
			</form>
			<hr>
			<ul class="messages">
				<?php while($row = mysqli_fetch_assoc($messages)) : ?>
					<li>
						<?= $row['text'] ?> | 
						<?= $row['user'] ?> | 
						<?= $row['create_date'] ?> - 
						<a href="?action=delete&id=<?= $row['id']; ?>">X</a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<footer>
			MessageApp &copy; 2018
		</footer>
	</div>
</body>
</html>
