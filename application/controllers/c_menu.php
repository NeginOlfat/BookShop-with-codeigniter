<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_menu extends CI_Controller {


	public function about()
	{
		$this->load->view('about');
	}
	   public function login()
	{

		$this->load->view('login');
	}
	public function insert()
	{
		$this->load->view('insert',$_COOKIE);
	}
	public function update()
	{
	  $row['updates']=$this->data_model->select_updatepost($_GET['delete']);
	  $this->load->view('update', $row);
	}
	
		public function c_updatepost()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'عنوان',
'required');
     
     $this->form_validation->set_rules('year', 'سال',
'required');

     $this->form_validation->set_rules('price', 'قیمت',
'required|integer');

     $this->form_validation->set_message('integer','فیلد: %s   باید عدد وارد کنید');
     $this->form_validation->set_message('required','فیلد: %s   باید پر شود');

     
    if ($this->form_validation->run() == FALSE)
		{
			    $this->load->view('update',$_SESSION);
	    }else{
	    	  if($_FILES['file']['name']==""){
	      		$file_name="";
	  	      }
			else 
		    {
		    	$file_name=rand('0123456789',8).$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], "images/uploads/".$file_name);
			}
		 $this->data_model->update_post($_SESSION['post_id'],$_POST['title'],$_POST['price'],$_POST['year'],$_POST['university'],$_FILES['file']['name'],$_POST['jumpMenu']);
	
        $this->edit_delete();
    }
	}
	public function edit_delete()
	{
		$data['info']=$this->data_model->select_post();
		$this->load->view('edit_delete',$data);
	}
		public function c_success()
	{ 
		$this->load->view('success',$_SESSION);
	}
		public function sport()
	{
		$data['info']=$this->data_model->select_sportpost();
		$this->load->view('sport',$data);
	}

		public function accountancy()
	{
		$data['info']=$this->data_model->select_accountancypost();
		$this->load->view('accountancy',$data);
	}

		public function art()
	{
		$data['info']=$this->data_model->select_artpost();
		$this->load->view('art',$data);
	}

		public function base()
	{
		$data['info']=$this->data_model->select_basepost();
		$this->load->view('base',$data);
	}

		public function engineering()
	{
		$data['info']=$this->data_model->select_engineeringpost();
		$this->load->view('engineering',$data);
	}

		public function generic()
	{
		$data['info']=$this->data_model->select_genericpost();
		$this->load->view('sport',$data);
	}

			public function delete()
	{
		 $this->data_model->delete_post($_GET['delete']);
		 $this->edit_delete();
	}


}
