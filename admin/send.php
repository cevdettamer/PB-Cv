<?php 
include "../config/db.php";

if ($_POST['update']) {
    $title = $_POST['txttitle'];
    $description = $_POST['txtdescription'];
    $keywords = $_POST['txtkeywords'];
    $author = $_POST['txtauthor'];
    $phone = $_POST['txtphone'];
    $email = $_POST['txtemail'];
    $site = $_POST['txtsite'];
    $address = $_POST['txtAddress'];
    $about = $_POST['txtAbout'];
    $github = $_POST['txtgithub'];
    $linkedin = $_POST['txtlinkedin'];
    $hobby = $_POST['txtHobby'];

    $query_cv = $conn->prepare("UPDATE cv SET title=?, description=?, keywords=?, author=?, phone=?, email=?, website=?, address=?, about=?, github=?, linkedin=?, hobby=? Where id=?");
    $query_cv->execute(array($title, $description, $keywords, $author, $phone, $email, $site, $address, $about, $github, $linkedin, $hobby, 1));
    $error = $query_cv->errorInfo();
    if (empty($error[2])){
      //echo "update basarili";
      header("Location: index.php");
    }else{
      //echo "update basarisiz".$error[2];
    }
  }