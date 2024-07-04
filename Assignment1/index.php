<?php include('reusable/con.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Night Clubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./reusable/style.css">
</head>

<body>
    <?php include('reusable/nav.php'); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5 text-center">Top Night Clubs</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('inc/functions.php');
    $connect = mysqli_connect('localhost', 'root', 'root', 'Http5225');
    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    $query = 'SELECT * FROM clubs';
    $clubs = mysqli_query($connect, $query);
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                get_message();

                foreach ($clubs as $club) {
                    echo '<div class="col-md-4 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="details.php?id=' . $club['Rank'] . '">' . $club['Club_Name'] . '</a></h5>
                                    <p class="card-text">' . $club['location'] . '</p>
                                    <span class="badge bg-secondary">' . $club['capacity'] . '</span>
                                    <a href="http://' . $club['Website'] . '" class="badge bg-info" target="_blank">' . $club['Website'] . '</a>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <form action="update.php" method="GET">
                                                <input type="hidden" name="Rank" value="' . $club['Rank'] . '">
                                                <button type="submit" class="btn btn-sm btn-primary" name="updateClub">
                                                    Update
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col text-end">
                                            <form action="inc/deleteClub.php" method="GET">
                                                <input type="hidden" name="Rank" value="' . $club['Rank'] . '">
                                                <button type="submit" name="deleteClub" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
