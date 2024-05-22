<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hour = rand(1, 24);
    echo $hour;
    echo "<br>";
    if ($hour >= 6 && $hour < 12) {
        echo "Good Morning";
    } else if ($hour >= 12 && $hour < 18) {
        echo "Good Afternoon";
    } else if ($hour >= 18 && $hour < 21) {
        echo "Good Evening";
    } else if (($hour >= 21 && $hour <= 24) || ($hour > 0 && $hour < 6)) {
        echo "Good Night";
    }
    echo "<br><br>";


    $randomNumber = rand(0, 1000);
    echo $randomNumber;
    echo "<br>";

    if ($randomNumber % 3 == 0 && $randomNumber % 5 == 0) {
        echo "FizzBuzz";
    } else if ($randomNumber % 3 == 0) {
        echo "Fizz";
    } else if ($randomNumber % 5 == 0) {
        echo "Buzz";
    } else {
        echo "Magic Number!!";
    }

    ?>
</body>

</html>