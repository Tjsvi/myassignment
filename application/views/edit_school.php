<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title>Edit School</title>

      <!--inlcuding bootstrap stylesheet-->
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


   </head> 
	
   <body> 
      <div class="container">
          <center><h3> <b>Edit School</b> </h3></center>
         <form method = "POST" name="frmEditSchool" class="form-horizontal" action = "<?php echo base_url();?>schools/updateSchools">
      		
                 <input type="hidden" name="id" value="<?php echo $detail_data[0]['id'];?>">
                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        
                                            <div class="col-md-6">
                                                <?php echo form_input(['name'=>'name', 'class'=>'form-control', 'value'=>set_value("name",$detail_data[0]['name']),'required'=>'required']);?>
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
                                if(!empty($detail_data[0]['courses']))
                                {
                                  $course_id = explode(',',$detail_data[0]['courses']);
                                  foreach ($course_data as $res) {
                                    ?>
                                  <option value="<?php echo $res['id'];?>" <?php if(in_array($res['id'],$course_id)){ echo 'selected="selected"';}?>><?php echo $res['course_name'];   ?></option>
                                 <?php }
                                }
                                ?>
                              </select>
                            </div>

                     </div>

                <center><?php  echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
                       echo form_submit(['name'=>'btnsubmit','value'=>'Edit','class'=>'btn btn-primary']);
                       echo form_close(); 
               ?> </center>
      		
            </form> 

         </div>
   </body>
	
</html>