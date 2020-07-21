<?php 
/**
 * 
 */
class SessionManager{

	public static function setSession_user($data, $default = true){
		if ($default) {
			$_SESSION['vc_user'] = array(
				'allow' => (isset($data['allow']) AND $data['allow'] !='') ? $data['allow'] : false,
				'id' => (isset($data['id']) AND $data['allow'] !='') ? $data['id'] : false,
				'username' => (isset($data['username']) AND $data['username'] !='') ? $data['username'] : false,
				'email' => (isset($data['email']) AND $data['email'] !='') ? $data['email'] : false,
			  	'photo_profile' => (isset($data['photo_profile']) AND $data['photo_profile'] !='') ? $data['photo_profile'] : false,
				'password' => (isset($data['password']) AND $data['password'] !='') ? $data['password'] : false,
				'fonction' => (isset($data['fonction']) AND $data['fonction'] !='') ? $data['fonction'] : false,
			);
		}else{
			$_SESSION['vc_user'] = $data;
		}
	}

	public static function ss(){
		session_start();
	}

	public static function sd(){
		$_SESSION = array();
		$_SESSION['vc_user']['allow'] = null;
		session_unset();
		session_destroy();
	}
}
