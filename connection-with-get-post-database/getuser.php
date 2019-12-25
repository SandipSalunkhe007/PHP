<?php
include_once('connection.php');

$sql = "SELECT first_name,last_name FROM login";
$result = $conn->query($sql);

$str = "<table border=1>
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
		</tr>
	</thead>
	<tbody>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$str.="<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td></tr>"; 
    }
} else {
    echo "0 results";
}
$str.='</tbody>
</table>';
echo $str;

?>