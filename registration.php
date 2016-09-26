<!DOCTYPE html>
<html lang="en">
<head>
    <title>INK Mania</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/inkmaniafav2.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/inkmaniafav2.png" type="image/x-icon" />
    <meta property="og:image" content="http://inkmania.be/img/inkmaniafb.jpg">
    <meta name="description" content="International Tattoo Convention | 24 - 25 June 2017">
    <meta name="keywords" content="INK Mania 2017">
    <meta name="author" content="COODI - Webservices">
    <meta name = "format-detection" content = "telephone=no" />
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/custom.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/sForm.js"></script>
    <script src="js/custom.js"></script>

    <!--animate-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/wow/wow.js"></script>
    <script src="js/device.min.js"></script>
    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>
    <!--[if lt IE 9]>
    <div style='text-align:center; position:absolute; width: 100%; z-index:999'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84572761-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--header-->
<header>
    <div class="container">
        <div class="navbar-brand navbar-brand_">
            <a href="index.html"><img src="img/inkmaniatransp.png" alt="logo"></a>
        </div>        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="tickets.html">Tickets</a><em></em></li>
                <li><a href="index.html#anker_program">Program</a><em></em></li>
                <li><a href="artist.html">Artists</a><em></em></li>
                <li><a href="sponsors.html">Exhibitor</a><em></em></li>
                <li><a href="registration.php">Registration</a><em></em></li>
                <li><a href="index.html#anker_practicalinfo">Practical info</a><em></em></li>
                <li><a href="pictures.html">Pictures</a><em></em></li>
                <li><a href="partners.html">Partners</a><em></em></li>
            </ul>
        </nav>
    </div>
