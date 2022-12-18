<?php
if(isset($newSubject)){
    while($newSubject){
        $newSubject = $newSubject - 1;
        // checking the number of subjects
        $sqll = "SELECT * FROM `course_subjects`";
        $result = mysqli_query($conn,$sqll);
        $coursesNo = mysqli_num_fields($result) - 2;
        $lastSubNo = $coursesNo - 1;
        $sql = "ALTER TABLE `course_subjects` ADD `Sub.$coursesNo` VARCHAR(35) NULL DEFAULT NULL AFTER `Sub.$lastSubNo`";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '<script>
                alert("The subject was inserted successfully!")
            </script>';
        }
        else{
            echo '<script>
                alert("The subject was not inserted successfully!")
            </script>';
        }
    }
}
?>