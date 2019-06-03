<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title>Add Course</title>

      <!--inlcuding bootstrap stylesheet-->
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


   </head> 
	
   <body> 
      <div class="container">
          <center><h3> <b>Add Course</b> </h3></center>
         <form method = "POST" name="frmSchool" class="form-horizontal" action = "<?php echo base_url();?>courses/insertCourse">
      		
                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Course Name</label>
                                 
                                            <div class="col-md-6">
                                                <?php echo form_input(['name'=>'course_name', 'class'=>'form-control', 'value'=>set_value("course_name"),'required'=>'required']);?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo form_error("course_name"); ?>
                                            </div>
                                        
                   </div>
                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Course Code</label>
                                 
                                            <div class="col-md-6">
                                                <?php echo form_input(['name'=>'course_code', 'class'=>'form-control', 'value'=>set_value("course_code"),'required'=>'required']);?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo form_error("course_code"); ?>
                                            </div>
                                        
                   </div>
                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Course Description</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea  name="course_description" class="form-control"  rows="5" required></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo form_error("course_description"); ?>
                                        </div>
                                    </div>
                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Course Fee</label>
                                 
                                            <div class="col-md-6">
                                                <?php echo form_input(['name'=>'course_fee', 'class'=>'form-control', 'value'=>set_value("course_fee"),'required'=>'required']);?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo form_error("course_fee"); ?>
                                            </div>
                                        
                   </div>




              <?php  echo '<center>';
                     echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
                      echo form_submit(['name'=>'btnsubmit','value'=>'Add','class'=>'btn btn-primary']);
                      echo '</center>';
                       echo form_close(); 
               ?> </center>
      		
            </form> 

         </div>
   </body>
	
</html>