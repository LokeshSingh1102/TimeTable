<?php
include('../../Backend/config.php');
// include('header.php');
include('../../Backend/log_auth.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="../CSS/teacherIndex.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="./teacherIndex.html">Routine Maker</a>
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <!-- <li>
                    <a href="Teacher Details.html">Details</a>
                </li> -->

                <li>
                    <a href="./streamSemSec.html">Create</a>
                </li>

                <li>
                    <a href="./viewStreamSemSec.html">View</a>
                </li>

                <li>
                    <a href="../../Backend/viewCourseSub.php">Course & Subjects</a>
                </li>

                <li>
                    <a href="../../Backend/logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    <h4>User id: <?php echo $row['uid']?></h4>
    <section>
        <h1 class="fadein">Welcome <?php echo $row['name']?></h1>
    </section>

</body>

</html>