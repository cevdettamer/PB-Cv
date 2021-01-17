<?php
include "../config/db.php";
include "functions.php";
session_start();
!sessionControl() ? header("Location: index") : "";

$query = $conn->prepare("Select * From cv");
$query->execute();
$content = $query->fetch(PDO::FETCH_OBJ);

$queryedu = $conn->prepare("Select schoolname, edutime, edutitle, edudes From education");
$queryedu->execute();

$queryexper = $conn->prepare("Select companyname, expertime, expertitle, experdes From experiments");
$queryexper->execute();

$queryskill = $conn->prepare("Select skillname, skillrate From skill");
$queryskill->execute();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body>

</body>
</html>