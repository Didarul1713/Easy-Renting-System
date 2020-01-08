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
    <!-- <link rel="shortcut icon" href="http://event-theme.com/favicon.ico"> -->
    
    <!-- Google Webfont -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
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
                include "Include/header.php";

                include('partials/db_connect.php');

                $id = $_GET['id'];

                // var_dump($id);

                $sql="SELECT * FROM homerent where id=$id";
                
                $result=mysqli_query($connection, $sql);

                $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container" style="margin-top: 20px;">
                <div class="col-md-7">
                    <img style="width: 100%; height: 400px;" src="uploads/<?php echo $row['selectImage'] ?>" alt="">
                </div>
                <div class="col-md-5">
                    <div style="background-color: #02111B; padding: 15px;">
                        <h2 style="margin-top: 5px; color:white;"><?php echo $row['roomType'] ?></h2>
                        <p style="margin-bottom: 0px;color:white;"><?php echo $row['houseRent'] ?> BDT</p>
                    </div>

                    <div class="row" style="padding-left: 15px; margin-top: 5px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Address</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['homeAddress'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Owner Name</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['ownerName'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Contact</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['phoneNo'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Vacancy From</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['vacancyFrom'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Advance Rent</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['advRent'] ?> BDT
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Gas Bill</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['gasBill'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Electricity Bill</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['electricityBill'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Security</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['securityFacility'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">CCTV Camera</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['cctvCamera'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Lift</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['liftAvail'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 15px;">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 3px; margin-top: 3px !important;">Generator</h4>
                        </div>
                        <div class="col-md-8">
                            <p style="padding-top: 3px; margin-bottom: 3px;  ">
                            <?php echo $row['generatorAvail'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shop-single">
                <div class="container">

                    <div role="tabpanel" style="margin-top: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">&nbsp;&nbsp;House Description&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >&nbsp;&nbsp;Review&nbsp; </a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;&nbsp;Product Tags&nbsp;&nbsp;</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <b>Home Rental Agreement Basics</b>
                                <div class="space10"></div>
                                <p>If you're renting out your home, a Home Rental Agreement is the legal agreement between you and your tenant. It establishes the rights and responsibilities of each party. What will the monthly rent be? How many people can occupy the property? Who will test the smoke alarm? Is gardening allowed? What about hanging pictures? With a Home Rental Agreement you can detail any and all specific requirements.</p>
                                <div class="space20"></div>
                                <!-- <ul class="dot">
                                    <li>100% cotton</li>
                                    <li>Machine wash warm imported</li>
                                    <li>Art.No. 54-0032</li>
                                </ul>
                                <div class="space20"></div>
                                <p>Product code: SW448</p>-->
                            </div> 
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="reviews-tab">
                                    <p><b>Smile Nguyen</b>, 23 July 2014</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <div class="ratings">
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                    </div>
                                    <div class="sep"></div>
                                    <p><b>Smile Nguyen</b>, 23 July 2014</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <div class="ratings">
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                    </div>
                                    <div class="sep"></div>
                                    <form>
                                        <h5>Write a Review</h5>
                                        <label>Your Name *</label>
                                        <input type="text">
                                        <div class="space20"></div>
                                        <label>Your Review *</label>
                                        <textarea></textarea>
                                        <br>
                                        <div class="clearfix space20"></div>
                                        <span class="pull-left">Rating*&nbsp;&nbsp;</span>
                                        <div class="ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="clearfix space20"></div>
                                        <button type="submit" class="btn-black">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <p>Add Your Tags:</p>
                                <form class="form-tags">
                                    <input type="text"><br>
                                    <span>Use spaces to separate tags. Use single quotes (') for phrases.</span><br>
                                    <button type="submit" class="btn-black">Add Tag</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

             <!-- PRODUCTS -->
             <div class="container padding40" style="font-weight:bold;">
            <div class="row">

                <div class="product-carousel3">

                <?php
                    // include('partials/db_connect.php');

                    $sql="SELECT * FROM homerent"; 
        
                    if ($result=mysqli_query($connection, $sql)) {
                        if (mysqli_num_rows($result) > 0) {

                            while($row = mysqli_fetch_assoc($result)) {
                                echo '
                                <a href="single-product.php?id='.$row['id'].'">
                                    <div class="col-md-4">
                                        <div class="product-item">
                                            <div class="item-thumb">
                                                <img src="uploads/'.$row['selectImage'].'" class="img-responsive" alt="" />
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



                </div>

            </div>

            <div style="text-align: center;">
                <a style="text-align: center;" class="btn btn-primary" href="allPostedAd.php">See all post</a>
            </div>
            
        </div>

        <div class="space20"></div>

            <!-- FOOTER -->
            <?php
                include "Include/footer.php"
            ?> 

            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <p style="text-align: center;">Copyright 2019 &middot; Designed & Developed by <a href="#">Mohammed Didarul Islam</a> All rights reserved</p>
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