<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model {
	public function insert_data($username,$password,$link)
	{
		  $sql="insert ignore into person(username,password,link)
		 values('".$username."','".$password."','".$link."')";
		 $this->db->query($sql);

	}//end insert_data

		public function select_user()
	{
		 $sql="select person_id,username,password,link from person";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_user

	public function insert_post($person_id,$title,$price,$year,$university,$picture,$grouppost)
	{

	   $qry="insert ignore into post(person_id,title,price,year,university,picture,grouppost)
		 values(".$person_id.",'".$title."',".$price.",'".$year."','".$university."','".$picture."',".$grouppost.")";
	   $this->db->query($qry);

	}//end insert_post

		public function select_post()
	{
		 $sql="select post_id,title,year,price,university,grouppost from post where person_id=".$_SESSION['person_id'];
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_user

		public function select_updatepost($post_id)
	{
		 $sql="select post_id,title,year,price,university,grouppost from post where person_id=".$_SESSION['person_id']." and post_id=".$post_id;
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//select_updatepost
    
    public function update_post($post_id,$title,$price,$year,$university,$picture,$grouppost)
	{

	   $qry="update post set title='".$title."',year='".$year."',price=".$price.",university='".$university."',picture='".$picture."',grouppost=".$grouppost." WHERE post_id='".$post_id."'";
	   $this->db->query($qry);

	}//end update_post

	public function delete_post($post_id)
	{

	   $qry="delete from post where  post_id='".$post_id."'";
	   $this->db->query($qry);

	}//end delete_post

    	public function select_sportpost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id where grouppost=6";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_sportpost

		public function select_accountancypost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id  where grouppost=3";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_accountancypost

		public function select_artpost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id where grouppost=5";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_artpost

		public function select_basepost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id where grouppost=2";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_basepost

		public function select_engineeringpost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id where grouppost=4 ";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_engineeringpost

		public function select_genericpost()
	{
		 $sql="select title,year,price,university,picture,grouppost,link from post inner join person on post.person_id=person.person_id where grouppost=1";
		 $query=$this->db->query($sql);
		 return $query->result_array();
	}//end select_generic

}//end model
