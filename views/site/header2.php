
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class=" navbar-custom navbar-inverse navbar-fixed-top navbar  " style="background-color: black; height:70px;padding:10px;">
        <div class="container" style=" margin-left:20px; margin-right:20px; width:1310px; padding-top:0;height:70px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll"  >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/advanced/frontend/web/" style="padding:0; float:left; z-index:9999;"><img src="/advanced/frontend/web/img/logos/logo_orange.png" style ="width:200px;"alt=""></a>
                

<!-- 
                <span style="font-size:16px;color:white; font-family: 'Exo 2', sans-serif ;">Available At </span>
                &nbsp;&nbsp;
                 <i class="fa fa-android fa-2x"  style="font-size:30px;color:white;"> </i>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-apple fa-2x"  style="font-size:30px;color:white;padding-top: 20px;"> </i> -->


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                 

                  <?php
                        if(Yii::$app->User->id)
                        {
                        ?>

                    

                    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;">Hire or Get Hired</span></span></a>
        <ul class="dropdown-menu">
         <li><a href="#" style="color: black; "><span class=" glyphicon glyphicon-list-alt"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Buy Packages </span></span></a></li>

          <li ><a href="/advanced/frontend/web/site/logout" style="color: black; "><span class="glyphicon glyphicon-search"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Search Professionals</span></span></a></li>

          <li role="separator" class="divider"></li>

          <li ><a href="/advanced/frontend/web/site/logout" style="color: black; "><span class="glyphicon glyphicon-camera"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Register Your Service</span></span></a></li>

       
         
         
        </ul>
      </li>

                        <?php
                        }
                        ?>
                 
                    <li>
                        <a class="page-scroll" href="/advanced/frontend/web/site/categories/"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;">Services Category</span></a>
                    </li>




                     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;">Explore</span></span></a>
        <ul class="dropdown-menu">

         <li ><a href="/advanced/frontend/web/site/logout" style="color: black; " ><span class="glyphicon glyphicon-duplicate" ><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Terms and Conditions</span></span></a></li>
 
          <li ><a href="/advanced/frontend/web/site/aboutus/" style="color: black; "><span class="glyphicon glyphicon-bullhorn"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> About Us</span></span></a></li>


          <li ><a href="/advanced/frontend/web/site/contactus/" style="color: black; "><span class="glyphicon glyphicon-earphone" ><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Contact Us</span></span></a></li>

            <li ><a href="/advanced/frontend/web/site/logout" style="color: black; "><span class="glyphicon glyphicon-flag"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Blog</span></span></a></li>


          <li ><a href="/advanced/frontend/web/site/faq/" style="color: black; "><span class="glyphicon glyphicon-question-sign"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> FAQ</span></span></a></li>

       
         
         
        </ul>
      </li>



                    <?php
                        if(Yii::$app->User->id)
                        {
                        ?>

                     <li><a href="#" style="color: black; "><span class="glyphicon glyphicon-shopping-cart" style="color: white;"> </span> <span class="badge badge-success" style="background-color: green;">0</span></a></li>


                    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"><img class="nav-user-photo" style="border-radius:50%" width="30px" src="http://fpstatic.blob.core.windows.net/profilepic-65x65/93f1355f-4b7d-4901-8b0a-8e7448eeead5.jpg"> Welcome, <?= Yii::$app->User->identity->username ?>
        </span></span></a>
        <ul class="dropdown-menu">


         <li><a href="#" style="color: black; "><span class="glyphicon glyphicon-th-list"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> My Hires </span></span></a></li>

          <li><a href="#" style="color: black; "><span class="glyphicon glyphicon-pencil"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> My Reviews </span></span></a></li>

           <li><a href="#" style="color: black; "><span class=" glyphicon glyphicon-shopping-cart"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> My Order </span></span></a></li>


         <li><a href="/advanced/frontend/web/site/profile/" style="color: black; "><span class=" glyphicon glyphicon-user"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> My Profile </span></span></a></li>


        <li role="separator" class="divider"></li>

          <li ><a href="/advanced/frontend/web/site/logout" style="color: black; "><span class="glyphicon glyphicon-log-out"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;"> Logout</span></span></a></li>
         
         
        </ul>
      </li>

                        <?php
                        }
                         else
                        {
                            ?>
                            <li>
                                <a class="page-scroll" href="/advanced/frontend/web/site/login/"><span  style="font-family: 'Exo 2', sans-serif ;text-transform: none;">Sign In</span></a>
                            </li>
                           <?php 
                        }


                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
