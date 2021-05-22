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
		
		// posts count
		$posts = $this->user_model->get_p_point_calculate($id);
		$post = array();
		foreach ($posts->result() as $r1) {
			$post[] = $r1;
		}
          $posts_co = count($post);


		// likes count 
		$likes_c =  $this->user_model->get_l_point_calculate($id);
		
		if ($likes_c->num_rows() == 0) {
			$this->template->jsonError(lang("error_85"));
		}
		$likes_co = $likes_c->row();


		// comment count
		$comments_c =  $this->user_model->get_c_point_calculate($id);
		if ($comments_c->num_rows() == 0) {
			$this->template->jsonError(lang("error_85"));
		}
		$comments_co = $comments_c->row();


		// images count
		$images_c =  $this->user_model->get_i_point_calculate($id);
		$images = array();
		foreach ($images_c->result() as $r4) {
			$images[] = $r4;
		}
          $images_co = count($images);
		
		
		
		// video count
		$video_c =  $this->user_model->get_v_point_calculate($id);
		$video = array();
		foreach ($video_c->result() as $r5) {
			$video[] = $r5;
		}
        $video_co = count($video);




		$single_point_v = $this->user_model->get_v_singlepoint();
		if ($single_point_v->num_rows() == 0) {
			$this->template->errori(lang("error_94"));
		}
		$single_point_v = $single_point_v->row();
		$single_point_v = $single_point_v->single_point_value;

		$total_like= $single_point_v*$likes_co->likes;
		$total_image= $single_point_v*$images_co;
		$total_posts=  $single_point_v*$posts_co;
		$total_video=  $single_point_v*$video_co;
		$total_comment= $single_point_v*$comments_co->comments;
		
		$grand_total = $total_comment+$total_image+$total_like+$total_posts+$total_video;
		$this->user_model->update_user_point(
			$id,
			array(
				"point_count" => $grand_total
			)
		);







		$this->template->loadContent("point_system/index.php", array(
			"posts_co" => $posts_co,
			"likes_co" => $likes_co,
			"comments_co" => $comments_co,
			"images_co" => $images_co,
			"video_co" => $video_co,
			"single_point_v" => $single_point_v,
			"total_like"=>$total_like,
			"total_image"=>$total_image,
			"total_posts"=>$total_posts,
			"total_video"=>$total_video,
			"total_comment"=>$total_comment,
			"grand_total"=>$grand_total

			)
		);

		 
	}

   public function reward()
   {
	$id =  $this->user->info->ID;
	$current = $this->user_model->get_user_by_id($id);
	if ($current->num_rows() == 0) {
		$this->template->errori(lang("error_94"));
	}
	$current_p = $current->row();

	$single_point_v_c = $this->user_model->get_v_singlepoint();
	if ($single_point_v_c->num_rows() == 0) {
		$this->template->errori(lang("error_94"));
	}
	$single_point_v_c_f = $single_point_v_c->row();
	$single_point_v_c_f = $single_point_v_c_f->currency_v ;


	$this->template->loadContent("point_system/reward.php", array(
		"current" =>$current,
		"current_p"=>$current_p,
		"single_point_v_c_f" =>$single_point_v_c_f

		)
	);
   }






}
