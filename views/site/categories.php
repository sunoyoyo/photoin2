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



    <script type="text/javascript">
        window.onscroll = function(){scrollmenu()};

        function scrollmenu(){
            console.log(document.body.scrollTop);
            if(document.body.scrollTop > 100){
                document.getElementById('submenu').style.top = '0';
                document.getElementById('mainNav').style.top = '-125px';
            }
            else{
                document.getElementById('submenu').style.top = '125.99px';
                document.getElementById('mainNav').style.top = '0';
            }
        }

    </script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .submenu{
            position: fixed; 
            height: 70px; 
            width:100%; 
            top:125.99px;
            background-color:#e3e3e3;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            z-index:10;
            transition: top .1s linear;
        }
        .applyfilter
        {
            background-color: #edb311 !important; 
            text-decoration: none; width: 250px; 
            position: relative; float:left; 
            top:25%;
            margin-left:120px; 
            color: white;
            font-weight: bold;
            font-size: 16px
        }

         .search
        {
            background-color: #00ADEF !important; 
            text-decoration: none; width: 250px; 
            position: relative; float:left; 
            top:25%;
            margin-left:50px; 
            color: white;
            font-weight: bold;
            font-size: 16px
        }
        
    </style>




</head>
<?php include "header2.php"; ?>

<!--  -->

  <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray" style="padding:100px;">
        <div class="container" >

            

            <div class="row" >
               <?php
                $test = Skill::find()->all();
                foreach ($test as $test) {
                      # code...


                    echo '<div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="/advanced/frontend/web/site/photographer/'.$test->id_skill.'" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/advanced/backend/web/'.$test->photo.'" style="height:200px; width:500px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         
    
                     
                        <h4>'.$test->skillname.'</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>';
                  }  
               
                 ?>
               
                
       
            </div>
        </div>
    </section>

   <?php include"footer.php"; ?>

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
