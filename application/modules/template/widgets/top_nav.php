<?php

class Top_Nav extends Widget {

    public function display($data) {
        
		/*
        if (!isset($data['items'])) {
            $data['items'] = array('Home', 'About', 'Contact');
        }
		*/

        $this->view('widgets/top_nav', $data);
    }
    
}