<?php
include('../reusable/con.php');
include('functions.php');


if(isset($_POST['updateClub'])) {
    $Rank = $_POST['Rank'];
    $clubName = $_POST['clubName'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];
    $website = $_POST['website'];

    $query = "UPDATE clubs SET 
                Club_Name = '$clubName', 
                location = '$location', 
                capacity = '$capacity', 
                Website = '$website'
              WHERE Rank = '$Rank'";

    if(mysqli_query($connect, $query)) {
        set_message('Club was updated sucessfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}
?>
