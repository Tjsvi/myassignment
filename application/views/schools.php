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
			 <?php if($msg = $this->session->flashdata('success')){ ?>
                                <div class="alert alert-dismissible alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $msg; ?>
                                </div>
                            <?php }elseif($msg = $this->session->flashdata('failed')){ ?>
                                <div class="alert alert-dismissible alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $msg; ?>
                                </div>
                            <?php } ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-size: 2.5em;">
				<b><?php echo $title; ?></b>
				<font style="font-size: 0.5em;">
					<a href="<?php echo base_url()?>Schools/addSchool">Add School </a> 
				</font>
				<font style="font-size: 0.5em;" class="pull-right">
					<a href="<?php echo base_url()?>courses">Show Courses </a> 
				</font>
				<h3> <b>List of Schools</b> </h3>
			
			</div>
		</div>

			<font size="3">
				<?php
				if(!empty($data))
				{ ?>
					<div class="table-responsive">
                            <table class="table datatable" id="schooltbl">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php foreach ($data as $key){
										   //	 echo '<pre>',print_r($key),'<pre>';?>
                                                <tr>
                                                    <td><?php echo $key['id']; ?></td>
                                                    <td><?php echo $key['name'];?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                           
                                                        <ul class="pull-right">
                                                                <a class="btn btn-default"  href="<?php echo base_url();?>Schools/viewSchool/<?php echo $key['id'];?>">
                                                                    <i class="fa fa-pencil fa-fw"></i>
                                                                        Details
                                                                </a>

                                                                <a class="btn btn-primary"  href="<?php echo base_url();?>Schools/editSchool/<?php echo $key['id'];?>">
                                                                    <i class="fa fa-pencil fa-fw"></i>
                                                                        Edit
                                                                </a>
                                                            
                                                            
                           <a onclick="return myFunction()" class="btn btn-danger" href="<?php echo base_url();?>Schools/deleteSchool/<?php echo $key['id'];?>">
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
        $('#schooltbl').DataTable({
            responsive: true
            });
        });
	function myFunction(){ 

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
