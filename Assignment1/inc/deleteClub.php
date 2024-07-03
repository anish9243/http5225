<?php
include('functions.php');
require('../reusable/con.php');

if (isset($_GET['deleteClub'])) {
    $Rank = $_GET['Rank'];
    $query = "DELETE FROM clubs WHERE `Rank` = '$Rank'";
    $club = mysqli_query($connect, $query);

    if ($club) {
        set_message('Club was deleted successfully!', 'danger');
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "Not Authorized";
}
?>
