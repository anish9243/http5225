<?php
include('reusable/con.php');
$Rank = $_GET['Rank'];
$query = "SELECT * FROM clubs WHERE `Rank` = '$Rank'";
$club = mysqli_query($connect, $query);
$result = $club->fetch_assoc();
?>
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
                    <h1 class="display-4 mt-5 mb-5">Update <?php echo $result['Club_Name'] ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="inc/updateClub.php" method="POST">
                        <input type="hidden" value="<?php echo $Rank ?>" name="Rank">
                        <div class="mb-3">
                            <label for="clubName" class="form-label">Club Name</label>
                            <input type="text" class="form-control" id="clubName" name="clubName" aria-describedby="clubName" value="<?php echo $result['Club_Name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="<?php echo $result['location'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="text" class="form-control" id="capacity" name="capacity" value="<?php echo $result['capacity'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="website" name="website" value="<?php echo $result['Website'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="updateClub">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
