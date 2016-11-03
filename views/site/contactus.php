<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PhotographerDetail;
use app\models\Skill;
use app\models\Contactus;



use app\models\Maps;

use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->

    <script src="../../vendor/jquery/jquery.min.js"></script>

    

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">






    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../css/agency.min.css" rel="stylesheet">





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   




</head>
<?php include "header2.php"; ?>


 <?php $form = ActiveForm::begin(); ?>

  <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container" style="margin-top: -150px">

   
            <div class="row" >
               
<!--Section: Team v.1-->
<section class="section team-section">

    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    
                </div>
            </div>
     <?php
         if(isset($model->check)) // check di deklarasiin lagi di model contact us
           {
            echo'
                <div class="alert alert-success">
                  <strong>Success!</strong> Your Message Has Been Sent.
                </div>';

           }
     ?>
            <div class="row">
                <div class="col-lg-12">











                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true,'placeholder'=>'Your Name']) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'placeholder'=>'Your Email']) ?>

                    <?= $form->field($model, 'phone')->textInput(['maxlength' => 14,'placeholder'=>'Your Phone Number']) ?>

                    <?= $form->field($model, 'message')->textArea(['rows' => 9,'placeholder'=>'Your Message']) ?>



                     <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                               
                                    <div class="form-group">
                                    <?= Html::submitButton($model->isNewRecord ? 'Send Message' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-xl' : 'btn btn-primary']) ?>
                                </div>
                            </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div> -->
                            </div>

                            </form>
                    <?php ActiveForm::end(); ?>


                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div> -->
                                 
                         <div style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <?php

                            $coords = new LatLng(['lat' => 39.720991014764536, 'lng' => 2.911801719665541]);
                        $map = new Map([
                            'center' => $coords,
                            'zoom' => 14,
                            'width' => 550,
                            'height' => 300,
                        ]);


                            $coord = new LatLng(['lat' => 39.720991014764536, 'lng' => 2.911801719665541]);



                            // Lets add a marker now
                            $marker = new Marker([
                                'position' => $coord,
                                'title' => 'My Home Town',
                            ]);

                            // Provide a shared InfoWindow to the marker
                            $marker->attachInfoWindow(
                                new InfoWindow([
                                    'content' => '<p>This is my super cool content</p>'
                                ])
                            );

                            $map->addOverlay($marker);


                        // Display the map -finally :)
                        echo $map->display();

                        ?>

                    </div>

                    
                  
                    <div >
                    <h2><a href="index.html">Photoin</a></h2>
                        <h6>Your stores. Your place.</h6>
                    
                    
                        <i class="fa fa-map-marker" ></i> Jalan Rawa Belong Raya no.9,<br>Kebon Jeruk, Jakarta Barat<br>
                        <i class="fa fa-mobile"></i> (021)213434 <br>
                        <i class="fa fa-phone"></i> +62 8121232132 <br>
                        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@photo.com"> contact@photoin.com</a>
                     

                    </div></div>
                    </div>

                           
                    


                    


                   

                    


                </div>
            </div>
        </div>

</section>
<!--/Section: Team v.1-->

               
                
       
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    

    

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../js/agency.min.js"></script>

</body>

</html>




