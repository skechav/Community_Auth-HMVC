<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function index() {
        // Set the title
        $this->template->title = 'SB Admin - Bootstrap Admin Template';
        
        //Include Assets
        $this->template->stylesheet->add(asset_url() . 'css/bootstrap.min.css');
		$this->template->stylesheet->add(asset_url() . 'css/sb-admin.css');
		$this->template->javascript->add(asset_url() . 'css/js/jquery.js');
		$this->template->javascript->add(asset_url() . 'js/bootstrap.min.js');
		
		//Load Content
        $this->template->content->view('test', array());
        
        // Publish the template
        $this->template->publish();
    }
}