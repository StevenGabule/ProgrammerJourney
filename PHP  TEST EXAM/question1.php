<?php
/**
  QUESTION 1
  Step 1
  Create a simple HTML table that has 3 rows and 2 columns.
 *
  Step 2
  Into the first column, enter labels for Firstname, Surname and ID Number and in the second column
  put in input fields where a user can enter their Firstname, Surname and ID Number.

  Step 3
  Create a form that will submit this information to the same page

  Step 4
  On the same page, take the submitted information and write a SQL query
  that will insert the posted information into a table called tbl_Person, that has columns
  col_firstname, col_surname, col_idnumber.

  Note: It's optional whether you want to write code that connects to a database and code
  that inserts into the database. We just want to see the SQL query, that uses the posted
  variables to insert into table person
*/
?>
<!-- SUPPLY YOUR ANSWER BELOW THIS COMMENT -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_db";

// sanitize and remove cross-site scripting
function dataInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {

    $firstname = dataInput($_POST['firstname']);
    $surname = dataInput($_POST['surname']);
    $id_number = dataInput($_POST['id_number']);
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO tbl_person (col_firstname, col_surname, col_idnumber) VALUES (:firstname, :surname, :idNumber)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':idNumber', $id_number);
        $stmt->execute();
        echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 1 - Answer </title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Id Number</td>
            <td><input type="text" name="id_number" placeholder="ID Number" required></td>
        </tr>

        <tr>
            <td>Firstname</td>
            <td><input type="text" name="firstname" placeholder="Firstname" required></td>
        </tr>

        <tr>
            <td>Surname</td>
            <td><input type="text" name="surname" placeholder="Surname" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<br>
<h4>All the register personnel</h4>
<table border="1">

    <tr>
        <td>ID Number: </td>
        <td></td>
    </tr>

    <tr>
        <td>Firstname:</td>
        <td></td>
    </tr>
    <tr>
        <td>Surname:</td>
        <td></td>
    </tr>

</table>
</body>
</html>