</header>
<div class="global">
    <div class="container">
        <h3 class="text-center">Artist Registration</h3>
    </div>
    <div class="formBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php

                    if($_POST)
                    {

                        if(($_POST['middelnaam'] == '') && ($_POST['shop_name'] != '') && ($_POST['last_name'] != '') && ($_POST['first_name'] != '') && ($_POST['email'] != '')&&
                            ($_POST['phone'] != '')&& ($_POST['street_nr'] != '')&& ($_POST['zip'] != '')&& ($_POST['city'] != '')&& ($_POST['country'] != '')
                            && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
                        {

                            $to      = 'info@inkmania.be';
                            $subject = 'Bericht via website';
                            $message = '
                                        Keuzevak :  '.$_POST['optradio'].'<br>
                                        Artist-Exhibitor-Sponsor naam: '.$_POST['shop_name'].'<br>
                                        Achternaam: '.$_POST['last_name'].'<br>
                                        Voornaam: '.$_POST['first_name'].'<br>
                                        Email: '.$_POST['email'].'<br>
                                        Telefoon: '.$_POST['phone'].'<br>
                                        Straat + nr: '.$_POST['street_nr'].'<br>
                                        Postcode: '.$_POST['zip'].'<br>
                                        Stad: '.$_POST['city'].'<br>
                                        Land: '.$_POST['country'].'<br>
                                        BTW nummer: '.$_POST['vat'].'<br><br>
                                        Bericht / Vragen: '.htmlspecialchars($_POST['message']).'<br>';

                            $headers = 'From:'. $_POST['last_name'] .' '. $_POST['first_name'].' <info@inkmania.be>'."\r\n" .
                                        'Reply-To:'.$_POST['email'] . "\r\n" .
                                        'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
                                        'X-Mailer: PHP/' . phpversion();

                            mail($to, $subject, $message, $headers);


                            $to      =  $_POST['email'];
                            $subject = 'Registration INK Mania';
                            $message = '
                                       Thank you for registration. <br>
                                       We will send all information soon. <br><br>
                                
                                       Regards Ink Mania';

                            $headers = 'From: info@inkmania.be'." \r\n" .
                                'Reply-To:'.$_POST['email'] . "\r\n" .
                                'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

                            mail($to, $subject, $message, $headers);


                            $succes_messages = 'Uw bericht werd succesvol verzonden.';
                        }
                        else
                        {
                            $error_messages = 'Uw bericht werd niet verzonden omdat niet alle velden zijn ingevuld. Of geen geldig e-mailadres';
                        }
                    }

                    ?>
                        <form action="registration.php" id="contact-form" method="post" accept-charset="utf-8" _lpchecked="1">

                        <div class="contact-form-loader"></div>

                                <?php

                                if($succes_messages != '')
                                {
                                    echo '<div class="alert alert-success" role="alert">'.$succes_messages.'</div>';
                                }
                                if($error_messages != '')
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.$error_messages.'</div>';
                                }

                                ?>
                            <div class="col-lg-12">
                                <h4>Make your choice</h4>
                                <div class="radio">
                                    <label><input class="radio_artists" type="radio" name="optradio" value="artists" checked="checked">Artists</label>
                                </div>
                                <div class="radio">
                                    <label><input class="radio_exhibitor" type="radio" name="optradio" value="exhibitor">Exhibitor</label>
                                </div>
                                <div class="radio">
                                    <label><input class="radio_sponsors" type="radio" name="optradio" value="sponsor">Sponsor</label>
                                </div>
                            </div>

                                    <div class="col-lg-12">
                                        <h4>Personal information</h4>
                                    </div>
                                    <div class="col-lg-12" style="overflow:hidden;">
                                        <label class="name form-div-3">
                                            <input type="text" name="shop_name" placeholder="Artist-Exhibitor-Sponsor name*:" value="<?php echo $_POST['shop_name']; ?>"  required />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid name.</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="name form-div-1">
                                            <input type="text" name="last_name" placeholder="Last name*:" value="<?php echo $_POST['last_name']; ?>"  required />
                                            <input type="hidden" class="form-control" name="middelnaam" id="middelnaam">
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid name.</span>
                                        </label>
                                        <label class="name form-div-1">
                                            <input type="text" name="first_name" placeholder="First name*:" value="<?php echo $_POST['first_name']; ?>"  required />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid name.</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="email form-div-1">
                                            <input type="text" name="email" placeholder="Email*:" value="<?php echo $_POST['email']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid email.</span>
                                        </label>
                                        <label class="phone form-div-1">
                                            <input type="text" name="phone" placeholder="Phone*:" value="<?php echo $_POST['phone']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid phone.</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="email form-div-1">
                                            <input type="text" name="street_nr" placeholder="Street + number *:" value="<?php echo $_POST['street_nr']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid email.</span>
                                        </label>
                                        <label class="email form-div-1">
                                            <input type="text" name="zip" placeholder="Zipcode *:" value="<?php echo $_POST['zip']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid email.</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="email form-div-1">
                                            <input type="text" name="city" placeholder="City *:" value="<?php echo $_POST['city']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid email.</span>
                                        </label>
                                        <label class="email form-div-1">
                                            <input type="text" name="country" placeholder="Country *:" value="<?php echo $_POST['country']; ?>"  />
                                            <span class="empty-message">*This field is required.</span>
                                            <span class="error-message">*This is not a valid email.</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="name form-div-1">
                                            <input type="text" name="vat" placeholder="VAT number:" value="<?php echo $_POST['vat']; ?>"  />
                                        </label>
                                    </div>


                                <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->

                            <div class="col-lg-12">
                                <h4>For more questions, please fill in below</h4>
                                <label class="message form-div-4">
                                    <textarea name="message" placeholder="Questions:" value="<?php echo $_POST['message']; ?>"></textarea>
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Submit" class="btn-default btn2">
                                <p>* required fields</p>

                            </div>

                            <div class="col-lg-6">
                                <p>
                                    <br><br>
                                    Dear<br><br>

                                    Our new tattoo convention will be held in the Grenslandhallen with over 8.000m² of exhibition space in different halls.
                                    We take care of a professional decoration and an action-packed programme of extra activities.
                                    There will be a separate room for the artists to eat and drink and separate artist toilets.<br>

                                    Discover lots of live bands, lowrider shows, skate shows, freak shows, tattoo contests and many more at INK Mania 2017!<br>

                                    We offer artist stands that vary in size slightly, first come first served with the largest and best located stands so be quick!<br>

                                    We also offer exhibitor stands in many size.<br>

                                    We can offer a discount if you book more than 2 booths/stands.<br>

                                    Register here and discover what every booth/stand includes!<br>

                                    For other questions you can fill in the form.<br>
                                </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<div class="container">
    <footer>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <ul class="follow_icon">
                <li><a href="https://www.facebook.com/events/688753544607317/" target="_blank"><img src="img/fbpng1.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/explore/tags/inkmania2017/" target="_blank"><img src="img/instapng.png" alt=""></a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 center">
            <figure><img src="img/inkmanialogofooter.png" alt=""></figure>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <p><span><a href="http://www.coodi.be/" target="_blank">COODI - Webservices</a></span> &copy; <em id="copyright-year"></em></p>
        </div>
    </footer>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>