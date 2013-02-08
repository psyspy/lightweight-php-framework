<?php 

class theme{

	private static $smarty = null;
	private static $theme_folder = 'default/';
	private static $append = array();
	private static $css_files = array();
	
	public static function init(){
		self::$smarty = new Smarty();
		self::$smarty->error_reporting = E_ALL & ~E_NOTICE;
		self::$smarty->caching = false;
		
		self::set_folder('default/');
	}

	public static function show(){
	
	
		$css = self::$css_files;
		while  ($cur = current($css)){
			self::append('css_files','<link href="templates/'.self::$theme_folder.$cur.'" rel="stylesheet">');	
			next($css);			
		}
	
		$array = self::$append;
		while ($cur = current($array)) {
			self::assign(key($array),$cur);
			next($array);
		}
	
		
		self::$smarty->display(self::$smarty->template_dir[0].'index.tpl');
		
	}
	
	public static function assign($var, $value){
		self::$smarty->assign($var, $value);
	}
	
	public static function append($var, $value){
		if(!array_key_exists($var,self::$append)){
			self::$append[$var] = null;
		}
		self::$append[$var] .= $value;
	}
	
	public static function set_folder($folder){
	
		self::$theme_folder = $folder;
		self::$smarty->template_dir = './templates/'.$folder;
	
	}
	
	public static function get_folder(){
	
		return self::$theme_folder;
	
	}
	
	public static function add_css($file){
	
		self::$css_files[] = $file;
	
	}
	
	
	

}

?>