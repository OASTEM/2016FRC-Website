<?php
session_start();
if (empty($_SESSION['token'])) {
	$_SESSION['token'] = md5(mt_rand(1,1000000));
} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>FRC Team 4079</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='../assets/css/main.css' rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../">
                    <img src="../assets/img/logo.png">
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="../about/">About</a></li>
                      <li><a href="../gallery/">Gallery</a></li>
                      <li><a href="../sponsors/">Sponsors</a></li>
                      <li><a href="../contact/">Contact</a></li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
      </nav>

      <div class="frc-container">
        <section id="contact">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Us</h2>
                <hr class="colored">
                <p>Please ask about what we do and we will answer!</p>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="contact.php" method="POST">
              		<input type="hidden" name="token" value="<?php print $_SESSION['token']; ?>" />
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="to">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Subject</label>
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" name="message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-xl btn-block">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section>
      </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">
          <ul class="list-inline">
              <li>
                <a href="https://www.facebook.com/Oxford-Academy-FRC-4079-212520332432525/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/oafrc4079"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
              </li>
              <li>
                <a href="https://instagram.com/oafrc4079"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
              </li>
          </ul>
          <hr class="small">
          <p>FRC Team 4079</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74355497-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
