<?php
include "../config/db.php";
include "functions.php";
session_start();
!sessionControl() ? header("Location: login.php") : "";

$query = $conn->prepare("Select * From cv");
$query->execute();
$content = $query->fetch(PDO::FETCH_OBJ);

$queryedu = $conn->prepare("Select schoolname, edutime, edutitle, edudes From education");
$queryedu->execute();
$contentedu = $queryedu->fetchAll(PDO::FETCH_ASSOC);

$queryexper = $conn->prepare("Select companyname, expertime, expertitle, experdes From experiments");
$queryexper->execute();
$contentexper = $queryexper->fetchAll(PDO::FETCH_ASSOC);

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
    <div class="container">
        <div class="row m-5">
            <div class="col-md-12 text-center">
                <h1>Admin Paneli</h1>
            </div>
        </div>
        <form action="" id="admin-form" method="POST">
            <div class="form-group">
                <label>Web site başlığı</label>
                <input type="text" class="form-control" name="txttitle" value="<?= $content->title; ?>">
            </div>
            <div class="form-group">
                <label>Web site açıklaması</label>
                <input type="text" class="form-control" name="txtdescription" value="<?= $content->description; ?>">
            </div>
            <div class="form-group">
                <label>Web site anahtar kelimeler</label>
                <input type="text" class="form-control" name="txtkeywords" value="<?= $content->keywords; ?>">
            </div>
            <div class="form-group">
                <label>Web site author</label>
                <input type="text" class="form-control" name="txtauthor" value="<?= $content->author; ?>">
            </div>

            <div class="form-group">
                <label>Telefon</label>
                <input type="text" class="form-control" name="txtphone" value="<?= $content->phone; ?>">
            </div>
            <div class="form-group">
                <label>Mail</label>
                <input type="email" class="form-control" name="txtemail" value="<?= $content->email; ?>">
            </div>
            <div class="form-group">
                <label>Web Site</label>
                <input type="text" class="form-control" name="txtsite" value="<?= $content->website; ?>">
            </div>
            <div class="form-group">
                <label>Adres</label>
                <div class="textarea">
                    <textarea name="txtAddress" class="ckeditor">
                        <?= ($content->address); ?>
                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <label>Hakkımda</label>
                <div class="textarea">
                    <textarea name="txtAbout" class="ckeditor">
                        <?= ($content->about); ?>
                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <label>Github</label>
                <input type="text" class="form-control" name="txtgithub" value="<?= $content->github; ?>">
            </div>
            <div class="form-group">
                <label>Linkedin</label>
                <input type="text" class="form-control" name="txtlinkedin" value="<?= $content->linkedin; ?>">
            </div>

            <div class="form-group">
                <label>Hobiler</label>
                <div class="textarea">
                    <textarea name="txtHobby" class="ckeditor">
                        <?= ($content->hobby); ?>
                    </textarea>
                </div>
            </div>



            <div class="col-md-12 text-center">
                <button class="btn btn-primary btn-lg" type="submit">Kaydet</button>
                <a href="logout.php" class="btn btn-danger btn-md">Çıkış Yap</a>
            </div>
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>