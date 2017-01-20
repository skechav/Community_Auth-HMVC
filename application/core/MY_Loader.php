<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {

	/*** Will call the module/config/autoload.php for defined modules***/
	/***Autoloader w/ module autoload***/
	protected function _ci_autoloader(){
		//Call CI Autoloader
		parent::_ci_autoloader();

		//Call Module Autoloader
		$this->_modules_autoload();
	}

	/*** Autoload Modules ***/
	private function _modules_autoload(){
		//Variables
		$modules = $this->_modules_config();
		$location = $this->_module; 
		
		//Config Found
		if(isset($modules)){
			
			//Autoload Each Module
			foreach($modules['autoload'] as $module){
				//Define Module to Autoload
				$this->_module = $module;
				
				//Autoload Module
				$this->_autoloader(array());
			}
			
			//Restore Location
			$this->_module = $location;
			
		}
	}
	
	/***Get APPPATH.'config/modules.php'***/
	private function _modules_config(){
		if (file_exists(APPPATH.'config/modules.php'))
		{
			include(APPPATH.'config/modules.php');
		}
		
		if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/modules.php'))
		{
			include(APPPATH.'config/'.ENVIRONMENT.'/modules.php');
		}
		
		if ( ! isset($modules))
		{
			return;
		}
		
		return $modules;
	}
}