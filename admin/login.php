<?php
    include "../config/db.php";
    include "functions.php";
    session_start();
    sessionControl() ? header("Location: index") : "";
    if (isset($_POST)){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = $conn->prepare("SELECT * FROM admin WHERE email=?");
         $query->execute(array($email));
            if ($query->rowCount())
            {
                $out = $query->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $out["password"]))
                {
                    $_SESSION["admin"] = $out["email"];
                    $message = "Giriş başarılı :)";
                    header("Refresh: 0; url=index.php");
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                else
                {
                    $message = "Giriş başarısız :X";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
        }
?>

<!doctype html>
<html lang="tr">
<head>
    <title>Login Panel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        body,
        html {
            background-image: url('https://i.imgur.com/xhiRfL6.jpg');
            height: 100%;
        }

        #profile-img {
            height: 180px;
        }

        .h-80 {
            height: 80% !important;
        }
    </style>
</head>

<body>
    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin" method="POST" action="">
                        <input type="email" name="email" id="inputEmail" class="form-control form-group" placeholder="email" required autofocus>
                        <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Giriş</button>
                    </form><!-- /form -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>