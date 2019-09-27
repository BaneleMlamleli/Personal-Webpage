<?php
$name = "";
$surname = "";
$email = "";
$comment = "";
// checking if the submit button is clicked
if(isset($_POST["submit"])){
    include_once("sendEmail.php");
}
?>

<!DOCTYPE html>
<html lang="en" class="smart-style-0">
    <head>
        <title>Banele Mlamleli</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145850082-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-145850082-1');
        </script>
        <!-- Show icon to be visible in the title bar of the brower -->
        <link rel="icon" type="image/ico" href="./assets/banele.jpg" />
        <link rel="stylesheet" type="text/css" href="./stylesheet.css">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="./assets/fontawesome-free-5.10.1-web/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script type="text/javascript" src="./script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <header>
            <nav class="active">
                <ul>
                    <li><a href="#about_me">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                </ul>
            </nav>
            <div class="social-media">
                <ul>
                    <li><a href="https://github.com/BaneleMlamleli" class="github fab fa-github" target="_blank"></a></li>
                    <li><a href="https://www.linkedin.com/in/banele-mlamleli/" class="linkedin fab fa-linkedin" target="_blank"></a></li>
                    <li><a href="https://join.skype.com/invite/n6NORKMGkgpG" class="skype fab fa-skype" target="_blank"></a></li>
                    <li><a href="https://banelemlamleli.blogspot.com/" class="blogger fab fa-blogger-b" target="_blank"></a></li>
                </ul>
            </div>
            <div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </header>
        <!-- Error alert message div-->
        <div id="alert_message"></div>
        <!-- Listen for the menu-toggle bar event then display or hide the responsive navigation bar -->
        <script>
            $(document).ready(function () {
                $('.menu-toggle').click(function () {
                    $('nav').toggle('active')
                })
            })
        </script>
        <!-- Back to top button -->
        <button onclick="topFunction()" class="fa fa-arrow-up" id="btnGoToTop" title="Go to top"></button>
        <!-- Section for all the information about you -->
        <!-- This is the Jumbotron below the navigation bar -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div style="text-align: center; padding-top: 10%;">
                    <h1 class="display-5" data-text="Hi, I'm Banele Mlamleli">Hi, I'm Banele</h1>
                    <p class="p1">I am an avid programmer who simply loves spending hours tinkering with the code.</p>
                    <p class="p2">I am currently based in the Mother City - Cape Town.</p>
                </div>
            </div>
        </div>
        <section class="about_me">
            <h3 class="section-header-text card-subtitle mb-2 text-muted">A bit about me</h3>
        </section>

        <!-- Section for all your skills -->
        <section class="skills">
            <h3 class="section-header-text card-subtitle mb-2 text-muted">What skills do I have</h3>
        </section>

        <!-- Section for all the projects you have worked on -->
        <section class="projects">
            <h3 class="section-header-text card-subtitle mb-2 text-muted">Projects I've worked on</h3>
        </section>

        <!-- Section for your contact details. -->
        <section class="contacts">
            <h3 class="section-header-text card-subtitle mb-2 text-muted">Send me a direct message</h3>
            <div class="main-contacts-div">
                <div class="form-div">
                    <form action="sendEmail.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="surname">Surname</label>
                                <input type="text" class="form-control" id="surname" name="surname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Your E-mail Address</label>
                            <input type="text" class="form-control" id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" onclick="return formValidation()" class="btn btn-primary btn-lg btn-block" style="font-size:24px;"><i class="fa fa-mail-bulk"></i>&nbspSend</button>
                    </form>
                </div>
                <div class="contacts-div">
                    <h5 class="card-title">Banele Mlamleli</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Junior Software Developer</h6>
                    <div>
                        <i class="fa fa-phone"></i>
                        (+27) (0)78 856 3244</br>
                        <i class="fa fa-envelope"></i>
                        mlamlelibanele@yahoo.com
                    </div>
                </div>
            </div>
        </section>
</html>