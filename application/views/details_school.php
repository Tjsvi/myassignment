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

          <center><h3> <b>School Details</b> </h3></center>

                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name -</label></br>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-md-6">
                                                <?php echo $detail_data[0]['name'];?>
                                            </div>
                                        </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-3 control-label">Courses -</label></br>
                          <div class="col-md-6 col-xs-6">
                            <?php if(!empty($courses_details))
                                    $cnt = 1;
                                    foreach($courses_details as $res)
                                    {
                                      foreach($res as $res)
                                      {
                                         echo  '<strong>Course:</strong>'.$cnt.'</br>';
                                         echo  '<strong>Course Name :</strong>'.$res['course_name'].'</br>';
                                         echo  '<strong>Course Description :</strong>'.$res['course_description'].'</br>';
                                         echo  '<strong>Course fee :</strong>'.$res['course_fee'].'</br>';
                                         echo '</br>';?>
                                      <?php  }
                                      
                                     
                                     $cnt++;
                                    }
                            ?>
                          </div>
                     </div>
                     </div>
          
          

         </div>
   </body>
  
</html>