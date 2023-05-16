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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/teacherIndex.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Routine Maker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="streamSemSec.html">Create TimeTable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="viewStreamSemSec.html">View TimeTable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../../Backend/viewCourseSub.php">View Course
                                and Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../../Backend/logout.php">Logout</a>
                        </li>
                    </ul>
                    <div>
                        <button id="modebtn" type="button" class="btn btn-secondary btn-sm" onclick="changemode()">light
                            mode</button>
                    </div>
                </div>
            </div>
        </nav>
    </nav>
    <h6>user id: <?php echo $row['uid']?></h6>
    <div class="textcont">
        <h1 class="textwelcome">Welcome <?php echo $row['name']?></h1>
    </div>

    <!-- index.js  -->
    <!-- <script src="./teacherIndex.js"></script> -->
    <script>
        window.addEventListener("load", () => {
            if (localStorage.getItem("mode") == "black") {
                document.body.style.background = "black"
                document.getElementById("modebtn").innerHTML = "Dark Mode";
            }
            else {
                document.body.style.background = "white";
                document.getElementById("modebtn").innerHTML = "Light Mode";
            }
        })

        function changemode() {
            if (document.body.style.background == "white") {
                document.body.style.background = "black"
                document.body.style.color = "wheat"
                document.getElementById("modebtn").innerHTML = "Dark Mode";
                localStorage.setItem("mode", "black");
            }
            else {
                document.body.style.background = "white"
                document.body.style.color = "black"
                document.getElementById("modebtn").innerHTML = "Light Mode";
                localStorage.setItem("mode", "white");
            }
        }
    </script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>