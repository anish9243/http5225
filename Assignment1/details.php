<?php include('./reusable/con.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-z3DJNc2N9tF3Ha9O0C5Fvyb4BqRq3BFT0F2ANkAs/trK4-7PUGktNlvzQs5Zz7N3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reusable/style.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header, .card-footer {
            background-color: #f8f9fa;
            border: none;
        }
        .card-title {
            color: #007bff;
        }
    </style>
</head>
<body>
    <?php include('./reusable/nav.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $connect = mysqli_connect('localhost', 'root', 'root', 'Http5225');
                    if (!$connect) {
                        die("Connection Failed: " . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM clubs WHERE Rank = $id";
                    $result = mysqli_query($connect, $query);

                    if (mysqli_num_rows($result) > 0) {
                        $club = mysqli_fetch_assoc($result);
                        echo '<div class="card">';
                        echo '<div class="card-header">';
                        echo '<h1 class="card-title">' . $club['Club_Name'] . '</h1>';
                        echo '</div>';
                        echo '<div class="card-body">';
                        echo '<p><strong>Location:</strong> ' . $club['location'] . '</p>';
                        echo '<p><strong>Capacity:</strong> ' . $club['capacity'] . '</p>';
                        echo '<p><strong>Website:</strong> <a href="http://' . $club['Website'] . '" target="_blank">http://' . $club['Website'] . '</a></p>';
                        echo '<p><strong>Description:</strong> ' . $club['text'] . '</p>';
                        echo '</div>';
                        echo '<div class="card-footer">';
                        echo '<a href="index.php" class="btn btn-secondary">Back</a>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<p class="text-danger">Club not found.</p>';
                    }
                    mysqli_close($connect);
                } else {
                    echo '<p class="text-danger">No club ID provided.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
