<?php
defined('BASEPATH') OR exit('This page does no exit');

class Themes {

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Theme_model');
          
    }

    public function getTheme()
    {
        $theme = $this->CI->Theme_model->getActiveTheme();
        return $theme;
    }
    
}