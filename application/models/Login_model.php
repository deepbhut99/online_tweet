<?php

class Login_Model extends CI_Model 
{

	public function getUser($email, $pass) 
	{
		return $this->db->select("ID")
		->where("email", $email)->where("password", $pass)->get("users");
	}

	public function getUserByEmail($email) 
	{
		return $this->db->select("ID,email,password,token,active,online_timestamp")
		->where("email", $email)->get("users");
	}

	public function getUserByUsername($username) 
	{
		return $this->db->select("ID,email,password,token,active,online_timestamp")
		->where("username", $username)->get("users");
	}

	public function updateUserToken($userid, $token) 
	{
		$this->db->where("ID", $userid)
		->update("users", array("token" => $token));
	}

	public function addToResetLog($ip) 
	{
		$this->db->insert("reset_log", 
			array(
				"IP" => $ip, 
				"timestamp" => time()
			)
		);
	}

	public function getResetLog($ip) 
	{
		return $this->db->where("IP", $ip)->get("reset_log");
	}

	public function getUserEmail($email) 
	{
		return $this->db->where("email", $email)
		->select("ID, username")->get("users");
	}

	public function resetPW($userid, $token) 
	{
		$this->db->insert("password_reset", 
			array(
				"userid" => $userid, 
				"token" => $token, 
				"IP" => $_SERVER['REMOTE_ADDR'], 
				"timestamp" => time()
			)
		);
	}

	public function getResetUser($token, $userid) 
	{
		return $this->db->where("token", $token)
		->where("userid", $userid)->get("password_reset");
	}

	public function updatePassword($userid, $password) 
	{
		$this->db->where("ID", $userid)
		->update("users", array("password" => $password));
	}

	public function deleteReset($token) 
	{
		$this->db->where("token", $token)->delete("password_reset");
	}

	public function get_oauth_user($provider, $oauth_id) 
	{
		return $this->db->where("oauth_provider", $provider)
		->where("oauth_id", $oauth_id)
		->get("users");
	}

	public function update_facebook_user($provider, $oauth_id, $token) 
	{
		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $token,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function update_google_user($provider, $oauth_id, $token) 
	{
		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $token,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function update_oauth_user($oauth_token, $oauth_secret,
		$oauth_id, $provider) 
	{

		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $oauth_token,
			"oauth_secret" => $oauth_secret,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function get_login_attempts($ip, $username, $time) 
    {
    	return $this->db->where("IP", $ip)->where("username", $username)
    		->where("timestamp >", time() - $time)->get("login_attempts");
    }

    public function update_login_attempt($id, $data) 
    {
    	$this->db->where("ID", $id)->update("login_attempts", $data);
    }

    public function add_login_attempt($data) 
    {
    	$this->db->insert("login_attempts", $data);
    }

	public function get_login_feed($id ,$page)
	{
	
		return $this->db
			->select("feed_item.ID, feed_item.content, feed_item.post_as,
				feed_item.timestamp, feed_item.userid, feed_item.likes,
				feed_item.comments, feed_item.location, feed_item.user_flag,
				feed_item.profile_userid, feed_item.template, feed_item.site_flag,
				user_images.ID as imageid, user_images.file_name as image_file_name,
				user_images.file_url as image_file_url,
				user_videos.ID as videoid, user_videos.file_name as video_file_name,
				user_videos.youtube_id, user_videos.extension as video_extension,
				users.username, users.first_name, users.last_name, users.avatar,
				feed_likes.ID as likeid,
				profile.username as p_username, profile.first_name as p_first_name,
				profile.last_name as p_last_name, profile.avatar as p_avatar,
				profile.online_timestamp as p_online_timestamp,
				user_albums.ID as albumid, user_albums.name as album_name,
				
				pages.ID as pageid, pages.name as page_name, 
				pages.profile_avatar as page_avatar, pages.slug as page_slug,
				calendar_events.title as event_title, calendar_events.description as event_description,
				calendar_events.start as event_start, calendar_events.end as event_end,
				calendar_events.location as event_location, calendar_events.ID as eventid,
				page_users.roleid,
				user_saved_posts.ID as savepostid,
				feed_item_subscribers.ID as subid")
			->join("users", "users.ID = feed_item.userid")
			// ->join("feed_image_multi_post", "feed_image_multi_post.post_id = feed_item.ID", "left outer")
			// ->join("user_images", "user_images.ID = feed_image_multi_post.image_id", "left outer")
			->join("user_images", "user_images.ID = feed_item.imageid", "left outer")
			->join("user_albums", "user_albums.ID = user_images.albumid", "left outer")
			->join("user_videos", "user_videos.ID = feed_item.videoid", "left outer")
			->join("users as profile", "profile.ID = feed_item.profile_userid", "left outer")
			->join("pages", "pages.ID = feed_item.pageid", "left outer")
			->join("page_users", "page_users.pageid = feed_item.pageid AND page_users.userid = " . $id, "LEFT OUTER")
			->join("calendar_events", "calendar_events.ID = feed_item.eventid", "left outer")
			->join("feed_likes", "feed_likes.postid = feed_item.ID AND feed_likes.userid = " . $id, "LEFT OUTER")
			->join("user_saved_posts", "user_saved_posts.postid = feed_item.ID AND user_saved_posts.userid = " . $id, "left outer")
			->join("feed_item_subscribers", "feed_item_subscribers.postid = feed_item.ID and feed_item_subscribers.userid = " .$id, "LEFT OUTER")
			->limit(5, $page)
			->order_by("feed_item.ID", "DESC")
			->get("feed_item");
	

	}
	
	public function feed_image_multipost($id) 
	{
		return $this->db
			->where("feed_image_multi_post.post_id", $id)
			->select("user_images.file_name, user_images.ID as imageid,
				user_images.file_url, user_images.name, user_images.description,
				user_albums.ID as albumid, user_albums.name as album_name")
			->join("user_images", "user_images.ID = feed_image_multi_post.image_id")
			->join("user_albums", "user_albums.ID = user_images.albumid")
			->get("feed_image_multi_post");
	}
    
}

?>