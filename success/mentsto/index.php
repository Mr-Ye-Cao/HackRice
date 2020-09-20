<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/control.css">
</head>

<body>
    <div class="backg">
        <nav class=" navbar navbar-expand-lg navbar-light bg-warning shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#" font="arial">Embrace</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <a class="navbar-brand" href="../chat" font="arial">Chat with Mentor</a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="team1 cid-sb3kpQP9Lk" id="team1-2">
            <div class="container align-center">
                <h1 style="font-family: 'Courier New', Courier, monospace;" class="pb-3 mbr-fonts-style mbr-section-title display-2">
                    Meet The Mentor</h1>
                <h6 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">
                    Take a look at their stories!</h6>
               
                <div class="row media-row">


<!--                     
                    <div class="team-item col-lg-3 col-md-6">
                        <div class="hovereffect">
                            <img style="height: 90%; width: 100%;" src="assets/images/face2.jpg" alt="">
                            <div class="overlay">
                                <h2>mentora</h2>
                                <a class="info" href="mentora.html">my story</a>
                            </div>
                        </div>
                    </div>
-->
                  

                  <?php
                    require '../../inc/db.php';
                    $sql = "SELECT * FROM story";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()){
                      $mtnb = $row['mtnb'];
                      $sto = $row['sto'];

                      $sql = "SELECT * FROM mn WHERE id = ${mtnb}";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();

                      $name = $row['name'];

                        echo 
                        "
                          <div class='team-item col-lg-3 col-md-6'>
                            <div class='hovereffect'>
                              <img style='height: 90%; width: 100%;' src='assets/images/face2.jpg' alt=''>
                              <div class='overlay'>
                              <h2>${name}</h2>
                              <a class='info' href='./mentora.php?n=${name}&s=${sto}'>my story</a>
                            </div>
                            </div>
                          </div>
                        ";
                    }

                  ?>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/witsec-mailform/witsec-mailform.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>