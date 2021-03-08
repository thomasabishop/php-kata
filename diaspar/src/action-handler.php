<?php

$author = $_POST['author'];
$title = $_POST['title'];
$rating = $_POST['rating'];
$pub_date = $_POST['pub_date'];

$data_entered = array($author, $title, $rating, $pub_date);
echo "<p>Your entry has been added to the database</p>";
echo "<h3>Data entered:</h3>";

foreach ($data_entered as $val) {
	echo "$val <br />";
}

echo "<p><$author, $title $rating $pub_date </p>";
