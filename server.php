<?php

// $mysqli = new mysqli('localhost', 'root', '', 'test');

// if ($mysqli->connect_error) {
//     die('error (' . $mysqli->connect_error . ') '
//         . $mysqli->connect_error);
// }

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mysqltojson';

$connect = mysqli_connect($host, $username, $password, $database);
$sql = "SELECT * FROM country_list";
$result = mysqli_query($connect, $sql);
$json_array();

while($data = mysqli_fetch_assoc($result))
{
    $json_array[] = $data;
}

echo json_encode($json_array)

?>

<!-- for Order by -->
<!-- $dbh = new PDO('mysql:dbname=db_name;host=localhost', 'login', 'password');
$sth = $dbh->prepare("SELECT * FROM `country_list` ORDER BY `name`");
$sth->execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC); -->

 <!-- Checking the GET variable 
$sort = @$_GET['sort'];
if (array_key_exists($sort, $sort_list)) {
	$sort_sql = $sort_list[$sort];
} else {
	$sort_sql = reset($sort_list);
}
 
/* query */
$dbh = new PDO('mysql:dbname=db_name;host=localhost', 'login', 'password');
$sth = $dbh->prepare("SELECT * FROM `country_list` ORDER BY {$sort_sql}");
$sth->execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC);
 
/* Link output function */
function sort_link_th($title, $a, $b) {
	$sort = @$_GET['sort'];
 
	if ($sort == $a) {
		return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▲</i></a>';
	} elseif ($sort == $b) {
		return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▼</i></a>';  
	} else {
		return '<a href="?sort=' . $a . '">' . $title . '</a>';  
	}
} -->

