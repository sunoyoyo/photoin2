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
  var city = "<?php echo $model->city; ?>";

  if(city=="Jakarta")
  {
      document.getElementById('city').value = "Jakarta";
  }
  else if(city=="Tangerang")
  {
      document.getElementById('city').value  = "Tangerang";
  }
  
});
</script>



<div style="margin-top: 10px;">


    
     <form method="post" enctype="multipart/form-data" action="../tab_address/">


<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

   




   <div style="position: relative; float:left; margin-right: 10px; width: 110px;">Address</div>
  
  <div style="position: relative; float:left; width: 500px;">
   <textarea class="form-control" rows="7" id="comment" name="address" ><?php echo $model->address; ?></textarea>
  </div><br><br><br><br><br><br><br>


  




<div style="position: relative; float:left; margin-right: 10px; width: 110px;">City</div>
  
  <div style="position: relative; float:left; width: 500px;">

  <select class="form-control" id="city" name="city">
    <option value="Jakarta">Jakarta</option>
    <option value="Tangerang">Tangerang</option>
    <option value="Bandung">Bandung</option>
    <option value="Surabaya">Surabaya</option>
    <option value="Yogyakarta">Yogyakarta</option>
    <option value="Semarang">Semarang</option>
  </select>
  </div>

<br> <br>


  <!--  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
   <i>Tell the world more about "You".</i> -->



<div align="center"  style="position: relative; float:left; width: 500px">
  <button type="submit" class="btn btn-default" style="background-color: #edb311 !important;font-weight: bold;color: white;">Submit</button>
  </div>
</form>

 


</div>
</html>