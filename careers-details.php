<?php
    header('Content-type: text/html; charset=utf-8');

    include('inc/inc-navbar.php'); # Navigation bar generator
    include('inc/inc-employees-login.php'); # Employee login banner
    include('inc/inc-connection.php'); # Database connection

    if(!function_exists('showPage')) {
        function showPage($error_msg, $first_name = null) {
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACES, Inc.</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Header -->
	  <div id="header" style="margin-top: 20px;"></div>

    <div id="container">

         <div id="main" class="rounded-corners">
             <div id="content" class="rounded-corners">
                
                	<center>
	<a href="careers.html">Back to Current Opportunities</a><br>
	<a class="btn btn-primary" href="mailto:careers@acesinc.net">Apply - Submit Your Resume</i></a><br>
						
					</center>
                <div id="akken">
                    <iframe src="http://api.akken.com/newconreg/joborder_preview.php?companyuser=acesinc&akken_jpage=careers-details.php&akken_cpage=careers-account.php&akken_cppage=careers-profile.php" width="100%" height="750" frameborder="0"></iframe>
                </div>
				<div style="margin-top:-65px">
					<center><a class="btn btn-primary" href="mailto:careers@acesinc.net">Apply - Submit Your Resume</i></a><br>
					<a href="careers.html">Back to Current Opportunities</a>	
					</center>
					</div>
      </div> <!-- end content -->
         </div> <!-- end main -->

      
   </div> <!-- end container -->
 <!-- Footer -->
  <div style="padding-top:50px"id="footer"></div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	    <script> 
	    $(function(){
	      $("#footer").load("footer.html"); 
	    });
	    $(function(){
	      $("#header").load("header.html"); 
	    });
	    </script>

</body>
</html>
<?php
            die(); // stop at this point
        }
    }

    include('inc/inc-empcheck.php');
?>
