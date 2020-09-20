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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #17a2b8;">
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
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">View Student Profile</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand"  href="#">Welcome, username!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    </nav>
    <div class="row">
        <div class=" Container fluid col">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Student Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            $conn=mysqli_connect('localhost','root','root',"ebctest")or die("数据库连接失败");
                            $sql="SELECT q1 FROM stu";
                            $result=mysqli_query($conn,$sql);

                            while($row = $result->fetch_assoc())
                            {
                                echo $row["q1"];

                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat">
                <div class="chat-header">
                    <div class="profile">
                        <div class="left">

                            <img src="img/face4.jpeg" class="pp">
                            <h2>Allen (mentor)</h2>

                        </div>
                        <div class="right">

                            <img src="img/more.png" class="icon">
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="chat-r">
                        <div class="sp"></div>
                        <div class="mess mess-r">
                            <p>
                                Hi, Allen
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                                <img src="img/check-2.png">
                            </div>
                        </div>
                    </div>
                    <div class="chat-l">
                        <div class="mess">
                            <p>
                                Oh! hi 
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class="sp"></div>
                    </div>

                    <div class="chat-r">
                        <div class="sp"></div>
                        <div class="mess mess-r">
                            <p>
                                How are you doing?
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                                <img src="img/check-2.png">
                            </div>
                        </div>
                    </div>
                    <div class="chat-l">
                        <div class="mess">
                            <p>I'm doing alright. How about you?</p>
                            <div class="check">
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class="sp"></div>
                    </div>

                    <div class="chat-r">
                        <div class="sp"></div>
                        <div class="mess mess-r">
                            <p>
                                Not too bad. The weather is great isn't it?
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                                <img src="img/check-2.png">
                            </div>
                        </div>
                    </div>
                    <div class="chat-l">
                        <div class="mess">
                            <p>
                                Yes. It's absolutely beautiful today.
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class="sp"></div>
                    </div>


                    <div class="chat-r">
                        <div class="sp"></div>
                        <div class="mess mess-r">
                            <p>I wish it was like this more frequently.</p>
                            <div class="check">
                                <span>4:00 PM</span>
                                <img src="img/check-2.png">
                            </div>
                        </div>
                    </div>
                    <div class="chat-l">
                        <div class="mess">
                            <p>
                                Me too. 
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                            </div>
                        </div>
                        <div class="sp"></div>
                    </div>
                    <div class="chat-r">
                        <div class="sp"></div>
                        <div class="mess mess-r">
                            <p>
                                So where are you going now?
                            </p>
                            <div class="check">
                                <span>4:00 PM</span>
                                <img src="img/check-1.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-footer">
                    <img src="img/emo.png" class="emo">
                    <textarea placeholder="Type a message"></textarea>
                    <div class="icons">
                        <img src="img/attach file.png">
                        <img src="img/camera.png">
                    </div>
                    <img src="img/mic.png" class="mic">
                </div>
            </div>

        </div>
        <div class="col-4 Container fluid">
            <div class="chat">
                <div class="chat-header">
                    <div class="profile">
                        <div style="left: 10%;" class="left">
                            <h2 >Mentees</h2>


                        </div>
                        <div class="right">


                        </div>
                    </div>
                </div>
                <div>




                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Darius</li>
                        <li class="list-group-item">Peter</li>
                        <li class="list-group-item">Vicky</li>
                        <li class="list-group-item">Allen</li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

