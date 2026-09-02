<?php
     include "database.php";

    if (isset($_POST['register'])) {

        $student_number = $_POST['student_number'];
        $student_name = $_POST['student_name'];
        $course = $_POST['course'];

        $sql = "INSERT INTO students(
                student_no,
                student_name,
                course
            )
            VALUES(
                '$student_number',
                '$student_name',
                '$course'
            )
    ";
    if(mysqli_query($conn, $sql)){
        header("Location: index.php?info=Student registered successfully!");
        exit();
    }
    else{
        header("Location: index.php?info=".urlencode(mysqli_error($conn)));
        exit();
    }

    }
?>