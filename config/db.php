<?php
try {
	$conn=new PDO("mysql:host=localhost;dbname=pb-cv;charset=utf8","root","root");
} catch (PDOException $e) {
	echo $e->getMessage();
}
