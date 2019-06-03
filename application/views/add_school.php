<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title>Add School</title>

      <!--inlcuding bootstrap stylesheet-->
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


   </head> 
	
   <body> 
      <div class="container">
          <center><h3> <b>Add School</b> </h3></center>
         <form method = "POST" name="frmSchool" class="form-horizontal" action = "<?php echo base_url();?>schools/insertSchool">
      		
                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                 
                                            <div class="col-md-6">
                                                <?php echo form_input(['name'=>'name', 'class'=>'form-control', 'value'=>set_value("name"),'required'=>'required']);?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo form_error("name"); ?>
                                            </div>
                                        
                  </div>

                   <div class="form-group">
                     <label class="col-md-3 control-label">Select Course</label>
                           <div class="col-md-6 col-xs-6">
                           <select id="course_id" name="course_id[]"  class="form-control" required="required" multiple>
                                 <option value=""><?php echo 'Select';?></option>
                                <?php

                                  if(count($course_data)>0)
                                    {
                                     foreach($course_data as $name)
                                     {
                                     ?>
                                     <option value="<?php echo $name['id'];?>"><?php echo $name['course_name'];   ?></option>
                                     <?php }
                                    }
                                ?>
                              </select>
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