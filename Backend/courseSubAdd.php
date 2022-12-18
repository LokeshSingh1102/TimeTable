<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container my3">
        <form action="/College Major Project/courseSubAdd.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="Cname" name="Cname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Semester</label>
                <input type="number" class="form-control" id="semester" name="semester">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subject 1</label>
                <input type="text" class="form-control" id="sub1" name="sub1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subject 2</label>
                <input type="text" class="form-control" id="sub2" name="sub2">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subject 3</label>
                <input type="text" class="form-control" id="sub3" name="sub3">
            </div>
            
            <div class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html> -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include('config.php');
    $cname = $_POST['Cname'];
    $sem = $_POST['sem'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    
    if(isset($_POST['Cname'])){
        $sql = "INSERT INTO `course_subjects` (`sno`, `Cname`, `Semester`, `Sub1`, `Sub2`, `Sub3`) VALUES (NULL, '$cname', '$sem', '$sub1', '$sub2', '$sub3')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        echo '<script>
            alert("The record was inserted successfully!")
            // window.location.href= "";
            history.go(-1);
        </script>';
    }
    else{
        echo '<script>
            alert("The record was not inserted successfully!")
        </script>';
    }
    }
}
?>