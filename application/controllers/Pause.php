<?php
defined('BASEPATH') OR exit('This page is not found');

class Pause extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        if(! $this->Settings_model->isPause())
        {
            redirect('/');
            exit();
        }
    }

    public function index()
    {
        $this->smarty->view('public/pause.tpl');
    }
} 