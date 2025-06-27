<?php
$firstname = "Hershey";
$lastname = "Castro";
$program = "BS Information Technology - Cybersecurity";
$email = "hersheycastro930@gmail.com";
$number = "09541865978";
$bio = 'I am Hershey B. Castro, an IT student passionate about developing both technical and soft skills by actively participating in organizations and attending workshops. Through hands-on learning and engagement, I strive to grow in my field while building meaningful connections and experiences.';

$title1 = "Work Experiences";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESUME</title>

    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <div class="resume-top">
        <div class="info-box1">
            <div class="left">
                <img id="hershey-pic" src="hershey.jpg" alt="Avatar">
            </div>
            <div class="right">
                <h2><?php echo $firstname . ' ' . $lastname; ?></h2>
                <p id="program"><?php echo $program; ?></p>
                <p id="contact-info"><?php echo $email . ' | ' . $number; ?></p>
                <p id="bio"><?php echo $bio; ?></p>
            </div>
        </div>
    </div>

    <div class="resume-bottom">
        <div class="info-box2">
            
        </div>
    </div>
</body>

</html>