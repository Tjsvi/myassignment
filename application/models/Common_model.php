<?php if( !defined('BASEPATH')) exit('No direct script access alloed');

class Common_model extends CI_Model{

    //function for getting records
	public function getRecords($tbl_name,$condition=FALSE,$select=FALSE,$order_by=FALSE,$start=FALSE,$limit=FALSE){
		if($select!="")
		{$this->db->select($select);}

		if($condition!="")
		{
			$condition=$condition;
		}
		else
		{$condition=array();}
		if($order_by!="")
		{
			foreach($order_by as $key=>$val)
			{$this->db->order_by($key,$val);}
		}
		if($limit!="" || $start!="")
		{
			$this->db->limit($limit,$start);
		}
		$rst=$this->db->get_where($tbl_name,$condition);
		return $rst->result_array();
	}

	//function for inserting records
	public function insertrecord($tbl_name,$data_array){
		if($this->db->insert($tbl_name,$data_array))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//function for delete record
	public function delete_by_id($tblname,$rowid){
		$this->db->where('id', $rowid);
		return $this->db->delete($tblname);
	}

	//function for updating record
	public function update_row_by_id($tblname,$where_array,$update_array){
		if (is_array($update_array) && is_array($where_array)){
			$this->db->where($where_array);
			if($this->db->update($tblname,$update_array))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

}
?>