<?php

class Side_Nav extends Widget {

    public function display($data) {
        
		/*
        if (!isset($data['items'])) {
            $data['items'] = array('Home', 'About', 'Contact');
        }*/

        $this->view('widgets/side_nav', $data);
    }
    
}