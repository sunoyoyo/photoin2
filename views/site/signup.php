 

    <?php

use yii\helpers\Html;

use kartik\form\ActiveForm;
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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../css/agency.min.css" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php include "header2.php"; ?>

    <!-- Header -->
    

    <!-- Services Section -->
    

    <!-- Portfolio Grid Section -->
    

    <!-- About Section -->
    

     <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
              

                  <div class="container" id="modal">  

                    <!-- SIGN IN -->
        <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                      

                    <div style="padding-top:30px;" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


       
                  <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

       
                <?= $form->field($model, 'email', ['addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope"></i>']]])->textInput(['placeholder'=>'Email'])->label(false); ?>
                

                <?= $form->field($model, 'username', ['addon' => ['prepend' => ['content'=>'<i class="fa fa-user"></i>']]])->textInput(['placeholder'=>'Username'])->label(false); ?>

                 <?= $form->field($model, 'password', ['addon' => ['prepend' => ['content'=>'<i class="fa fa-key"></i>']]])->passwordInput(['placeholder'=>'Password'])->label(false); ?>
                

                <?= $form->field($model, 'repassword', ['addon' => ['prepend' => ['content'=>'<i class="fa fa-key"></i>']]])->passwordInput(['placeholder'=>'Retype Password'])->label(false); ?>

              

              

                <div class="form-group" align="center">
                   <?php echo Html::submitButton( '<i class="fa fa-key"><span style="font-family:  sans-serif ;"> Sign Up</span></i>', ['class' => 'btn btn-danger', 'name' => 'login-button']); ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            

                                <div class="form-group" align="center">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        <a href="/advanced/frontend/web/site/forgot/" style="color: black;text-decoration: none;">Forgot Password</a> |
                                            
                                        <a href="/advanced/frontend/web/site/login/" style="color: black;text-decoration: none;">
                                            Sign In
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>

        <!-- END SIGN IN -->










    </div>
    



            </div>
           
        </div>
    </section>
    

    <!-- Contact Section -->
    

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
    <script src="../../vendor/jquery/jquery.min.js"></script>

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

