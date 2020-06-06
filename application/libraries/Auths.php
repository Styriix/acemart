<?php
defined('BASEPATH') OR exit('This page does not exist');

class Auths {

    public function __construct()
    {
        
        $this->CI =& get_instance();

        $this->CI->load->library(array(
            'session'
        ));

        $this->CI->load->model(array(
            'Account_model'
        ));
        
    }

    //* Determin if session i created
    public function adminLogged()
    {
        if($this->CI->session->userdata('admin_logged'))
        {
            //* sote session value
            $uid = $this->CI->session->userdata('uid');

            //* Validate the user id form databse
            if($admin_log = $this->CI->Account_model->validateUserLogId($uid))
            {
                return $admin_log;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    //* Determin if session is created for user
    public function userLogged()
    {
        if($this->CI->session->userdata('user_logged'))
        {
            //* sote session value
            $uid = $this->CI->session->userdata('uids');

            //* Validate the user id form databse
            if($user_log = $this->CI->Account_model->validateUserSectionLogId($uid))
            {
                return $user_log;
            }
            else
            {
                $this->CI->session->unset_userdata('uids');
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrive loged user details
    public function adminLoggedInfo()
    {
        $admin_info = $this->adminLogged();

        //* Pull out admin ogged infomations
        $this->CI->smarty->assign('usr', array(
            'username' => $admin_info->admin_username,
            'firstname' => $admin_info->admin_firstname,
            'lastname' => $admin_info->admin_lastname,
            'avater' => $admin_info->admin_profile_pic
        ));
    }

    //* Retrive loged user details for normal users
    public function userLoggedInfo()
    {
        $user_info = $this->userLogged();

        //* Pull out user logged infomations
        $this->CI->smarty->assign('usr', array(
            'username' => $user_info->user_username,
            'myid' => $user_info->user_id,
            'firstname' => $user_info->user_firstname,
            'lastname' => $user_info->user_lastname,
            'avater' => $user_info->user_avater,
            'balance' => number_format($user_info->bal_value, 2)
        ));
    }
}