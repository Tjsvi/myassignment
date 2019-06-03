<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('common_model');

	}
   
    //show school listing page
	public function index(){

        $data['data'] = $this->common_model->getRecords('courses');
        $data['title'] = 'Courses';
		$this->load->view('courses',$data);

	}

	//Add school
	public function addCourse()
	{
		$data['title'] = 'Courses';
		$this->load->view('add_course',$data);
	}
     
    //Insert record
    public function insertCourse()
	{
	
		$this->form_validation->set_rules('course_name','Course Name','required');
		$this->form_validation->set_rules('course_code','Course Code','required');
		$this->form_validation->set_rules('course_description','Course Description','required');
		$this->form_validation->set_rules('course_fee','Course Fee','required');
		if($this->form_validation->run() == false){
			 $this->session->set_flashdata('failed','Insert required data.');
			return redirect(base_url('courses'));
		}
		else
		{
			$course_name=$this->input->post('course_name');
			$course_code=$this->input->post('course_code');
			$course_description=$this->input->post('course_description');
			$course_fee=$this->input->post('course_fee');
			$date = date('Y-m-d H:i:s');

			$data = array('course_name'=>$course_name,'course_code'=>$course_code,'course_description'=>$course_description,'course_fee'=>$course_fee,'date'=>$date);
			$result=$this->common_model->insertrecord('courses',$data);
			if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url('courses'));
			}else
			{
                 $this->session->set_flashdata('failed','Failed to Send data.');
                 return redirect(base_url('courses'));
			}
          
		}
    }

    //show edit page
    public function editCourse($id)
    {
       $wher_arr = array('id'=>$id);
       $data['detail_data'] = $this->common_model->getRecords('courses',$wher_arr);
       $this->load->view('edit_course',$data);
    }

    //update records
    public function updateCourse()
    {
        $this->form_validation->set_rules('course_name','Course Name','required');
		$this->form_validation->set_rules('course_code','Course Code','required');
		$this->form_validation->set_rules('course_description','Course Description','required');
		$this->form_validation->set_rules('course_fee','Course Fee','required');
		if($this->form_validation->run() == false){
			 $this->session->set_flashdata('failed','Insert required data.');
			return redirect(base_url('courses'));
		}
		else
		{
			$id=$this->input->post('id');
			$course_name=$this->input->post('course_name');
			$course_code=$this->input->post('course_code');
			$course_description=$this->input->post('course_description');
			$course_fee=$this->input->post('course_fee');
			$date = date('Y-m-d H:i:s');
             
            $where = array('id'=>$id);
			$data = array('course_name'=>$course_name,'course_code'=>$course_code,'course_description'=>$course_description,'course_fee'=>$course_fee,'date'=>$date);
			$result=$this->common_model->update_row_by_id('courses',$where,$data);
			if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url('courses'));
			}else
			{
                 $this->session->set_flashdata('failed','Failed to Update data.');
                 return redirect(base_url('courses'));
			}
          
		}
    }

    //delete record
    public function deleteCourse($id)
    {
       
    	$result = $this->common_model->delete_by_id('courses',$id);
    	if($result)
			{
                 $this->session->set_flashdata('success','Sucessfully Done.');
                 return redirect(base_url('courses'));
			}else
			{
                 $this->session->set_flashdata('failed','Failed to delete.');
                 return redirect(base_url('courses'));
			}

    }

    //view details
    public function viewCourse($id)
    {
     
     $wher_arr = array('id'=>$id);
     $data['detail_data'] = $this->common_model->getRecords('courses',$wher_arr);
     $data['title'] = 'Course Details';
	 $this->load->view('details_course',$data);

    }


}
?>