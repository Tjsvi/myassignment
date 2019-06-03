<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title><?php echo $title; ?></title>

      <!--inlcuding bootstrap stylesheet-->
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


   </head> 
  
   <body> 
      <div class="container">        
      <div class="row form-horizontal">

          <center><h3> <b>Course Details</b> </h3></center>
         <center> <div class="row">
                   <div class="form-group">
                                     <label class="col-md-3 col-xs-12 control-label">Course Name -</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-md-6">
                                                <?php echo $detail_data[0]['course_name'];?>
                                            </div>
                                        </div>
                   </div>
                   <div class="form-group">
                                     <label class="col-md-3 col-xs-12 control-label">Course Code -</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-md-6">
                                                <?php echo $detail_data[0]['course_code'];?>
                                            </div>
                                        </div>
                   </div><div class="form-group">
                                     <label class="col-md-3 col-xs-12 control-label">Course Description -</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-md-6">
                                                <?php echo $detail_data[0]['course_description'];?>
                                            </div>
                                        </div>
                   </div><div class="form-group">
                                     <label class="col-md-3 col-xs-12 control-label">Course Fee -</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-md-6">
                                                <?php echo $detail_data[0]['course_fee'];?>
                                            </div>
                                        </div>
                   </div>
                   </div></center>
         </div>
         </div>
   </body>
  
</html>    