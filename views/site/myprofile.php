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

   
    <script type="text/javascript">
    function tab(e)
    {
      

      for (var i = 0; i <document.getElementsByClassName('nav-link').length; i++) {
         document.getElementsByClassName('nav-link')[i].className = 'nav-link';
      }
        if(e.className == "nav-link"){
        e.className += " active";
         }
    }
</script>




<style type="text/css">
      .applyfilter
        {
            background-color: #edb311 !important; 
            text-decoration: none; 
            width: 200px; 
            position: absolute; 
            top:25%;
            right: 50px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            text-transform: none;

        }
</style>




</head>
<?php include "header2.php"; ?>

 <a href="" class="btn applyfilter ">Change Password</a>



  <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
   

        <div class="container" >

            
            <div class="row" >
               
<div class="col-md-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-pills pills-secondary" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab" onclick="tab(this)"><i class="fa fa-user fa-2x"></i><br> Profile</a>
            </li>
<?php
if(Yii::$app->User->identity->role_id==3)
{
?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#resume" role="tab" onclick="tab(this)"><i class="fa fa-file-text fa-2x"></i><br> Resume</a>
            </li>
<?php
}
?>

             <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#general-setting" role="tab" onclick="tab(this)"><i class="fa fa-cog fa-2x"></i><br> General<br>Setting</a>
            </li>

<?php
if(Yii::$app->User->identity->role_id==3)
{
?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#bank-details" role="tab" onclick="tab(this)"><i class="fa fa-credit-card fa-2x"></i><br> Bank <br>Details</a>
            </li>
<?php
}
?>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#address" role="tab" onclick="tab(this)"><i class="fa fa-map-marker fa-2x"></i><br> Address</a>
            </li>

            

            
        </ul>
    </div>

    <div class="col-md-7">


        <!-- Tab panels -->
        <div class="tab-content vertical">


            <!--Panel 1-->
            <div class="tab-pane fade in active" id="profile" role="tabpanel" style="height:700px; width: 800px; ">
                <br>

                    <iframe src="/advanced/frontend/web/site/tab_profile/" style="width:100%; height:100%; background-color: #eee;" frameborder="0"></iframe>

            </div>


             <div class="tab-pane fade" id="resume" role="tabpanel" style="height:700px; width: 800px; ">
                <br>

                    <iframe src="/advanced/frontend/web/site/tab_resume/" style="width:100%; height:100%; background-color: #eee;" frameborder="0"></iframe>

            </div>
            <!--/.Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane fade" id="general-setting" role="tabpanel" style="height:700px; width: 800px; ">
                <br>

                 <iframe src="/advanced/frontend/web/site/tab_general_setting/" style="width:100%; height:100%; background-color: #eee;" frameborder="0"></iframe>

            </div>
            <!--/.Panel 2-->

            <!--Panel 3-->
            <div class="tab-pane fade" id="address" role="tabpanel" style="height:700px; width: 800px; ">
                <br>

                    <iframe src="/advanced/frontend/web/site/tab_address/" style="width:100%; height:100%; background-color: #eee;" frameborder="0"></iframe>

            </div>
            <!--/.Panel 3-->

        </div>
    </div>
                
       
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
