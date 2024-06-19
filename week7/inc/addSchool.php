<?php

    include('functions.php');
    if (isset($_POST['addSchool'])) {
        // print_r($_POST);
        $schoolName = $_POST['schoolName'];
        $schoolLevel = $_POST['schoolLevel'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // Connection string
        include('../reusable/con.php');
        $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES ('$schoolName', '$schoolLevel', '$phone', '$email')";

        $school = mysqli_query($connect, $query);

        if ($school) {
            set_message('School was added sucessfully!', 'success');
            header("Location: ../index.php");
        } else {
            echo "Failed: " . mysqli_error($connect);
        }
    } else {
        echo "Not Authorized";
    }
