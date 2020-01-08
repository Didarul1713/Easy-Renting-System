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
    <link rel="stylesheet" href="css/NewCSS/bootstrap.min.css" />
        <link href="css/NewCSS/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/NewCSS/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/NewCSS/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/NewCSS/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/NewCSS/styles.css" />
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
      
	<div class="container" style="margin-top :30px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading" style="text-align:center ;font-family: 'Times New Roman' , Times, serif;font-weight: bold; line-height:10px; font-size:40px;">Room Information</div>  
                    <div class="panel-body">
                        <form action="rentalDatasubmit.php" method="POST" enctype='multipart/form-data'>
                            <div class="row">
                                <div class="col-md-12" >
                                <div class="form-group">
                                        <label for="roomType">Room Type: <span style="color: red">*</span></label>
                                        <select name="roomType" class="form-control" id="roomType" required>
                                            <option value="">Select Room...</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Double Room">Double Room</option>
                                            <option value="Flat">Flat</option>
                                            <option value="Roommate">Roommate</option>  
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="houseRent">House Rent: <span style="color: red">*</span></label>
                                        <input type="text" name="houseRent" class="form-control" id="houseRent" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="homeAddress">Address: <span style="color: red">*</span></label>
                                        <input type="text" name="homeAddress" class="form-control" id="homeAddress" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ownerName">Owner Name: <span style="color: red">*</span></label>
                                        <input type="text" name="ownerName" class="form-control" id="ownerName" required>
                                    </div>
    
                                    <div class="form-group">
                                            <label for="phoneNo">Contact No: <span style="color: red">*</span></label>
                                            <input type="text" name="phoneNo" class="form-control" id="phoneNo" required>
                                        </div>

                                    <div class="form-group">
                                        <label for="vacancyFrom">Vacancy From: <span style="color: red">*</span></label>
                                        <input style="width: 100%;" type="date" autocomplete="off" placeholder="Select Vacancy From" name="vacancyFrom" required>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="advRent">Advance Rent: <span style="color: red">*</span></label>
                                        <input type="text" name="advRent" class="form-control" id="advRent" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="gasBill">Gas Bill: <span style="color: red">*</span></label>
                                        <select name="gasBill" class="form-control" id="gasBill" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="electricityBill">Electricity Bill: <span style="color: red">*</span></label>
                                        <select name="electricityBill" class="form-control" id="electricityBill" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="securityFacility">Security: <span style="color: red">*</span></label>
                                        <select name="securityFacility" class="form-control" id="securityFacility" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="cctvCamera">CCTV Camera: <span style="color: red">*</span></label>
                                        <select name="cctvCamera" class="form-control" id="cctvCamera" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>

                                   
                                    <div class="form-group">
                                        <label for="liftAvail">Lift: <span style="color: red">*</span></label>
                                        <select name="liftAvail" class="form-control" id="liftAvail" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="generatorAvail">Generator: <span style="color: red">*</span></label>
                                        <select name="generatorAvail" class="form-control" id="generatorAvail" required>
                                            <option value="">Select Yes/No </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectImage">Choose an Image: <span style="color: red">*</span></label>
                                        <input type="file" name="selectImage" required>
                                    </div>
                                    
                                    

                                <div class="col-md-12">
                                    <button type="submit" name="rentalSubmit" class="btn btn-info btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
                </div>
                </div>

      

<!-- TEAM SECTION END -->

  <!-- Back To Top Button  -->

  <!-- <a id="backTop">Back To Top</a> -->

<script src="js/NewJs/jquery.min.js"></script>
<script src="js/NewJs/bootstrap.min.js"></script>
<script src="js/NewJs/wow.min.js"></script>
<script src="js/NewJs/jquery.backTop.min.js"></script>
<script src="js/NewJs/waypoints.min.js"></script>
<script src="js/NewJs/waypoints-sticky.min.js"></script>
<script src="js/NewJs/owl.carousel.min.js"></script>
<script src="js/NewJs/jquery.stellar.min.js"></script>
<script src="js/NewJs/jquery.counterup.min.js"></script>
<script src="js/NewJs/venobox.min.js"></script>
<script src="js/NewJs/custom-scripts.js"></script>



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

   

    <div id="backtotop"><i class="fa fa-chevron-up"></i></div>

    <!-- Javascript -->
    <?php
        include "Include/script.php"
    ?>

</body>

</html>       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     