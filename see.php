<?php
session_start();
include('includes/config.php');

?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Hostels</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.less/style.css">
    <link rel="stylesheet" href="css/arstyles.css">



</head>

<body>
<nav>
    <ul class="arlinks">
        <button onclick="window.location='index.php'" type="button" class="rounded-pill  btn btn-primary" >Login/Register as Student
            </a></button>
        <button onclick="window.location='admin/index.php'" type="button" class="rounded-pill  btn btn-danger" >Login as Admin</a></button>
    </ul>
</nav>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                    <h2 class="page-title">Rooms</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">All Rooms Photos</div>
                        <section>

                            <p><h3 class="left">Room 100 (Single)</h3></p>
                            <div class="flex-contain">
                                <div>
                                    <a href="img/single.jpg" target="_blank">
                                        <img src="img/single.jpg" alt="Loading " width="300" height="250">
                                    </a>
                                </div>
                            </div>
                            <p> <h3 class="left">Room 200 (Two Seater)</h3></p>
                            <div style="display: flex; padding: 3px; margin: 3px" class="flex-contain">
                                <div>
                                    <a href="img/twoseater.jpg" target="_blank">
                                        <img src="img/twoseater.jpg" alt="Loading " width="350" height="250">
                                    </a>
                                </div>
                                <div>
                                    <a href="img/twoseater2.jpg" target="_blank">
                                        <img src="img/twoseater2.jpg" alt="Loading " width="350" height="250">
                                    </a>
                                </div>
                            </div>
                            <p><h3 class="left">Room 300 (Three Seater)</h3></p>
                            <div class="flex-contain">
                                <div>
                                    <a href="img/threeseater.jpg" target="_blank">
                                        <img src="img/threeseater.jpg" alt="Loading " width="300" height="250">
                                    </a>
                                </div>
                            </div>
                            <p><h3 class="left">Room 400 (Four Seater)</h3></p>
                            <div class="flex-contain">
                                <div>
                                    <a href="img/fourseater.jpg" target="_blank">
                                        <img src="img/fourseater.jpg" alt="Loading " width="300" height="250">
                                    </a>
                                </div>
                            </div>
                            <p><h3 class="left">Room 500 (Five Seater)</h3></p>
                            <div class="flex-contain">
                                <div>
                                    <a href="img/fiveseater.jpg" target="_blank">
                                        <img src="img/fiveseater.jpg" alt="Loading " width="300" height="250">
                                    </a>
                                </div>
                            </div>
                            <p><h3 class="left">Room 101 (Ten Seater)</h3></p>
                            <div class="flex-contain">
                                <div>
                                    <a href="img/tenseater.jpg" target="_blank">
                                        <img src="img/tenseater.jpg" alt="Loading " width="300" height="250">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


