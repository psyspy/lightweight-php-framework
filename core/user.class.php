<?php

class user
{
    protected $username;
    protected $password;
    protected $user;
	protected static $logged_in_user;

    public function __construct() 
    {

    }

    public function login($username,$password)
    {
		$this->username = $username;
		$this->password = $password;
		
        $user = $this->check_credentials();
		
        if ($user) {
            $this->user = $user;
			$session_id = md5(microtime());
			print_r($user);
            $_SESSION['user']['id'] = $user['id'];
			$_SESSION['user']['session_id'] = $session_id;
			$this->user['session_id'] = $session_id;
			//db::update('user',array('session_id'=>$session_id),array('id'=>$user['id']));
			$db = db::get_instance();
			$db->query('update '.$db->get_prefix().'user set session_id=:sid where id=:id',array(':sid' => $session_id, ':id' => $user['id']));
            return true;
        }
        return false;
    }

    public function check_credentials($session_id = null)
    {
		$db = db::get_instance();
		
		if($session_id != null){
			
			$where = 'session_id=:sid and active=1 ';
			$where .= plugins::call('core_user_session_credentials_where');
			$query = 'select * from '.$db->get_prefix().'user where ';
			
			
			$db->query($query.$where,array(':sid' => $session_id));
			if($db->rows()==1){
				$user = $db->assoc();
				self::$logged_in_user = $user;
				return self::$logged_in_user;
			}
		
		}else{
		
			$where = 'login_name=:u and password=:p and active=1 ';
			$where .= plugins::call('core_user_userpass_credentials_where');
			$query = 'select * from '.$db->get_prefix().'user where ';
			
			
			$db->query($query.$where,array(':u' => $this->username,':p' => md5($this->password)));
			if($db->rows()==1){
				$user = $db->assoc();
				return $user[0];
			}
		
		}
        return false;
    }

    public function getUser()
    {
        return $this->user;
    }

	public static function get_logged_in_user()
    {
        return $this->logged_in_user;
    }
}

?>