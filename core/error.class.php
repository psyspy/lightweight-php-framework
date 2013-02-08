<?php

	class error
	{
		
		private static $errors = array();
		
		public static function add($plugin, $msg){
			self::$errors[][0] = $plugin;
			self::$errors[count(self::$errors)-1][1] = $msg;
		}
		
		public static function show(){
			print_r(self::$errors);
		}

	}

?>