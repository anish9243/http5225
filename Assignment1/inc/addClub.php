<?php

include('functions.php');
if (isset($_POST['addClub'])) {
    // Print the posted data for debugging purposes
    // print_r($_POST);
    $Club_Name = $_POST['Club_Name'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];
    $Website = $_POST['Website'];

    // Connection string
    include('../reusable/con.php');
    $query = "INSERT INTO clubs (`Club_Name`, `location`, `capacity`, `Website`) VALUES (
        '" . mysqli_real_escape_string($connect, $Club_Name) . "',
        '" . mysqli_real_escape_string($connect, $location) . "',
        '" . mysqli_real_escape_string($connect, $capacity) . "',
        '" . mysqli_real_escape_string($connect, $Website) . "')";

    $club = mysqli_query($connect, $query);

    if ($club) {
        set_message('Club was added successfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "Not Authorized";
}
?>
