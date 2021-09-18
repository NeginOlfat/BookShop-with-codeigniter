<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_account extends CI_Controller {
	public function c_check()
	{

        $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'نام کاربری',
'required|min_length[4]|max_length[20]|is_unique[person.username]|alpha_dash');

		$this->form_validation->set_rules('password', 'رمز عبور',
'required|min_length[4]|max_length[20]|alpha_dash|matches[repassword]');

		$this->form_validation->set_rules('repassword', 'تایید رمز عبور','required');

		$this->form_validation->set_rules('_link','راه ارتباطی',
'required|is_unique[person.link]');

		$this->form_validation->set_message('min_length', 'حداقل کاراکتر وارد  شده در  فیلد : %s 4 است');
		$this->form_validation->set_message('max_length','حداکثر کاراکتر وارد شده در  فیلد : %s 20 است');
		$this->form_validation->set_message('required','فیلد : %s  باید پرشود');
		$this->form_validation->set_message('is_unique','فیلد : %s قبلا  ثبت شده است');
		$this->form_validation->set_message('alpha_dash','لطفا فقط اعداد و حروف الفبا  در  فیلد : %s وارد کنید');

		$this->form_validation->set_message('matches','رمز عبور و تایید رمز عبور باید یکی باشد');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');
		}else{
			
				$this->data_model->insert_data($_POST['username'],md5($_POST['password']),$_POST['_link']);
				header("location:http://localhost:81/CI_book/index.php/c_menu/login?usersucsse=2");
       }
	}
    
		public function c_register()
	{
		$this->load->view('register');
	}


		public function c_login()
	{

		$data['info']=$this->data_model->select_user();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'نام کاربری',
        'required|alpha_dash');
        $this->form_validation->set_rules('password', 'رمز عبور',
        'required|alpha_dash');
		$this->form_validation->set_message('alpha_dash','لطفا فقط اعداد و حروف الفبا  در  فیلد : %s وارد کنید');
		$this->form_validation->set_message('required','فیلد  : %s  باید پرشود');
		if(isset($_POST['btnlogin']))
		{
			if ($this->form_validation->run() == FALSE)
		      {
			    $this->load->view('login');
			   }
			else
			{
			 foreach ($data['info'] as $key ) 
			 {
			 	if($key['username']==$_POST['username'] && $key['password']==md5($_POST['password']))
			 	{
			 		setcookie('user','user',time()+60*60*1000,"/");
			 		$_SESSION['infouser']=$key['username'];
			 		$_SESSION['person_id']=$key['person_id'];
			 		$_SESSION['infolink']=$key['link'];
			 		$this->load->view('success',$_SESSION);
			 		 $cu=2;
			 	}
             }   
             if(!$cu==2)
             	header("location:http://localhost:81/CI_book/index.php/c_menu/login?error=2");
			}
			     
		}
	}
	 

		public function c_checkregister()
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
			    $this->load->view('insert');
	    }else{
		     if($_FILES['file']['name']==""){
	      		$file_name="";
	  	      }
			else 
		    {  
		    	$file_name=rand('0123456789',8).$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], "images/uploads/".$file_name);
			}

		 $this->data_model->insert_post($_SESSION['person_id'],$_POST['title'],$_POST['price'],$_POST['year'],$_POST['university'],$file_name,$_POST['jumpMenu']);
        $this->c_postsuccess();
	}
 }
     public function c_postsuccess()
	  {
	  	 $this->load->view('postsuccess');
	  }
		

}