<?php

include_once('connection.php');


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];

$sql = "INSERT INTO login (first_name, last_name)
VALUES ('$first_name', '$last_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include_once('getuser.php');

?>