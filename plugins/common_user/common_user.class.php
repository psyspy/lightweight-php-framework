<?php

class common_user {
	public function core_execute() {
	
		theme::add_css('plugins/common_user/css/main.css');
	
		if(isset($_GET['p']) && $_GET['p']=='common_user'){
			if(isset($_GET['a']) && $_GET['a']=='login'){
				$this->login(
					isset($_POST['username']) ? $_POST['username'] : null,
					isset($_POST['pass']) ? $_POST['pass'] : null
				);
			}
		}
	}
	
	private function login($username, $pass){
	
		$smarty = new Smarty();
		$tpl = null;
		
		$login = new user();
		
		if($login->login($username,$pass)==true){
			header('location: ?p=common_user&a=settings');
		}else{
			$smarty->assign('register_error','');
			$smarty->assign('login_error','error');
			$smarty->assign('login_name',$username);
			$tpl = $smarty->fetch(theme::get_folder().'plugins/common_user/login.tpl');
			theme::append('content',$tpl);
		}
		

	
	}
}
