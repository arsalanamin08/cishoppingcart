<?php 
	class product extends CI_Model
	{
		public function addValue()
		{
			$data['name']=$this->input->post('name');
			$data['price']=$this->input->post('price');
			$data['description']=$this->input->post('description');
			$this->db->insert('product',$data);
		}
	}
?>