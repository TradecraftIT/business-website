<?php
    header('Content-type: text/html; charset=utf-8');

    include('inc/inc-navbar.php'); # Navigation bar generator
    include('inc/inc-employees-login.php'); # Employee login banner
    include('inc/inc-connection.php'); # Database connection

    if(!function_exists('showPage')) {
        function showPage($error_msg, $first_name = null) {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="images/aces.ico" />
    <link rel="stylesheet" href="css/aces.css" type="text/css" />
    <?php employeeLoginHead(); ?>
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    <title>Careers &mdash; ACES, Inc.</title>
    <meta http-equiv="Content-Language" content="en" />
    <meta name="description" content="ACES, Inc. is a veteran-owned small business specializing in intelligence analysis, information technology and engineering services in MD, CO and OH." />
    <script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body>
    <?php
        include('inc/inc-toppanel.php');
    ?>
    <div id="container">
        <?php
            # Create navigation bar for page
            createNavbar(__FILE__);
        ?>

         <div id="main" class="rounded-corners">
             <div id="content" class="rounded-corners">
                <h1 class="title">Join ACES, Inc.</h1>
                <br />
                ACES, Inc. is an employee-owned company that offers a very competitive <a href="/web/future-employees.php" target="_top">benefits</a> package, excellent salaries and a great 401k retirement program. Please feel free to view some of our current job opportunities. If you find something that interests you, please upload your resume and we will contact you soon.
                <br /><br />
                <h1 class="title">Current Job Opportunities</h1>
                <iframe id="akken" src="http://api.akken.com/newconreg/getMainJobs.php?companyuser=acesinc&akken_jpage=careers-details.php&akken_cpage=careers-account.php&akken_cppage=careers-profile.php" width="100%" frameborder="0" height="415" style="border:thin solid black;"></iframe>
                <br /><br />
                <h1 class="title">Application</h1>
                Ready to upload your resume and apply to join ACES? <a href="/web/careers-account.php" target="_top">Apply for a job with ACES now!</a>
                <br /><br />
                <br /><br />
                <div class="eeo-statement">
This contractor and subcontractor shall abide by the requirements of 41 CFR 60-1.4(a), 60-300.5(a) and 60-741.5(a). These regulations prohibit discrimination against qualified individuals based on their status as protected veterans or individuals with disabilities, and prohibit discrimination against all individuals based on their race, color, religion, sex, or national origin. Moreover, these regulations require that covered prime contractors and subcontractors take affirmative action to employ and advance in employment individuals without regard to race, color, religion, sex, national origin, protected veteran status or disability.
<br /><br >
<a href="http://www1.eeoc.gov/employers/upload/eeoc_self_print_poster.pdf">http://www1.eeoc.gov/employers/upload/eeoc_self_print_poster.pdf</a>
<br /><br >
ACES, Inc., is committed to Equal Employment Opportunity, Affirmative Action, and compliance with all laws and regulations pertaining to both. It is the policy of ACES, Inc., to encourage and support equal employment to all persons without regard to race, color, religion, sex, national origin, physical or mental disability, or status as a Vietnam Era or special disabled veteran, or any other protected class under federal, state, or local law. In addition, ACES, Inc., will provide reasonable accommodations for otherwise qualified disabled individuals.</div>
            </div> <!-- end content -->

         </div> <!-- end main -->



      <div id="footer"><?php acesFooter(); ?></div>

   </div> <!-- end container -->



</body>

</html>

<?php

            die(); // stop at this point

        }

    }



    include('inc/inc-empcheck.php');

?>
