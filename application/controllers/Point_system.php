<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Point_system extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->model("page_model");

		if(!$this->user->loggedin) $this->template->error(lang("error_1"));
		
		$this->template->loadData("activeLink", 
			array("point_system" => array("general" => 1)));
		$this->template->set_layout("client/themes/titan.php");
	}
    
  
    public function index() 
	{
        $id =  $this->user->info->ID;
        $posts = $this->user_model->get_p_point_calculate($id);
		$likes_c =  $this->user_model->get_l_point_calculate($id);
		$comments_c =  $this->user_model->get_c_point_calculate($id);
		$images_c =  $this->user_model->get_i_point_calculate($id);
		$video_c =  $this->user_model->get_v_point_calculate($id);
		
			


		$this->template->loadContent("point_system/index.php", array(
			"posts" => $posts,
			"likes_c" => $likes_c,
			"comments_c" => $comments_c,
			"images_c" => $images_c,
			"video_c" => $video_c,
		
		
			)
		);

		 
	}



}

?>