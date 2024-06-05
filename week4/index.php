<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row"> 
      <div class="h1 mb-5">For() Loop</div> 
          <?php
            function getUsers(){
              $url = "users.json";
              $data = file_get_contents($url);
              //echo gettype($data);
              return json_decode($data, true);
            }
            $users = getUsers();
            if(!empty($users)){
              for($i = 0; $i < count($users); $i++){
                echo
                '<div class="col-md-3">
                  <div class="card mt-2 mb-2" style="">
                    <div class="card-body">
                      <h5 class="card-title">' . $users[$i]['name'] .'</h5>
                      <p class="card-text fw-lighter">' . $users[$i]['username'] . '</p>
                      <p class="card-text fst-italic">' . $users[$i]['phone'] . '</p>
                      <a class="card-text fst-italic pb-3">' . $users[$i]['email'] . '</a>
                      <p class="card-text">' . $users[$i]['address']['street']. ' ' .$users[$i]['address']['suite']. ' '.$users[$i]['address']['city']. ' ' .$users[$i]['address']['zipcode']. '</p>
                      <p class="card-text btn btn-primary">' . $users[$i]['website'] . '</p>
                    </div>
                  </div>
                </div>';
              }
            }
          ?>
        </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="h1 mt-5">Foreach() Loop</div> 
          <?php
            function getUsers2(){
              $url = "users.json";
              $data = file_get_contents($url);
              return json_decode($data, true);
            }
            $users = getUsers2();
            if(!empty($users)){
              foreach($users as $user){
                echo
                '<div class="col-md-3">
                  <div class="card mt-2 mb-2" style="">
                    <div class="card-body">
                      <h5 class="card-title">' . $user['name'] .'</h5>
                      <p class="card-text fw-lighter">' . $user['username'] . '</p>
                      <p class="card-text fst-italic">' . $user['phone'] . '</p>
                      <a class="card-text fst-italic pb-3">' . $user['email'] . '</a>
                      <p class="card-text">' . $user['address']['street']. ' ' .$user['address']['suite']. ' '.$user['address']['city']. ' ' .$user['address']['zipcode']. '</p>
                      <p class="card-text btn btn-primary">' . $user['website'] . '</p>
                    </div>
                  </div>
                </div>';
              }
            }
          ?>
        </div>
      </div>
</body>
</html>