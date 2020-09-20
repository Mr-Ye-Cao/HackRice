<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Whatsapp UI</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="Container fluid">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #17a2b8;">
        <a class="navbar-brand" style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" href="#">
        <b style="color:red;">E</b>
        <b style="color: orange;">M</b>
        <b style="color: yellow;">B</b>
        <b style="color: green;">R</b>
        <b style="color: blue;">A</b>
        <b style="color: indigo;">C</b>
        <b style="color: purple">E</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../story/index.php" data-target="#exampleModal">Mentor Posts</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand"  href="#">Welcome, 
            <?php             
                session_start();
                $name = $_SESSION['commentor'];  
                echo $name;
            ?>!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    </nav>
    <div class="row">
        <div class=" big Container fluid col">

            <div id="ch"class="chat">
                <div class="chat-header">
                    <div class="profile">

                        <div id="left"class="left">
                            <img src="img/face4.jpeg" class="pp">
                            <h2><?php echo $name; ?> (mentor)</h2>
                        </div>

                        <div class="right">

                            <img src="img/more.png" class="icon">
                        </div>
                    </div>
                </div>

                <div class="chat-box">


        <?php
            require "../../inc/db.php";

            $sql = "SELECT * FROM mn WHERE name='${name}';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $id = $row['id'];

            $ident = '';
            $chat = "";

            $sql = "SELECT * FROM chat;";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
                $l = explode('.', $row["sm"]);

                    print($id);
                if($l[0] == $id || $l[1] == $id){
                    $chat = $row["dialog"];

                    $ident = $row["sm"];
                    break;
                }
            }

            $arr = explode('<Finish>', $chat);

            for ($i=0; $i < count($arr)-1; $i++) {
              $part = explode('<say>', $arr[$i]);

              if($part[0]==$name){
                 echo 
                    "
                    <div class='chat-l'>
                        <div class='mess'>
                            <p>
                                ${part[0]}
                            </p>
                            <div class='check'>
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class='sp'></div>
                    </div>

                    "; 
              }else{
                echo 
                    "
                    <div class='chat-r'>
                        <div class='mess'>
                            <p>
                                ${part[1]}
                            </p>
                            <div class='check'>
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class='sp'></div>
                    </div>
                "; 
              }          
            }            
        ?>

        

                  
                    
                <div id="left" class="chat-footer" style="position: absolute;  bottom: 0px; width: 90%">
                    <form method="POST" action="../../inc/co.php?id=<?php echo $ident; ?>" style="width: 100%;">
                        <div class="row">
                            <textarea class="col-md-11" name="comment" style="width: 75;"placeholder="Type a message"></textarea>
                            <button style="width: 80px;"class="btn btn-success" type="submit">send</button>
                        </div>
                    </form> 
                </div>
            
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

