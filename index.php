<?php
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $to = 'lhc.zero@gmail.com';
        $subject = "New Contact";
        $header = 'From: Zero\'s Site <newContact@hanchen.greenriverdev.com>';
        $message = "Contact Name: " . $name
            . "Contact Email: " . $email
            . "Message: " . $msg;

        mail($to, $subject, $message, $header);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="x-ua-compatible" content="IE=9"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zero's Portfolio</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/myself.jpg">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="tf-home">
    <div class="overlay">
        <div id="sticky-anchor"></div>
        <nav id="tf-menu" class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="#tf-home">Hanchen (Zero) Liu</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        <li><a href="#tf-about">About</a></li>
                        <li><a href="#tf-more-about">More About</a></li>
                        <li><a href="#tf-projects">Projects</a></li>
                        <li><a href="#tf-contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="content">
                <h1>Hello There</h1><br>
                <h2>My name is Hanchen Liu, but you can call me Zero. I'm a recent graduate from Green River College. As a
                    software development major, I'm always wanting to know how apps and web pages are
                    built. And the software development program at Green River College really helped me to reach my
                    goal. I've learned Java, HTML, CSS, PHP, MySql and so much more through the program. And I can't
                    wait to put the things I learn into real world projects!</h2>
            </div>
        </div>
    </div>
</div>

<div id="tf-about">
    <div class="overlay">
        <div class="container">
            <img id="img-portfolio" class="img-responsive" src="img/myself.jpg"><br><br>
            <h2 class="text-center">About Me</h2><br><br>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="fa fa-info-circle"></i>
                    </div>
                    <div class="media-body">
                        <h4>Basic Information</h4>
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>
                                    A senior student at Green River College
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    A website/software developer
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    A big gamer
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="media-body">
                        <h4>Education Level</h4>
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>
                                    Bachelor's in Software Development from Green River College (2018)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Associate's in Computer Science from Green River College (2015)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="fa fa-gears"></i>
                    </div>
                    <div class="media-body">
                        <h4>Basic Skills</h4>
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>
                                    Java
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    HTML/CSS, Bootstrap
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PHP
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MySQL, PhpMyAdmin
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Python
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Git, Git Hub
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Agile Methodologies, Scrum
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tf-more-about">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-language"></i>
                        </div>
                        <div class="media-body">
                            <h4>My Languages</h4>
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        Chinese
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        English
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Japanese (Basic)
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="media-body">
                            <h4>My Experiences</h4>
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>
                                        Made an Authentication Module for Green River IT Bachelor Program
                                        with 3
                                        other classmates
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Made a Scheduler Website for Green River IT department with 3 other
                                        classmates
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Made a Website demo for a local food bank with 2 other classmates
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Had 1 month internship in a mobile game development company, learned
                                        c#
                                        and unity3D
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-body">
                            <h4>My Social Media</h4>
                            <br>
                            <ul class="list-inline">
                                <li><a class="btn btn-lg btn-social-icon btn-linkedin"
                                       href="https://www.linkedin.com/in/liu-hanchen/"
                                       target="_new"><span class="fa fa-linkedin"></span></a></li>
                                <li><a class="btn btn-lg btn-social-icon btn-github"
                                       href="https://github.com/ZeroHC" target="_new"><span
                                                class="fa fa-github"></span></a></li>
                                <li><a class="btn btn-lg btn-social-icon btn-facebook"
                                       href="https://www.facebook.com/ZeroLHC" target="_new"><span
                                                class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tf-projects">
    <div class="container">
        <div class="section-title">
            <h3>My Latest Projects</h3>
            <hr>
        </div>

        <div class="space"></div>

        <div class="row">
            <div class="col-md-4">
                <a href="http://gatorlock.greenriverdev.com/" target="_new"><img
                            src="img/gatorlock.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-4">
                <a href="http://schedule-it.greenrivertech.net" target="_new"><img
                            src="img/schedule-it.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-4">
                <a href="http://pbj.greenrivertech.net" target="_new"><img src="img/kfb.jpg"
                                                                           class="img-responsive"></a>
            </div>
        </div>
    </div>
</div>

<div id="tf-contact">
    <div class="container">
        <div class="section-title">
            <h3>Contact Me</h3>
            <p>If you have any question or want to know more about me, just submit the contact form below, and I
                will reply to you as soon as possible.</p>
            <hr>
        </div>

        <div class="space"></div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form id="contact" action="" onsubmit="return validateForm()" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
								<textarea class="form-control" id="message" rows="4"
                                          placeholder="Message" required></textarea>
                    </div>
                    <button type="submit"
                            class="btn btn-primary my-btn dark">Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<nav id="tf-footer">
    <div class="container">
        <div class="pull-left">
            <p>© 2016 -
                <script>document.write(new Date().getFullYear())</script>
                Hanchen (Zero) Liu. All Rights Reserved.
            </p>
        </div>
        <div class="pull-right">
            <ul class="social-media list-inline">
                <li><a class="btn btn-md btn-social-icon btn-linkedin"
                       href="https://www.linkedin.com/in/liu-hanchen/" target="_new"><span
                                class="fa fa-linkedin"></span></a></li>
                <li><a class="btn btn-md btn-social-icon btn-github" href="https://github.com/ZeroHC"
                       target="_new"><span class="fa fa-github"></span></a></li>
                <li><a class="btn btn-md btn-social-icon btn-facebook"
                       href="https://www.facebook.com/ZeroLHC" target="_new"><span
                                class="fa fa-facebook"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<a href="#" class="back-to-top">
    <i class="fa fa-chevron-circle-up"></i>
</a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="js/main.js"></script>
<script>
    $(document).ready(function () {
        var offset = 250;
        var duration = 300;

        $(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        $('.back-to-top').click(function (event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });

    function validateForm() {
        var name = document.forms["contact"]["name"].value;
        var email = document.forms["contact"]["email"].value;
        var message = document.forms["contact"]["message"].value;

        if (name !== "" && email !== "" && message !== "")
        {
            alert("Thank You! Your email has been sent! I'll reply to you as soon as possible!");
        }
    }
</script>

</body>
</html>