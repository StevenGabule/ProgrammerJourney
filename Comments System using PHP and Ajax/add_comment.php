<?php

	$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
	$error = '';
	$comment_name = '';
	$comment_content = '';

	if(empty($_POST["comment_name"])) {
		$error .= '<p class="text-danger">Name is required</p>';
	} 

	if(empty($_POST["comment_content"])) {
		$error .= '<p class="text-danger">Comment is required</p>';
	}

	if($error == '') {
		$query = "INSERT INTO tbl_comment(parent_comment_id, comment, comment_sender_name) VALUES(:parent_comment_id, :comment, :comment_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(array(
			':parent_comment_id' => $_POST["comment_id"],
			':comment' => $_POST["comment_content"],
			':comment_sender_name' => $_POST["comment_name"]));
		$error = '<label class="text-success">Comment Added</label>';
	}

	$data = array('error' => $error);
	echo json_encode($data);