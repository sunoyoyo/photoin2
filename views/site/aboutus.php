<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PhotographerDetail;
use app\models\Skill;
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

      <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/pro.css" rel="stylesheet">
    <link href="../../css/mdb.min.css" rel="stylesheet">

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




  <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container" style="margin-top: -150px">

            

            <div class="row" >
               
<!--Section: Team v.1-->
<section class="section team-section">

    <!--Section heading-->
    <h1 class="section-heading">Our amazing team</h1>
    <!--Section description-->
    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

    <!--First row-->
    <div class="row text-xs-center">

        <!--First column-->
        <div class="col-lg-3 col-md-6 m-b-r">

            <div class="avatar">
                <img src="http://mdbootstrap.com/images/avatars/img%20(1).jpg" class="img-circle">
            </div>
            <h4>Anna Deynah</h4>
            <h5>Web Designer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

            <!--Facebook-->
            <a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
            <!--Twitter-->
            <a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
            <!--Dribbble-->
            <a class="icons-sm drib-ic"><i class="fa fa-dribbble"> </i></a>

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-3 col-md-6 m-b-r">

            <div class="avatar">
                <img src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" class="img-circle">
            </div>
            <h4>John Doe</h4>
            <h5>Web Developer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

            <!--Linkedin-->
            <a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a>
            <!--Facebook-->
            <a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
            <!--GitHub-->
            <a class="icons-sm git-ic"><i class="fa fa-github"> </i></a>

        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-lg-3 col-md-6 m-b-r">

            <div class="avatar">
                <img src="http://mdbootstrap.com/images/avatars/img%20(2).jpg" class="img-circle">
            </div>

            <h4>Maria Kate</h4>
            <h5>Photographer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

            <!--Facebook-->
            <a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
            <!--Pinterest-->
            <a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a>
            <!--Instagram-->
            <a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a>

        </div>
        <!--/Third column-->

        <!--Fourth column-->
        <div class="col-lg-3 col-md-6 m-b-r">

            <div class="avatar">
                <img src="http://mdbootstrap.com/images/avatars/img%20(4).jpg" class="img-circle">
            </div>
            <h4>Sarah Melyah</h4>
            <h5>Front-end Developer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

            <!--Google +-->
            <a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a>
            <!--Facebook-->
            <a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>
            <!--GitHub-->
            <a class="icons-sm git-ic"><i class="fa fa-github"> </i></a>

        </div>
        <!--/Fourth column-->

    </div>
    <!--/First row-->

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
