<?php
include "config/db.php";

error_reporting(0);
$query = $conn->prepare("SELECT * FROM cv Where id=?");
$query->execute(array(1));
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
  <?php require_once "inc/header.php"; ?>
  <meta name="description" content="<?= $content->description; ?>" />
  <meta name="keywords" content="<?= $content->keywords; ?>" />
  <meta name="author" content="<?= $content->author; ?>" />
</head>

<body>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <div class="resume-wrapper">
    <section class="profile section-padding">
      <div class="container">
        <div class="picture-resume-wrapper">
          <div class="picture-resume">
            <span><img src="img/resim.jpg" alt="" /></span>
            <svg version="1.1" viewBox="0 0 350 350">

              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
                </filter>
              </defs>


              <g filter="url(#goo)">

                <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130" />

                <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7" />
                <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7" />

              </g>
            </svg>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="name-wrapper">
          <h1><?= $content->fname; ?> <br /><?= $content->lname; ?></h1><!-- YOUR NAME AND LAST NAME  -->
        </div>
        <div class="clearfix"></div>
        <div class="contact-info clearfix">
          <ul class="list-titles">
            <li>Telefon</li>
            <li>Mail</li>
            <li>Web</li>
            <li>Adres</li>
          </ul>
          <ul class="list-content ">
            <li><?= $content->phone; ?></li> <!-- YOUR PHONE NUMBER  -->
            <li><?= $content->email; ?></li> <!-- YOUR EMAIL -->
            <li><a href="#"><?= $content->website; ?></a></li> <!-- YOUR WEBSITE  -->
            <li><?= $content->address; ?></li> <!-- YOUR STATE AND COUNTRY  -->
          </ul>
        </div>
        <div class="contact-presentation">
          <!-- YOUR PRESENTATION RESUME  -->
          <p> <?= $content->about; ?> </p>
        </div>
        <div class="contact-social clearfix">
          <ul class="list-titles">
            <li>Github</li>
            <li>Linkedin</li>
          </ul>
          <ul class="list-content">
            <!-- REMEMBER TO PUT THE URL ON THE HREF TAG  -->
            <li><a href=""><?= $content->github; ?></a></li> <!-- YOUR TWITTER USER  -->
            <li><a href=""><?= $content->linkedin; ?></a></li> <!-- YOUR DRIBBBLE USER  -->
          </ul>
        </div>
      </div>
    </section>

    <section class="experience section-padding">
      <div class="container">
        <h3 class="experience-title">Eğitim</h3>
        <div class="experience-wrapper">
          <?php
          foreach ($queryedu as $edu) {
            echo '
      	<div class="company-wrapper clearfix">
      		<div class="experience-title">' . $edu["schoolname"] . '</div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time">' . $edu["edutime"] . '</div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
      	</div>
        
        <div class="job-wrapper clearfix">
        	<div class="experience-title">' . $edu["edutitle"] . '</div> <!-- JOB TITLE  -->
          <div class="company-description">
          	<p>' . $edu["edudes"] . '</p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>';
          }
          ?>

          <h3 class="experience-title">Deneyim</h3>

          <?php
          foreach ($queryexper as $exper) {
            echo '
        <div class="company-wrapper clearfix">
      		<div class="experience-title">' . $exper["companyname"] . '</div>
          <div class="time">' . $exper["expertime"] . '</div> 
      	</div>
        
        <div class="job-wrapper clearfix">
        	<div class="experience-title">' . $exper["expertitle"] . '</div>
          <div class="company-description">
          	<p>' . $exper["experdes"] . '</p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>';
          }
          ?>
        </div>

        <div class="section-wrapper clearfix">
          <h3 class="section-title">Yetenekler</h3> <!-- YOUR SET OF SKILLS  -->
          <?php
          foreach ($queryskill as $skill) {
            echo '
        	<ul>
        		<li class="skill-percentage">' . $skill["skillname"] . '</li>
          </ul>';
          }
          ?>
        </div>

        <div class="section-wrapper clearfix">
          <h3 class="section-title">Hobiler</h3> <!-- DESCRIPTION OF YOUR HOBBIES -->
          <p><?= $content->hobby; ?></p>
        </div>

      </div>
    </section>

    <div class="clearfix"></div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
  <script src="assets/js/index.js"></script>

</body>

</html>