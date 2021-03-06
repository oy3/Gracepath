<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Metas -->
    <title>GPDC - Contact</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/appointment.css">
    <!-- Alertify.JS -->
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="alertifyjs/css/themes/default.min.css" />
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
</head>

<body class="clinic_version">
    <script src="alertifyjs/alertify.min.js"></script>

    <div id="preloader">
        <img class="" src="images/loaders/66.gif" alt="">
    </div>

    <header>
        <div class="header-top wow fadeIn">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/gracepath.png" alt="image"></a>
                <div class="right-header">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                            <span class="iconcont"><a href="tel:800 123 456">(+234) 704 016 3434</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@gracepath.com</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="#">Daily: 24/7</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="doctors.html">Doctors</a></li>
                            <!-- <li><a href="">Book Appointment</a></li> Book Appointment page link goes here -->
                            <li><a href="about.html">About us</a></li>
                            <li><a class="active" href="contact.php">Contact Us</a></li>
                            <li class="hidden-lg hidden-md">
                                <a href="">
                                    <!-- Book Appointment page link goes here {For Jude}-->
                                    Book appointment
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="serch-bar hidden-sm hidden-xs">
                    <a data-scroll href="">
                        <!-- Book Appointment page link goes here {For Jude}-->
                        <button type="button" class="btn-login danger">Book appointment</button>
                    </a>
                </div>

                <!-- <div class="serch-bar">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" placeholder="Search" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </header>

    <div style="position: relative;">
        <img src="images/contact.png" style="width: 100%; opacity: 0.6; margin-top: 70px;">
        <div class="txtBottomLeft">Contact Us</div>
    </div>



    <section class="section">
        <div class="container">
            <div class="row">
                <!-- <div class="contact-info-box">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 hidden-sm">
                            <div class="box-img">
                                <img src="images/femal-doctor.png">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="info-box">
                                <h3>WE'D LOVE TO HEAR FROM YOU</h3>
                                <h5>Fusce convallis diam vitae velit tempus rutrum. Donec nisl nisl, vulputate eu sapien
                                    sed, adipiscing vehicula massa. Mauris eget commodo neque, id molestie enim.</h5>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-12"></div>
                    </div>
                </div> -->

                <div class="col-lg-8 col-md-8">
                    <h1 style="border-bottom: 1px solid lightgrey;">Get in touch by filling the form below</h1>

                    <div class="form">
                        <form method="POST" name="contactForm" action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="contact_name" placeholder="Your Name" required />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" id="contact_email" placeholder="Your Email Address" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="number" placeholder="Your Phone Number" id="contact_phone" required />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" id="contact_subject" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="10" id="contact_comments" class="form-control" placeholder="Your Message..." required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="center">
                                            <button name="submit" id="submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['contact_name'];
                            $email = $_POST['contact_email'];
                            $phone = $_POST['contact_phone'];
                            $subject = $_POST['contact_subject'];
                            $comments = $_POST['contact_comments'];

                            function isEmail($email)
                            {
                                return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
                            }

                            if (!isEmail($email)) {
                                echo "<script type='text/javascript'> alertify.error('Attention! You have enter an invalid e-mail address, try again.');</script>";
                                exit();
                            }

                            $email_to = ""; //Email message will be sent to.
                            $email_subject = 'You\'ve been contacted by ' . $first_name . ' with subject ' . $subject . '.';
                            $email_body = "You have received a new message from $name via the website contact us page.";
                            $email_content = "\"$comments\"";
                            $email_reply = "You can contact $name via email, $email or via phone $phone";

                            $msg = wordwrap($email_body . $email_content . $email_reply, 70);

                            $headers = "From: $email_to";
                            $headers .= "Reply-To: $email_to";
                            $headers .= "MIME-Version: 1.0";
                            $headers .= "Content-type: text/plain; charset=utf-8";
                            $headers .= "Content-Transfer-Encoding: quoted-printable";

                            if (mail($email_to, $email_subject, $msg, $headers)) {
                                // Email has sent successfully.
                                echo "<script type='text/javascript'> alertify.notify('Message Sent Successfully. \n Thank you <strong>' . $name . '</strong>, your message has been submitted to us', 'success', 3, function(){  console.log('dismissed'); window.location.href = 'contact.php';});</script>";
                            } else {
                                echo "<script type='text/javascript'> alertify.error('Sorry, there was an error sending message, try again.');</script>";
                            }
                        }
                        ?>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="row cblock">
                        <span class="icon-wrap">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <h4>Address</h4>
                        <p>No. 66, Igiolugbin Pedro Road, Bariga, <br>Lagos State,Nigeria</p>
                    </div>
                    <div class="row cblock">
                        <span class="icon-wrap">
                            <i class="fa fa-phone"></i>
                        </span>
                        <h4>Phone Number</h4>
                        <p>(+234) 704 016 3434</p>
                    </div>
                    <div class="row cblock">
                        <span class="icon-wrap">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <h4>Email Address</h4>
                        <p>info@gracepath.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="margin-top: 100px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8584521564985!2d3.380028814059663!3d6.539553124792512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d0970575675%3A0xd011f70b0493019e!2s66%20Igi%20Olugbin%20St%2C%20Somolu%2C%20Lagos!5e0!3m2!1sen!2sng!4v1622263206887!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo padding">
                        <a href=""><img src="images/gracepath.png" alt=""></a>
                        <p>GPDC is a first-class medical diagnostic centre which provides wide
                            scope for detection of ailments and facilities for a detailed medical check-up through
                            diagnostic
                            procedures for Patients, Practicing Doctors, Clinics, HMOs, and Corporate Organizations.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> No 66, Igi Olugbin road, Pedro Road <br>
                            Ladi-Lak
                            Bariga, Lagos State, Nigeria</p>
                        <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gracepath.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (+234) 704 016 3434</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="subcriber-info">
                        <h3>SUBSCRIBE</h3>
                        <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                        <div class="subcriber-box">
                            <form id="mc-form" class="mc-form">
                                <div class="newsletter-form">
                                    <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                                    <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                                    <div class="clearfix"></div>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div>
                                        <!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div>
                                        <!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div>
                                        <!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>?? 2021 <a href="https://oy3.vercel.app/">Oy3 Ltd</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end copyrights -->
    <a href="#" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- all js files -->
    <script src="js/all.js"></script>
    <!-- all plugins -->
    <script src="js/custom.js"></script>
    <!-- map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script> -->
</body>

</html>