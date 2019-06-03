<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
	<title><?php echo $title; ?></title>

	<!--inlcuding bootstrap stylesheet-->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	 <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet" />
     <link href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" rel="stylesheet" />

	

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-size: 2.5em;">
				<b><?php echo $title; ?></b>
				<font style="font-size: 0.5em;">
					<a href="<?php echo base_url()?>courses/addCourse">Add Courses </a> 
				</font>
				<h3> <b>List of Courses</b> </h3>
			
			</div>
		</div>

			<font size="3">
				<?php
				if(!empty($data))
				{ ?>
					<div class="table-responsive">
                            <table class="table datatable" id="coursetbl">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Course Name</th>
                                                <th>Course code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php foreach ($data as $key){
										   //	 echo '<pre>',print_r($key),'<pre>';?>
                                                <tr>
                                                    <td><?php echo $key['id']; ?></td>
                                                    <td><?php echo $key['course_name'];?></td>
                                                    <td><?php echo $key['course_code'];?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                           
                                                        <ul class="pull-right">
                                                          
                                                    <a class="btn btn-default"  href="<?php echo base_url();?>courses/viewCourse/<?php echo $key['id'];?>">
                                                                    <i class="fa fa-pencil fa-fw"></i>
                                                                        Details
                                                                </a>

                                                                <a class="btn btn-primary"  href="<?php echo base_url();?>courses/editCourse/<?php echo $key['id'];?>">
                                                                    <i class="fa fa-pencil fa-fw"></i>
                                                                        Edit
                                                                </a>
                                                            
                                                            
                           <a onclick="return myFunction()" class="btn btn-danger" href="<?php echo base_url();?>courses/deleteCourse/<?php echo $key['id'];?>">
                                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                                        Delete
                                                                </a>
                                                            
                                                        </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                         </tbody>
                                    </table>
                            </div>
				<?php

				}
				else
				{
					echo 'No Records';
				}
				?>

			</div>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
        $('#coursetbl').DataTable({
            responsive: true
            });
        });
	function myFunction()
    { 

                var r = confirm("Do you want to delete this record?");

                if (r == true){

                    return true;

                } 

                else{ 

                    return false;

                }

    }

 </script>
</body>
