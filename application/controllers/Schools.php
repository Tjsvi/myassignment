<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('common_model');

	}
   
    //show school listing page
	public function index(){

        $data['data'] = $this->common_model->getRecords('schools');
        $data['title'] = 'Schools';
		$this->load->view('schools',$data);

	}

	//Add school
	public function addSchool()
	{
		$data['course_data'] = $this->common_model->getRecords('courses');
		$data['title'] = 'Schools';
		$this->load->view('add_school',$data);
	}

	public function insertSchool()
	{
	
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('course_id[]','Select Course','required');
		if($this->form_validation->run() == false){
			 $this->session->set_flashdata('failed','Insert required data.');
			return redirect(base_url());
		}
		else
		{
			$name=$this->input->post('name');
			$course_id=$this->input->post('course_id');
			$course_ids = implode(',',$course_id);
			$date = date('Y-m-d H:i:s');
			$data = array('name'=>$name,'courses'=>$course_ids,'date'=>$date);
			$result=$this->common_model->insertrecord('schools',$data);
			if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url());
			}else
			{
                 $this->session->set_flashdata('failed','Failed to Send data.');
                 return redirect(base_url());
			}
          
		}
    }

    //show edit page
    public function editSchool($id)
    {
       $wher_arr = array('id'=>$id);
       $data['detail_data'] = $this->common_model->getRecords('Schools',$wher_arr);
       $data['course_data'] = $this->common_model->getRecords('courses');
       $this->load->view('edit_school',$data);
    }

    //update records
    public function updateSchools()
    {
        $this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('course_id[]','Select Course','required');
		if($this->form_validation->run() == false){
			 $this->session->set_flashdata('failed','Insert required data.');
			return redirect(base_url());
		}
		else
		{
			$id=$this->input->post('id');
			$name=$this->input->post('name');
			$course_id=$this->input->post('course_id');
			$course_ids = implode(',',$course_id);
			$date = date('Y-m-d H:i:s');
			$where = array('id'=>$id);
			$data = array('name'=>$name,'courses'=>$course_ids,'date'=>$date);
			$result=$this->common_model->update_row_by_id('schools',$where,$data);
			if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url());
			}else
			{
                 $this->session->set_flashdata('failed','Failed to update data.');
                 return redirect(base_url());
			}
          
        }
    }

    //delete record
	public function deleteSchool($id)
    {
       
    	$result = $this->common_model->delete_by_id('schools',$id);
    	if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url());
			}else
			{
                 $this->session->set_flashdata('failed','Failed to delete.');
                 return redirect(base_url());
			}

    }

    //view details
    public function viewSchool($id)
    {
     
     $wher_arr = array('id'=>$id);
     $data['detail_data'] = $this->common_model->getRecords('schools',$wher_arr);
     if(!empty($data['detail_data']))
     {
     	$course_ids = explode(',',$data['detail_data'][0]['courses']);
     	if(!empty($course_ids))
     	{
     		foreach ($course_ids as $id ) {
     			# code...
                $wher_arr = array('id'=>$id);
     		    $courses[] = $this->common_model->getRecords('courses',$wher_arr);
     		}
     		
     	}
     }
     $data['courses_details'] = $courses;
     $data['title'] = 'School Details';
	 $this->load->view('details_school',$data);

    }


}

?>