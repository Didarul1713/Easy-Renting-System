<!DOCTYPE html>

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Easy Home Renting</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="http://event-theme.com/favicon.ico">
     -->
    <!-- Google Webfont -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <?php
        include "Include/style.php"
    ?>

</head>

<body id="home2" class="home3">

    <!-- PRELOADER -->
    <div id="loader"></div>

    <div class="body">

        <!-- HEADER -->
        <?php
            include "Include/header.php"
        ?>

    
        <!-- PRODUCTS -->
        <div class="container padding40" style="font-weight:bold;">
            <div class="row">

                <!-- <div class="product-carousel3"> -->

                <?php
                    include('partials/db_connect.php');

                    $sql="SELECT * FROM homerent"; // SQL code in the ""
        
                    if ($result=mysqli_query($connection, $sql)) {
                        if (mysqli_num_rows($result) > 0) {

                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                <a href="single-product.php?id='.$row['id'].'">
                                    <div class="col-md-4">
                                        <div class="product-item">
                                            <div class="item-thumb">
                                                <img src="uploads/'.$row['selectImage'].'" class="img-responsive" style=" height:250px;" alt="" />
                                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal"
                                                    data-target="#myModal" href="single-product.php"></div>
                                                <div class="product-overlay">
                                                    <a href="single-product.php" class="likeitem fa fa-heart-o"></a>
                                                </div>
                                            </div>
                                            <div style="text-align: center;  font-weight:bold;">
                                                <h3>'. $row["roomType"] .'</h3>
                                                <p style="font-size: 120%;">'.$row["advRent"].' BDT</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                ';
                            }
                            
                        }
                    }
                ?>



                <!-- </div> -->

            </div>

            
        </div>

        <div class="space20"></div>

        <!-- FOOTER -->
        <?php
            include "Include/footer.php"
        ?>

        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom" style=" background-color:#003459;">
            <div class="container">
                <p style="text-align: center;color:white;">Copyright 2019- Designed & Developed by <a href="#">Mohammed
                        Didarul Islam</a> All rights reserved</p>
            </div>
        </div>

    </div>

    <div id="backtotop"><i class="fa fa-chevron-up"></i></div>

    <!-- Javascript -->
    <?php
        include "Include/script.php"
    ?>

</body>

</html>