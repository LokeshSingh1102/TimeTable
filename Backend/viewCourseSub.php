<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view course and subjects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body>
    <nav>
        <a style="cursor: pointer;" onclick="history.back()">Back to home</a>
    </nav>
    <div class="container my-3">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">sno</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Subject-1</th>
                    <th scope="col">Subject-2</th>
                    <th scope="col">Subject-3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `course_subjects`";
                $result = mysqli_query($conn,$sql);
                $sno = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $sno += 1;
                    echo "<tr>
                    <th scope='row'>".$row['sno']."</th>
                    <td>".$row['Cname']."</td>
                    <td>".$row['Semester']."</td>
                    <td>".$row['Sub1']."</td>
                    <td>".$row['Sub2']."</td>
                    <td>".$row['Sub3']."</td>
                  </tr>";
                }
              ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>