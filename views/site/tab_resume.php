<html style="overflow: hidden">
<head>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<div style="margin-top: 10px;">


    
    <form>
    <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Biography</div>
  
  <div style="position: relative; float:left; width: 250px;">

  <select class="form-control" id="sel1">
  <?php
    $model = app\models\SkillLevel::find()->all();
    foreach ($model as $key) {
     
  ?>
    <option><?php echo $key->skill_level; ?></option>
    <?php
    }
    ?>
  </select>
  </div>

<br> <br>





   <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Website</div>
  
  <div style="position: relative; float:left; width: 500px;">
   <input type="text" class="form-control">
  </div><br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Instagram</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control">
  </div>
  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i>(http://www.instagram.com/yourinstagramid)</i>
  <br><br>


  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Twitter</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control">
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i>(http://www.twitter.com/yourtwitterid)</i>
  <br><br>



  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">Facebook</div>
  
  <div style="position: relative; float:left; width: 500px">
   <input type="text" class="form-control">
  </div>

  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
  <br>
   <i>(http://www.facebook.com/yourfacebookid)</i>
  <br><br>

  <!--  <div style="position: relative; float:left; margin-right: 10px; width: 80px;">&nbsp;</div>
   <i>Tell the world more about "You".</i> -->




  <button type="submit" class="btn btn-default" style="background-color: #edb311 !important;font-weight: bold;color: white;">Submit</button>
</form>

 


</div>
</html>