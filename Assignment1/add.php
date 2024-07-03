<?php include('reusable/con.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Clubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('reusable/nav.php'); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5">All Schools</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="inc/addClub.php" method="POST">
                        <div class="mb-3">
                            <label for="Club_Name" class="form-label">Club Name</label>
                            <input type="text" class="form-control" id="Club_Name" name="Club_Name" aria-describedby="schoolName">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="text" class="form-control" id="capacity" name="capacity">
                        </div>
                        <div class="mb-3">
                            <label for="Website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="Website" name="Website">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <input type="text" class="form-control" id="text" name="text">
                        </div>
                        <button type="submit" class="btn btn-primary" name="addClub">Add Club</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>