 <html style="overflow: hidden">
<head>


  <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


 <script type="text/javascript">
  

function fileSelected(input){
  document.getElementById('filename').innerHTML = "" + input.files[0].name;
  
}


</script>

</head>


<?php
$model = \common\models\User::find()->where(['id'=>Yii::$app->User->id])->one();
$modeldetail = app\models\PhotographerDetail::find()->where(['id_user'=>Yii::$app->User->id])->one();

?>

<div style="margin-top: 10px;">
 <form method="post" enctype="multipart/form-data" action="../tab_profile/">


<div class="row">
  <div class="col-xs-6 col-md-3" style="padding-left:30px">
  <img class="img-circle editable img-responsive" src="../../<?php echo $model->photo; ?>" style="border: 2px solid orange; width: 150px; height: 150px; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
  <br>




<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

  <input id="fileInput" name="photo" type="file" style="display:none;" onchange="fileSelected(this)"/>

  <label id="filename" style="color: grey; font-size: .875em;"></label>
  <div  class="btn btn-default" style="background-color: #edb311 !important;font-weight: bold;color: white;" onclick="document.getElementById('fileInput').click();"><i class="fa fa-user " ></i> Edit Profile Pic</div>

  </div>



  </form>



  <div class="col-xs-6 col-md-9">
    
   
    <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Biography</div>
  
  <div style="position: relative; float:left; width: 500px;">
  <textarea class="form-control" rows="7" id="comment" name="biography" ><?php echo $model->biography; ?></textarea>
  </div><br><br><br><br><br>

   <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
   <i style="color: grey; font-size: .875em;">Tell the world more about "You".</i>

<br> <br>


<?php
if(Yii::$app->User->identity->role_id==3)
{
?>
 <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Camera</div>
  
  <div style="position: relative; float:left; width: 500px;">
   <input type="text" class="form-control" name="camera" value="<?php echo $modeldetail->camera; ?>">
  </div>

   <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
 <br>
   <i style="color: grey; font-size: .875em;">Camera Used</i>
  <br><br>
<?php
}
?>


   <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Website</div>
  
  <div style="position: relative; float:left; width: 500px;">
   <input type="url" class="form-control" name="website" value="<?php echo $model->website; ?>" >
  </div>
  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i style="color: grey; font-size: .875em;">ex: http://www.yourwebsite.com</i>
  <br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Instagram</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control" name="instagram" value="<?php echo $model->instagram; ?>" >
  </div>
  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i style="color: grey; font-size: .875em;">ex: http://www.instagram.com/yourinstagramid</i>
  <br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Twitter</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control" name="twitter" value="<?php echo $model->twitter; ?>">
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i style="color: grey; font-size: .875em;">ex: http://www.twitter.com/yourtwitterid</i>
  <br><br>



  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Facebook</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control" name="facebook" value="<?php echo $model->facebook; ?>">
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i style="color: grey; font-size: .875em;">ex: http://www.facebook.com/yourfacebookid</i>
  <br><br>

  <!--  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
   <i>Tell the world more about "You".</i> -->




  <button type="submit" class="btn btn-default" style="background-color: #edb311 !important;font-weight: bold;color: white;">Submit</button>
</form>

  </div>
 
</div>


</div>
</html>