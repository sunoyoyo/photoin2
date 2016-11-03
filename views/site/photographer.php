<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PhotographerSkill;
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

 

    <script src="../../vendor/jquery/jquery.min.js"></script>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/pro.css" rel="stylesheet">
    <link href="../../css/mdb.min.css" rel="stylesheet">
  

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

    





 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- price range slider -->
  
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 10000000,
      values: [ 500000, 1500000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "Rp. " + ui.values[ 0 ] + " - Rp. " + ui.values[ 1 ] );


        $( "#amount1" ).val(ui.values[ 0 ]);
        $( "#amount2" ).val(ui.values[ 1 ]);
        // console.log(ui.values[0]);
      }
    });
    $( "#amount" ).val( "Rp. " + $( "#slider-range" ).slider( "values", 0 ) +
      " - Rp. " + $( "#slider-range" ).slider( "values", 1 ) );


        


  } );


  $(document).ready(function(){
    $('.ui-slider-handle').css('border-radius','50%');
    $('.ui-slider-handle').css('outline','none');
    $('.ui-slider-range').css('background-color','#edb311');
    $('.ui-slider-handle').css('cursor','pointer');

    // $('#amount').css('color','blue');
  });
  

  </script>





     

     <script type="text/javascript">
        window.onscroll = function(){scrollmenu()};

        function scrollmenu(){
            // console.log(document.body.scrollTop);
              if(document.body.scrollTop > 100){
                document.getElementById('submenu').style.top = '0';
                document.getElementById('mainNav').style.top = '-400px';
            }
            else{
                document.getElementById('submenu').style.top = '70px';
                document.getElementById('mainNav').style.top = '0';
            }
        }

    </script>





  <style type="text/css">
        .submenu{
            position: fixed; 
            height: 70px; 
            width:100%; 
            top:70px;
            background-color:#e3e3e3;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            z-index:10;
            transition: top .1s linear;
        }
        .applyfilter
        {
            background-color: #edb311 !important; 
            text-decoration: none; 
            width: 250px; 
            position: relative; 
            float:left; 
            top:25%;
            margin-left:120px; 
            color: white;
            font-weight: bold;
            font-size: 16px
        }



         .search
        {
            background-color: #00ADEF !important; 
            text-decoration: none; 
            width: 250px; 
            position: relative; 
            float:left; 
            top:25%;
            margin-left:50px; 
            color: white;
            font-weight: bold;
            font-size: 16px
        }

        .left-bar
        {
            position:absolute;
            left:0;width:25%;
            height: 100%; 
            top:145px; 
            background:#eee; 
            padding:30px; 
            padding-top:30px;
        }

        .left-bar-font
        {
            margin-left:20px; 
            font-family: 'Exo 2', sans-serif ; 
            font-weight: bold;
        }

        .content-left-bar
        {
            width:100%; 
            height:auto; 
            background:white; 
            border-radius: 4px; 
            padding:10px; 
            margin-top: 10px; 
            margin-bottom: 15px
        }
        .filter{
            height:40px; 
            width:70px;
            background:#edb311; 
            border-radius:4px; 
            border:0 solid transparent; 
            font-weight: bold; 
            color:white;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
            transition:box-shadow .2s linear;
            outline:none;
        }
        .filter:hover{
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
    </style>




</head>
<?php include "header2.php"; ?>
    <!-- Header -->


<!-- submenu -->
<div class="submenu" id="submenu">
    


 <a href="" class="btn applyfilter" >Apply Filters</a>

  <div class="form-group" style=" position: relative; float:left; width: 250px; height:70%; top:25%;margin-left:50px">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
  </div>
  <div class="form-group" style=" position: relative; float:left; width: 250px; height:70%; top:25%;margin-left:50px">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a City or Photographer's Name">
 
  </div>


   <a href="" class="btn search">Search</a>



</div>


    <div class="left-bar">
        <span class="left-bar-font">Filter By</span>


        <div class="content-left-bar">
            

            <span class="left-bar-font">Price</span>  

            <div id="slider-range"></div>
            <p>
  
              <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>
             
          

            <form method="post" action="../../tes.php">
    <input type="hidden" id="amount1" name="amount1">
    <input type="hidden" id="amount2" name="amount2">
    <input type="submit" name="submit_range" class='filter' value="Filter">
  </form>



        </div>

            
            <div class="content-left-bar">
                <span class="left-bar-font">Sort by</span>  

                <!-- Live preview-->
                        <fieldset class="form-group">
                            <input name="group1" type="radio" id="radio1" checked="checked">
                            <label for="radio1" style=" font-family: 'Exo 2', sans-serif ; font-size: 13px;"> Price - Low to High</label>
                        </fieldset>

                        <fieldset class="form-group">
                            <input name="group1" type="radio" id="radio2">
                            <label for="radio2" style=" font-family: 'Exo 2', sans-serif ; font-size: 13px;"> Price - High to Low</label>
                        </fieldset>

                        <fieldset class="form-group">
                            <input name="group1" type="radio" id="radio3">
                            <label for="radio3" style=" font-family: 'Exo 2', sans-serif ; font-size: 13px;"> Rating</label>
                        </fieldset>

                        <fieldset class="form-group">
                            <input name="group1" type="radio" id="radio4">
                            <label for="radio4" style=" font-family: 'Exo 2', sans-serif ; font-size: 13px;"> Newest</label>
                        </fieldset>
                        <!-- /.Live preview-->

            </div>


    </div>





    <section id="team" class="bg-light-gray" style="width:75%; margin-left: 25%">
        <div class="container" style="margin-top: 50px">
        
           
            <div class="row">



    
 




            		<?php 
        		$id= $_GET['id'];
                $i = 0;
        		$photo = PhotographerSkill::find()->where(['id_skill'=>$id])->all();
        		foreach ($photo as $key) {
        			# code...
        			
                echo'
                <div class="col-md-4 col-xs-12">

<div class="card-wrapper">
    <div id="card-1" class="card-rotating effect__click">

        <!--Front Side-->
        <div class="face front"   style="height:450px;">

            <!-- Image-->
            <div class="card-up">
                <img src="http://mdbootstrap.com/images/reg/reg%20(35).jpg" class="img-fluid">
            </div>
            <!--Avatar-->
            <div class="avatar"><img src="http://mdbootstrap.com/wp-content/uploads/2015/10/team-avatar-2.jpg" class="img-circle img-responsive">
            </div>
            <!--Content-->
            <div class="card-block">
                <h4>'.$key->user->username.'</h4>
                <p>Web developer</p>
                <!--Triggering button-->
                <a class="rotate-btn" data-card="card-1" onclick="document.getElementsByClassName(\'card-rotating\')['.$i.'].className+=\' flipped\'"><i class="fa fa-repeat"></i> About Me</a>
            </div>
        </div>
        

        <!--Back Side-->
        <div class="face back">

            <!--Content-->
            <h4>About me</h4>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
            <hr>
            <!--Social Icons-->
            <ul class="inline-ul">
                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!--Triggering button-->
            <a class="rotate-btn" data-card="card-1" onclick="document.getElementsByClassName(\'card-rotating\')['.$i.'].className=\'card-rotating effect__click\'"><i class="fa fa-undo"></i> Click here to rotate back</a>

        </div>
        <!--/.Back Side-->

    </div>                       
</div>
</div>';
$i++;
        		}
        		
        	?>
                
               
            </div>
           
        </div>
    </section>

    <!-- Clients Aside -->
    

    <!-- Contact Section -->
    
<?php include"footer.php"; ?>





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
