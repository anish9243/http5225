<?php include('reusable/con.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top Clubs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-z3DJNc2N9tF3Ha9O0C5Fvyb4BqRq3BFT0F2ANkAs/trK4-7PUGktNlvzQs5Zz7N3" crossorigin="anonymous"></script>
    </head>

<body>
    <?php include('reusable/nav.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-4">All Schools</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="inc/addClub.php" method="POST">
                    <div class="mb-3">
                        <label for="Club_Name" class="form-label">Club Name</label>
                        <input type="text" class="form-control" id="Club_Name" name="Club_Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity</label>
                        <input type="number" class="form-control" id="capacity" name="capacity">
                    </div>
                    <div class="mb-3">
                        <label for="Website" class="form-label">Website</label>
                        <input type="url" class="form-control" id="Website" name="Website">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Description</label>
                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="addClub">Add Club</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
