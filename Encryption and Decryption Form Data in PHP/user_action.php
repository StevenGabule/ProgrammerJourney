<?php 

include('database_connection.php');
include('function.php');

if (isset($_POST["crud_action"])) {
 if ($_POST["crud_action"] == 'fetch_all') {
  $query = '';
  $output = array();
  $order_column = array('first_name', 'last_name', 'phone', 'email');
  $query .= "SELECT * FROM tbl_user";

  if (isset($_POST["search"]["value"])) {
   $query .= 'WHERE first_name LIKE "%'.convert_string('encrypt', $_POST["search"]["value"]).'%" ';
   $query .= 'OR last_name LIKE "%'.convert_string('encrypt', $_POST["search"]["value"]).'%" ';
   $query .= 'OR phone LIKE "%'.convert_string('encrypt', $_POST["search"]["value"]).'%" ';
   $query .= 'OR email LIKE "%'.convert_string('encrypt', $_POST["search"]["value"]).'%" ';
  }

  if (isset($_POST["order"])) {
   $query .= 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
  } else {
   $query .= 'ORDER BY id DESC ';
  }

  if($_POST["length"] != -1) {
   $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
  }

  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $filtered_rows = $statement->rowCount();

  foreach($result as $row) {
   $sub_array = array();
   $sub_array[] = convert_string('decrypt', $row['first_name']);
   $sub_array[] = convert_string('decrypt', $row['last_name']);
   $sub_array[] = convert_string('decrypt', $row['phone']);
   $sub_array[] = convert_string('decrypt', $row['email']);
   $sub_array[] = '<button type="button" name="update" id="'.convert_string('encrypt', $row["id"]).'" class="btn btn-warning btn-xs update">Update</button>';
   $sub_array[] = '<button type="button" name="delete" id="'.convert_string('encrypt', $row["id"]).'" class="btn btn-danger btn-xs delete">Delete</button>';
   $output[] = $sub_array;
  }

  $data = array(
   "draw"    => intval($_POST["draw"]),
   "recordsTotal"  => $filtered_rows,
   "recordsFiltered" => get_total_all_records($connect),
   "data"    => $output
  );
 } elseif ($_POST["crud_action"] == 'fetch_single') {
  $id = convert_string('decrypt', $_POST["id"]);
  $query = "SELECT * FROM tbl_user WHERE id = '$id'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row) {
   $data['first_name'] = convert_string('decrypt', $row['first_name']);
   $data['last_name'] = convert_string('decrypt', $row['last_name']);
   $data['phone'] = convert_string('decrypt', $row['phone']);
   $data['email_address'] = convert_string('decrypt', $row['email']);
  }
 } elseif($_POST["crud_action"] == 'Delete') {
  $id = convert_string('decrypt', $_POST["id"]);
  $query = "DELETE FROM tbl_user WHERE id = '$id'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = array(
   'message'  => '<div class="alert alert-success">User Deleted</div>'
  );
 } else {
  $message = '';
  $error = '';
  $first_name = '';
  $last_name = '';
  $phone = '';
  $email_address = '';
  if(empty($_POST["first_name"])) {
   $error .= '<p class="text-danger">First Name is Required</p>';
  } else {
   if (!preg_match("/^[a-zA-Z]*$/",$_POST["first_name"])) {
    $error .= '<p class="text-danger">Only Alphabet allowed in First Name</p>';
   } else {
    $first_name = clean_text($_POST["first_name"]);
   }
  }
  
  if(empty($_POST["last_name"])) {
   $error .= '<p class="text-danger">Last Name is Required</p>';
  } else {
   if (!preg_match("/^[a-zA-Z]*$/",$_POST["last_name"])) {
    $error .= '<p class="text-danger">Only Alphabet allowed in Last Name</p>';
   } else {
    $last_name = clean_text($_POST["last_name"]);
   }
  }
  
  if(empty($_POST["phone"])) {
   $error .= '<p class="text-danger">Phone Number is Required</p>';
  } else {
   if (!preg_match("/^[0-9]*$/",$_POST["phone"])) {
    $error .= '<p class="text-danger">Only Numbers allowed in Phone</p>';
   } else {
    $phone = clean_text($_POST["phone"]);
   }
  }
  
  if(empty($_POST["email_address"])) {
   $error .= '<p class="text-danger">Email Address is Required</p>';
  } else {
   if (!filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
    $error .= '<p class="text-danger">Invalid email format</p>'; 
   } else {
    $email_address = clean_text($_POST["email_address"]);
   }
  }
  
  if ($error == '') {
   $first_name = convert_string('encrypt', $first_name);
   $last_name = convert_string('encrypt', $last_name);
   $phone = convert_string('encrypt', $phone);
   $email_address = convert_string('encrypt', $email_address);
   if ($_POST["crud_action"] == "Add") {
    $query = "SELECT * FROM tbl_user WHERE email = '$email_address'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $no_of_row = $statement->rowCount();
    if($no_of_row > 0) {
     $error = '<div class="alert alert-danger">Email Already Exists</div>';
    } else {
     $query = "
     INSERT INTO tbl_user (first_name, last_name, phone, email) 
     VALUES('".$first_name."', '".$last_name."', '".$phone."', '".$email_address."')
     ";
     $message = '<div class="alert alert-success">User Added</div>';
    }
   }
   if($_POST["crud_action"] == "Edit") {
    $id = convert_string('decrypt', $_POST["id"]);
    $query = "
    UPDATE tbl_user 
    SET first_name = '$first_name', 
    last_name = '$last_name', 
    phone = '$phone', 
    email = '$email_address' 
    WHERE id = '$id'
    ";
    $message = '<div class="alert alert-success">User Edited</div>';
   }
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   if(isset($result)) {
    $data = array(
     'error'   => $error,
     'message'  => $message
    );
   }
  } else {
   $data = array(
    'error'   => $error,
    'message'  => $message
   );
  }
 }
 echo json_encode($data);
}

?>