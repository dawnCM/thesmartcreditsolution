  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Smart Credit Solution</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
   <!--  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet"> -->
   <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/Smart-Credit-Solution-Logo.png" class="img-responsive">
        </a>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-site">
      <div class="container">
       <div class="container-inner">
        <div class="row">

          <div class="col-md-9">
            <div class="container" id="left-side">

             <div class="row">
              <div class="col-md-12">
                <h1 class="mt-5" id="title">see your credit scores</h1>
                <p class="mt-5" id="sub-title">It is important to have your updated scores handy for your loan agent.</p>
              </div>
            </div>

            

            <div class="process">
              <div class="row">
                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-3">
                          <div class="outer-box">
                            <div class="img-circle">
                              <i><img src="images/Get-an-Idea-Icon.png" class="img-responsive" /></i>
                            </div>
                            
                            <div class="inner-box">
                              <div class="col-md-12">
                                <div class="panel panel-default">
                                  <div class="panel-body" id="panel-title">Get an idea of what lenders see</div>
                                  <p id="panel-sub-title">When evaluating your application</p>
                                </div>
                              </div>
                            </div>
                          </div>                    
                    </div>

                     <div class="col-md-1 icon-d"><i class="fa fa-chevron-right"></i></div>

                    <div class="col-md-3" id="hide-line">
                      <div class="outer-box">
                        <div class="img-circle">
                          <i><img src="images/Know-Your-Score-Icon.png" class="img-responsive" /></i>
                        </div>
                        <div class="inner-box">
                            <div class="panel panel-default">
                              <div class="panel-body" id="panel-title">Know your scores</div>
                                <p id="panel-sub-title">To negotiate the lowest interest rate</p>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-1 icon-d"><i class="fa fa-chevron-right"></i></div>

                     <div class="col-md-3">
                      <div class="outer-box">
                        <div class="img-circle">
                          <i><img src="images/Potential-errors-Icon.png" class="img-responsive" /></i>
                        </div>
                        <div class="inner-box">
                            <div class="panel panel-default">
                              <div class="panel-body" id="panel-title">Check for any potential errors</div>
                              <p id="panel-sub-title">That could be weighing down your scores</p>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div> <!--row end-->

                <!-- <div id="mid-line"></div> -->

                </div>
              </div>
            </div>
            <!-- <hr> -->
            <div id="mid-line"></div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="container" id="right-side">
           <div class="row" id="mar-top">
            <div class="col-md-12">
              <h2 class="green-1" id="green-1">GET YOUR</h2>
              <h2 class="green-1-free">FREE</h2>
              <P class="green-1-credit">CREDIT SCORES NOW!</P>
              <P class="green-1-button">
                <?php
                $sitename = $_GET['sitename'];
                $firstname = $_GET['firstname'];
                $lastname = $_GET['lastname'];
                $email = $_GET['email'];
                $address = $_GET['address'];
                $city = $_GET['city'];
                $state = $_GET['state'];
                $zipcode = $_GET['zipcode'];
                ?>
                <a href="https://secure.rspcdn.com/xprr/red/PID/5706/SID/<?php echo $sitename;?>?&firstname=<?php echo $firstname;?>&lastname=<?php echo $lastname;?>&email=<?php echo $email;?>&address=<?php echo $address;?>&city=<?php echo $city;?>&state=<?php echo $state;?>&zipcode=<?php echo $zipcode;?>">CLICK HERE</a>
              </P>
            </div>
            </div>

                <div class="row">
                  <P class="green-1-image">
                    <img src="images/Card-Logos.jpg" class="img-responsive back-ground" alt="">
                  </P>
                </div>
              </div>

            </div>

          </div><!-- /.Main row -->
        </div><!-- /.container-inner -->
      </div><!-- /.container -->
    </div><!-- /.container-site -->




    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
