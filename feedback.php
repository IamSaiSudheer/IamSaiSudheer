<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Hello, Iam Sai Sudheer. I'm a Php Web Developer based in Chennai. Iam very much passionated in working with Php, Magento, Opencart development, etc.">
            <meta name="keywords" content="IamSaiSudheer, Iam SaiSudheer, Php Developer based in Chennai, Magento, Opencart, Bootstrap, Php, Freelancer, Plugin Development, Roanuz Sai Sudheer, Paripoorna Sai Sudheer, Magento developer bangalore, Frontend developer bangalore, Php developre bangalore">
            <meta name="author" content="Sai Sudheer Nekkanti">
            <title>Feedback Form | Sai Sudheer Nekkanti- Php, Magento Developer based in Chennai, India</title>

            <link rel="icon" type="image/icon" href="img/favicon.ico">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/iamsaisudheer-style.css" rel="stylesheet">
            <link href="font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:300" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-84660882-1', 'auto');
              ga('send', 'pageview');

            </script>
            <script src='https://www.google.com/recaptcha/api.js'></script>
      </head>

      <body style="background-color: rgba(216, 216, 216, 0.48 );">
            <nav class="navbar navbar-default navbar-fixed-top topnav">
                  <div class="container topnav">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                           <a class="navbar-brand" href=".">Iam SaiSudheer</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav navbar-right">
                              <li>
                                 <a href="./#skills">Skills</a>
                              </li>
                              <li>
                                 <a href="./#portfolio">Portfolio</a>
                              </li>
                              <li>
                                 <a href="./#work">Work</a>
                              </li>
                              <li>
                                 <a href="./#contact">Contact</a>
                              </li>
                           </ul>
                        </div>
                  </div>
            </nav>

            <div class="content-section-feedback">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-6">
                                    <div class="clearfix"></div>
                                    <h2 class="section-heading">Leave me a feedback...&nbsp;<span><i class="fa fa-pencil" aria-hidden="true"></i></span></h2>
                                    <hr class="section-heading-spacer">

                                    <h4 style="text-align: center;">“Feedback is the breakfast of champions.”  – Ken Blanchard</h4>
                              </div>
                              <div class="col-md-6">
                                    <form id="feedback-form" method="post" action="" name="feedback-form">
                                          <div class="messages"></div>
                                          
                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <input type="text" class="form-control required" id="name" name="name" placeholder="Your Name*" required data-error="Please enter your name.">
                                                <div class="help-block with-errors"></div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" data-error="Please enter a valid email address.">
                                                <div class="help-block with-errors"></div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" data-error="Please enter a valid subject.">
                                                <div class="help-block with-errors"></div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <textarea class="form-control required" rows="5" id="message" name="message" placeholder="Your Feedback*" required data-error="Please enter the feedback."></textarea>
                                                <div class="help-block with-errors"></div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <div class="g-recaptcha" data-sitekey="6LeVlCcTAAAAAJXaeS55J5iE8ZfNUgBfs3xJyqoT" data-callback="enableBtn"></div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-lg-12">
                                                <button type="submit" class="btn btn-default submit-btn pull-right" id="submit" name="submit" disabled>Send Message</button>
                                             </div>
                                          </div>
                                    </form>

                                    <?php
                                      if(isset($_POST['submit'])){
                                        $to = "sai.sudheer9@gmail.com";
                                        $from = $_POST['email'];
                                        $name = $_POST['name'];
                                        $subject = $_POST['subject'];
                                        $feedback = $_POST['message'];

                                        $mailSubject = "Feedback Form - IamSaiSudheer.com";

                                        $message = "Name: ".$name."<br>Subject: ".$subject."<br>Feedback: ".$feedback."<br><br>";

                                        //To send HTML mail, the Content-type header must be set
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                                        //Additional headers
                                        $headers .= "From: " . strip_tags($_POST['email']) . "\r\n";
                                        $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
                                        $headers .= "CC: sai.sudheer9@yahoo.in\r\n";
                                        
                                        mail($to, $mailSubject, $message, $headers);

                                        echo "<div class='col-sm-12'>
                                                <div class='form-group'>
                                                <br><br>Thanks for your valuable feedback. You will be redirected to homepage after 5 seconds.
                                                </div>
                                                </div>";
                                        header("Refresh: 5;url=http://www.iamsaisudheer.com/");
                                      }
                                    ?>
                              </div>
                        </div>
                  </div>
            </div>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript">
                  function enableBtn(){
                        document.getElementById("submit").disabled = false;
                  }
            </script>
      </body>
</html>