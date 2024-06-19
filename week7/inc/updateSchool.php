<?php
include('functions.php');
if (isset($_POST['updateSchool'])) {
    // Connection string
    require('../reusable/con.php');
    // print_r($_POST);
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "UPDATE `schools` SET 
    `School Name`='" . mysqli_real_escape_string($connect, $schoolName) . "',
    `School Level`='" . mysqli_real_escape_string($connect, $schoolLevel) . "',
    `Phone`='" . mysqli_real_escape_string($connect, $phone) . "',
    `Email`='" . mysqli_real_escape_string($connect, $email) . "' WHERE 
    `id`='" . mysqli_real_escape_string($connect, $id) . "'";
    $school = mysqli_query($connect, $query);

    if ($school) {
        set_message('School was updated sucessfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "Not Authorized";
}
