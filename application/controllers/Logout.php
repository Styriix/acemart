<?php
defined('BASEPATH') OR exit('This page does not exist');

class Logout extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    }

    //* Administrator log out
    public function admin_logout()
    {
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('upl_uniq');
        $this->session->unset_userdata('admin_logged');
        redirect('auth/admin');
        exit();
    }

    //* user logout
    public function user_logout()
    {
        $gc = new Google_Client();
        $gc->setClientId('933851447297-maprmv1n717n981amsq8nqqjrjg9empr.apps.googleusercontent.com');
        $gc->setClientSecret('kvmRKW0ffYzxrnMl3LI41XIx');
        $gc->setRedirectUri(base_url('auth/google_auth/'));
        $gc->addScope('email');
        $gc->addScope('profile');
        $gc->revokeToken();
        $this->session->unset_userdata('uids');
        $this->session->unset_userdata('upl_uniq');
        $this->session->unset_userdata('user_logged');
        $this->session->unset_userdata('access_token');
        redirect('/');
        exit();
    }
}