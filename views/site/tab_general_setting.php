<html style="overflow: hidden">
<head>
<script src="../../vendor/jquery/jquery.min.js"></script>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




</head>
<?php
$model = \common\models\User::find()->where(['id'=>Yii::$app->User->id])->one();
$modeldetail = app\models\PhotographerDetail::find()->where(['id_user'=>Yii::$app->User->id])->one();

$fullname =  explode(" ", $model->username);
$firstname = $fullname[0];



?>


<script type="text/javascript">
$(document).ready(function(){
  var gender = "<?php echo $model->gender; ?>";

  if(gender=="Male")
  {
      document.getElementById('male').checked=true;
  }
  else
  {
     document.getElementById('female').checked=true;
  }
});
</script>



<div style="margin-top: 10px;">


    
     <form method="post" enctype="multipart/form-data" action="../tab_general_setting/">


<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

   




   <div style="position: relative; float:left; margin-right: 10px; width: 110px;">First Name</div>
  
  <div style="position: relative; float:left; width: 500px;">
   <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
  </div><br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 110px;">Last Name</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control" name="lastname" value="<?php for ($i=1; $i <count($fullname) ; $i++) { 
  $lastname = $fullname[$i];
  echo $lastname." ";
}  ?>">

  </div>
  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>

  <br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 110px;">Gender</div>
  
  
   <div style="position: relative; float:left; width: 500px;">

    <label class="radio-inline"><input type="radio" name="gender" id="male" value="Male">Male</label>
    <label class="radio-inline"><input type="radio" name="gender" id="female" value="Female">Female</label>
  
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  
  <br><br>



  <div style="position: relative; float:left; margin-right: 10px; width: 110px;">Phone Number</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control" name="phone" value="<?php echo $model->phone; ?>">
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
 
  <br><br>

  <!--  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
   <i>Tell the world more about "You".</i> -->



<div align="center"  style="position: relative; float:left; width: 500px">
  <button type="submit" class="btn btn-default" style="background-color: #edb311 !important;font-weight: bold;color: white;">Submit</button>
  </div>
</form>

 


</div>
</html>