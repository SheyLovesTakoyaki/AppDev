<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASTRO</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container">
        <h2>About Me ˚ ༘ ೀ⋆｡˚</h2>
        <div class="info">
            <?php
            $fullname = "Hershey B. Castro";
            $section = "TC21";
            $course = "CCS0043";
            $status = true;
            $courses = array(
                "CCS0043" => "TC21",
                "CCS0043L" => "TC21",
                "CCS0103" => "TC22",
                "GED0031" => "TV04",
                "GED0081" => "TC21",
                "GED0081L" => "TC21",
                "IT0202" => "TC21",
                "IT0203" => "TC22"
            );
            $three_fave_movies = array("Tangled", "Kita kita", "Through Night and Day");
            $fun_facts_me = array("I love reading", "I feel left behind when I'm just 19", "I doubt myself too much");

            if ($status) {
                $status = "ENROLLED";
            } else {
                $status = "NOT ENROLLED";
            }

            echo "Fullname: <strong>{$fullname}</strong><br>";
            echo "Section: <strong>{$section}</strong><br>";
            echo "Course: <strong>{$course}</strong><br>";
            echo "Enrollment Status: <strong>{$status}</strong>";

            echo "<strong><br><br>Hi, Cutie! I'm Hershey! A BSIT - Cybersecurity student who loves to debug (depends), chess, and eat!
    <br> Bit by bit, bulding my soft and technical skills. I use my free time to up-skill and gain new knowledge everyday.</strong>";

           echo "<br><table class='courses-table'>
            <tr class='header-row'>
            <th>Courses</th>
            <th>Section</th>
            </tr><br>";
            foreach ($courses as $course => $section) {
                echo "<tr>";
                echo "<th> {$course} </th>";
                echo "<th>" . $section . "</th>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<br><strong>My Top 3 Favourite Movies </strong><br>";
            $counter = 1;
            foreach ($three_fave_movies as $movie) {
                echo "{$counter}. {$movie} <br>";
                $counter++;
            }
            
            echo "<br><table class='mood-table'>
            <tr>
            <th>Full Stomach</th>
            <th>Empty Stomach</th>
            </tr>
            <tr>
            <th><img src=\"happycat.jpg\" alt=\"Image\"></th>
            <th><img src=\"sadcat.jpg\" alt=\"Image\"></th>
            </tr>
            </table>";

            echo "<br><br><strong>FUN FACTS: </strong><br>";
            foreach ($fun_facts_me as $fact) {
                echo "{$counter}. {$fact} <br>";
                $counter++;
            }
            ?>
        </div>
    </div>
</body>

</html>