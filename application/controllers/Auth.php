<?php
defined('BASEPATH') OR exit('This page does not exit');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        //* Check if session is created
        if($this->auths->adminLogged())
        {
            $this->session->unset_userdata('uid');
            $this->session->unset_userdata('upl_uniq');
            $this->session->unset_userdata('admin_logged');
        }
    }

    /*
    ===============================================
    * Page viewing section
    ===============================================
    */

    //* Administrator login here
    public function admin()
    {
        $this->smarty->view('auth/admin.tpl');
    }

    //* User signup page
    public function signup()
    {
        if($this->session->userdata('uids'))
        {
            redirect('/');
            exit();
        }
        $this->smarty->view('auth/signup.tpl');
    }

    /*
    ================================================
    *   Form request processing zones
    ================================================
    */

    //* Admin login account check
    public function admin_login_check()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Validate the form request

        //* Email Address
        $this->form_validation->set_rules('txtemail', 'Email Address', 'trim|required|xss_clean|strip_tags');

        //* Password
        $this->form_validation->set_rules('txtpassword', 'Password', 'trim|required|xss_clean|strip_tags');

        //* Run the form validation
        
        if ($this->form_validation->run() == FALSE) {
            
            $errors = validation_errors('<div class="alert alert-danger" align="center">','</div>');

            $this->session->set_flashdata($errors);
            redirect('auth/admin');
        } else {
            
            //* Assign the form data
            $email = $this->input->post('txtemail');
            $password = $this->input->post('txtpassword');

            //* Call the database for login credential check
            if($uid = $this->Account_model->checkAdminLoginData($email, $password))
            {
                //* Store login data in session
                
                $admin_login = array(
                    'uid' => $uid,
                    'admin_logged' => TRUE
                );
                
                $this->session->set_userdata($admin_login);

                //* Redirecting
                redirect('admin');
                exit();
                
            }
            else
            {
                //* Login data re incorrect show errormessages
                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">Your email or password is Incorrect!</div>');
                redirect('auth/admin');
                exit();
            }
        }
        
    }

    //* User login account check
    public function user_login()
    {
        if(! $this->input->is_ajax_request())
        {
            redirect('error_404');
            exit();
        }

        //* Validate the form request

        //* Username
        $this->form_validation->set_rules('username', 'UserName', 'trim|required|xss_clean|strip_tags', array(
            'required' => 'Your Username is Required to Login'
        ));

        //* Password
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|strip_tags', array(
            'required' => 'Your Password is Required to Login'
        ));

        //check form validations
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            echo $errors['error'];
            exit();
        } else {
            
            //* Assign the form data
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //* Call the database for login credential check
            if($uid = $this->Account_model->checkUserLoginData($username, $password))
            {
                //* Update last seen time zone
                $this->Account_model->updateLastSeenOfUser($uid);
                //* Store login data in session
                
                $user_login = array(
                    'uids' => $uid,
                    'user_logged' => TRUE
                );
                
                $this->session->set_userdata($user_login);

                //* Redirecting
                echo "
                    <script>location.reload();</script>
                ";
                exit();
                
            }
            else
            {
                echo '<div class="alert alert-danger" align="center">Your Username Or Password Is Incoorect</div>';
                exit();
            }
        }
        
    }

    //* User creating account
    public function registration()
    {
        $check_r = $this->Settings_model->getForGoogleRecaptcha();

        if ($check_r->gr_enable == 1) {
            $recaptcha = new \ReCaptcha\ReCaptcha($check_r->gr_s_key);//Secret key used here
            $resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

            //* Let validate the form request
            if ($resp->isSuccess()) {
                //* firstname
                $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                    'required' => 'Please provide Your %s',
                    'min_length' => 'The %s must be at least 3 characters',
                    'max_length' => 'The %s can not be more than 20 Characters'
                ));

                //* Lastname
                $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                    'required' => 'Please provide Your  %s',
                    'min_length' => 'The %s must be at least 3 characters',
                    'max_length' => 'The %s can not be more than 20 Characters'
                ));

                //* Username
                $this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[4]|max_length[50]|xss_clean|strip_tags|is_unique[zd_users.user_username]', array(
                    'required' => 'Please provide your %s',
                    'min_length' => 'The %s must be at least 4 characters',
                    'max_length' => 'The %s can not be more than 50 Characters',
                    'is_unique' => 'The %s you provide is already taken'
                ));

                //* Email address
                $this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean|strip_tags|is_unique[zd_users.user_email]|valid_email', array(
                    'required' => 'The %s is required please fill it',
                    'is_unique' => 'The provided %s is already taken'
                ));

                //* Password
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
                    'required'=> 'Please provide your %s',
                    'min_length' => 'The %s must be at aleast 8 characters'
                ));

                //* Confirm password
                $this->form_validation->set_rules('con_pass', 'Confirm Password', 'trim|required|xss_clean|strip_tags|matches[password]', array(
                    'required' => 'Confirm the your password',
                    'matches' => 'User passwords does not match'
                ));

                //* Check the form validation
                if ($this->form_validation->run() == false) {
                    
                    //* Prepare the error messages
                    $errors = array(
                        'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>', '</div>')
                    );

                    echo $errors['error'];
                } else {
                    //* Assign profile avater for the user
                    $input = array("avatar-1", "avatar-2", "avatar-3", "avatar-4", "avatar-5");
                    $rand_keys = array_rand($input);
                    $avater = 'default/' . $input[$rand_keys] .'.png';

                    //* Encrypt password
                    $old_pass = $this->input->post('password');
                    $password = password_hash($old_pass, PASSWORD_DEFAULT);

                    //* Referal checker zone
                    if (! empty($_POST['ref'])){
                        $ref = $this->input->post('ref');
                    }
                    else
                    {
                        $ref = NULL;
                    }

                    //* Store all form request data in array
                    $data = array(
                        'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                        'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                        'user_username' => strtolower($this->input->post('username')),
                        'user_email' => $this->input->post('email'),
                        'user_avater'=> $avater,
                        'user_password' => $password,
                        'user_ref' => $ref
                    );

                    //* Call the database for creating action
                    if ($lastId = $this->Account_model->userCreateAccount($data)) {
                        //* Generate user verifiction code
                        $key = $this->encryption->create_key(64);
                        $activate_code = bin2hex($key);
                        $v_key = password_hash($activate_code, PASSWORD_DEFAULT);

                        //* Let update the verify code for user
                        if ($this->Account_model->createActivationCode($lastId, $v_key)) {

                            //* Create a user balance for the account
                            $this->Account_model->createUserBalance($lastId);

                            //* Let send actovatopm leu tp the user
                            $site_info = $this->Settings_model->getApllicationInfo();
                            $template = array(
                                'username' => strtolower($this->input->post('username')),
                                'email' => $this->input->post('email'),
                                'firstname' => ucfirst(strtolower($this->input->post('fristname'))),
                                'lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                                'avater' => base_url() . 'statoc/profile/users/' . $avater,
                                'sitename' => $site_info->set_site_name,
                                'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                                'main_url' => base_url(),
                                'activate_link' => base_url() .'activate-account/verify?user='.$this->input->post('username').'&key='. $activate_code
                            );
                            
                            $send_activate_email = $this->Email_model->getEmailTempsToSend($id = 2);
                            $template['send_msg'] = $send_activate_email;
                            $messages = $this->parser->parse('mails/activate/send', $template, true);

                            $email_set = $this->Settings_model->getSmtpDetails();
                            if ($email_set->smtp_type == 'ssl') {
                                $config['protocol']  = 'smtp';
                                $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                                $config['smtp_port'] = $email_set->smtp_port;
                                $config['smtp_user'] = $email_set->smtp_username;
                                $config['smtp_pass'] = $email_set->smtp_password;
                                $config['mailtype']  = 'html';
                                $config['charset']   = 'utf-8';
                                $config['newline'] = '\n';
                            } else {
                                $config['protocol']  = 'smtp';
                                $config['smtp_host'] = $email_set->smtp_host;
                                $config['smtp_port'] = $email_set->smtp_port;
                                $config['smtp_user'] = $email_set->smtp_username;
                                $config['smtp_pass'] = $email_set->smtp_password;
                                $config['mailtype']  = 'html';
                                $config['charset']   = 'utf-8';
                                $config['newline'] = '\n';
                            }

                            $this->email->initialize($config);
                            $this->email->set_mailtype("html");
                            $this->email->set_newline("\r\n");
                            $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                            $this->email->to($this->input->post('email'));
                            $this->email->subject('Activate your '.$site_info->set_site_name .' Account');
                            $this->email->message($messages);
                            if ($this->email->send()) {
                                echo '<div class="alert alert-success" align="center"> Your account has been created. Please check your email to activate your account.</div>';
                            } else {
                                echo '<div class="alert alert-warning" align="center"> Your accuount was create buy we could not send you an email to activate your account. Please contact support</div>';
                            }
                        }
                    }
                }
            } else {
                echo '<div class="alert alert-warning align="center">Prove you are not a Robot</div>';
            }
        } else {
             //* firstname
             $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide Your %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Lastname
            $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide Your  %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Username
            $this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[4]|max_length[50]|xss_clean|strip_tags|is_unique[zd_users.user_username]', array(
                'required' => 'Please provide your %s',
                'min_length' => 'The %s must be at least 4 characters',
                'max_length' => 'The %s can not be more than 50 Characters',
                'is_unique' => 'The %s you provide is already taken'
            ));

            //* Email address
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean|strip_tags|is_unique[zd_users.user_email]|valid_email', array(
                'required' => 'The %s is required please fill it',
                'is_unique' => 'The provided %s is already taken'
            ));

            //* Password
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
                'required'=> 'Please provide your %s',
                'min_length' => 'The %s must be at aleast 8 characters'
            ));

            //* Confirm password
            $this->form_validation->set_rules('con_pass', 'Confirm Password', 'trim|required|xss_clean|strip_tags|matches[password]', array(
                'required' => 'Confirm the your password',
                'matches' => 'User passwords does not match'
            ));

            //* Check the form validation
            if ($this->form_validation->run() == false) {
                
                //* Prepare the error messages
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>', '</div>')
                );

                echo $errors['error'];
            } else {
                //* Assign profile avater for the user
                $input = array("avatar-1", "avatar-2", "avatar-3", "avatar-4", "avatar-5");
                $rand_keys = array_rand($input);
                $avater = 'default/' . $input[$rand_keys] .'.png';

                //* Encrypt password
                $old_pass = $this->input->post('password');
                $password = password_hash($old_pass, PASSWORD_DEFAULT);

                //* Checking referal zone
                if (! empty($_POST['ref'])){
                    $ref = $this->input->post('ref');
                }
                else
                {
                    $ref = NULL;
                }

                //* Store all form request data in array
                $data = array(
                    'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                    'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                    'user_username' => strtolower($this->input->post('username')),
                    'user_email' => $this->input->post('email'),
                    'user_avater'=> $avater,
                    'user_password' => $password,
                    'user_ref' => $ref
                );

                //* Call the database for creating action
                if ($lastId = $this->Account_model->userCreateAccount($data)) {
                    //* Generate user verifiction code
                    $key = $this->encryption->create_key(64);
                    $activate_code = bin2hex($key);
                    $v_key = password_hash($activate_code, PASSWORD_DEFAULT);

                    //* Let update the verify code for user
                    if ($this->Account_model->createActivationCode($lastId, $v_key)) {

                        //* Create a user balance for the account
                        $this->Account_model->createUserBalance($lastId);

                        //* Let send actovatopm leu tp the user
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $template = array(
                            'username' => strtolower($this->input->post('username')),
                            'email' => $this->input->post('email'),
                            'firstname' => ucfirst(strtolower($this->input->post('fristname'))),
                            'lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                            'avater' => base_url() . 'statoc/profile/users/' . $avater,
                            'sitename' => $site_info->set_site_name,
                            'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                            'main_url' => base_url(),
                            'activate_link' => base_url() .'activate-account/verify?user='.$this->input->post('username').'&key='. $activate_code
                        );
                        
                        $send_activate_email = $this->Email_model->getEmailTempsToSend($id = 2);
                        $template['send_msg'] = $send_activate_email;
                        $messages = $this->parser->parse('mails/activate/send', $template, true);

                        $email_set = $this->Settings_model->getSmtpDetails();
                        if ($email_set->smtp_type == 'ssl') {
                            $config['protocol']  = 'smtp';
                            $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                            $config['smtp_port'] = $email_set->smtp_port;
                            $config['smtp_user'] = $email_set->smtp_username;
                            $config['smtp_pass'] = $email_set->smtp_password;
                            $config['mailtype']  = 'html';
                            $config['charset']   = 'utf-8';
                            $config['newline'] = '\n';
                        } else {
                            $config['protocol']  = 'smtp';
                            $config['smtp_host'] = $email_set->smtp_host;
                            $config['smtp_port'] = $email_set->smtp_port;
                            $config['smtp_user'] = $email_set->smtp_username;
                            $config['smtp_pass'] = $email_set->smtp_password;
                            $config['mailtype']  = 'html';
                            $config['charset']   = 'utf-8';
                            $config['newline'] = '\n';
                        }

                        $this->email->initialize($config);
                        $this->email->set_mailtype("html");
                        $this->email->set_newline("\r\n");
                        $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                        $this->email->to($this->input->post('email'));
                        $this->email->subject('Activate your '.$site_info->set_site_name .' Account');
                        $this->email->message($messages);
                        if ($this->email->send()) {
                            echo '<div class="alert alert-success" align="center"> Your account has been created. Please check your email to activate your account.</div>';
                        } else {
                            echo '<div class="alert alert-warning" align="center"> Your accuount was create buy we could not send you an email to activate your account. Please contact support</div>';
                        }
                    }
                }
            }
        }
    }

    //* Activating user account
    public function verify_account($url)
    {
        if($_GET['user'] && $_GET['key'])
        {
            $username = $_GET['user'];
            $key = $_GET['key'];

            //* Let get the user id from user account
            $uid = $this->Account_model->getUserId($username);

            //* Let send the data to database for validating action
            if($this->Account_model->validateUserVerifyToken($uid, $key))
            {
                //* Activate the user account
                if($this->Account_model->activateTheNewUserAccount($uid))
                {
                    //* Remove the verification key
                    $this->Account_model->removeUserVerificationKey($uid);

                    //* Get the user informations
                    $u_info = $this->Account_model->getTheUserInfo($uid);

                    //* Let send actovatopm leu tp the user
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $template = array(
                        'username' => $u_info->user_username,
                        'email' => $u_info->user_email,
                        'firstname' => $u_info->user_firstname,
                        'lastname' => $u_info->user_lastname,
                        'sitename' => $site_info->set_site_name,
                        'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                        'main_url' => base_url()
                    );
                    
                    $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 1);
                    $template['send_msg'] = $send_welcome_email;
                    $messages = $this->parser->parse('mails/welcome/send', $template, true);

                    $email_set = $this->Settings_model->getSmtpDetails();
                    if ($email_set->smtp_type == 'ssl') {
                        $config['protocol']  = 'smtp';
                        $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                        $config['smtp_port'] = $email_set->smtp_port;
                        $config['smtp_user'] = $email_set->smtp_username;
                        $config['smtp_pass'] = $email_set->smtp_password;
                        $config['mailtype']  = 'html';
                        $config['charset']   = 'utf-8';
                        $config['newline'] = '\n';
                    } else {
                        $config['protocol']  = 'smtp';
                        $config['smtp_host'] = $email_set->smtp_host;
                        $config['smtp_port'] = $email_set->smtp_port;
                        $config['smtp_user'] = $email_set->smtp_username;
                        $config['smtp_pass'] = $email_set->smtp_password;
                        $config['mailtype']  = 'html';
                        $config['charset']   = 'utf-8';
                        $config['newline'] = '\n';
                    }

                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                    $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                    $this->email->to($u_info->user_email);
                    $this->email->subject('Welcome to '.$site_info->set_site_name);
                    $this->email->message($messages);
                    $this->email->send();

                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"> Congratulations your account is now fully ready! you can now Login</div>');
                    redirect('auth/signup');
                }
            }
        }
        else
        {
            rdirect('error_404');
            exit();
        }
    }

    //* User reset password
    public function reset_password()
    {
        if( ! $this->input->is_ajax_request())
        {
            exit('Something Went Wrong!');
        }

        $this->form_validation->set_rules('pass_user', 'Username', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('pass_email', 'Email Address', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors('<div class="alert alert-danger">', '</div>');
        } else {
            $username = $this->input->post('pass_user');
            $email = $this->input->post('pass_email');
            $check_befor_reset = $this->Account_model->letResetPassword($username, $email);
            if($check_befor_reset)
            {
                $n = 15;
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                $randomString = '';
                for ($i = 0; $i < $n; $i++) { 
                    $index = rand(0, strlen($characters) - 1); 
                    $randomString .= $characters[$index]; 
                }

                $new_password = password_hash($randomString, PASSWORD_DEFAULT);
                $uid = $check_befor_reset->user_id;
                $data = array(
                    'user_password' => $new_password
                );

                if($this->Account_model->resetPassword($uid, $data))
                {
                    //let send email

                     //let send verification code via email
                    
                     $site_info = $this->Settings_model->getApllicationInfo();
                     $template = array(
                         'site_logo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                         'site_name' => $site_info->set_site_name,
                         'main_url' => base_url(),
                         'user_firstname' => $check_befor_reset->user_firstname,
                         'user_lastname' => $check_befor_reset->user_lastname,
                         'password' => $randomString
                     );

                     $messages = $this->load->view('mails/reset_pass/send', $template, true);

                     $email_set = $this->Settings_model->getSmtpDetails();
                    if($email_set->smtp_type == 'ssl') {
                        $config['protocol']  = 'smtp';
                        $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                        $config['smtp_port'] = $email_set->smtp_port;
                        $config['smtp_user'] = $email_set->smtp_username;
                        $config['smtp_pass'] = $email_set->smtp_password;
                        $config['mailtype']  = 'html';
                        $config['charset']   = 'utf-8';
                        $config['newline'] = '\n';
                    } else {
                        $config['protocol']  = 'smtp';
                        $config['smtp_host'] = $email_set->smtp_host;
                        $config['smtp_port'] = $email_set->smtp_port;
                        $config['smtp_user'] = $email_set->smtp_username;
                        $config['smtp_pass'] = $email_set->smtp_password;
                        $config['mailtype']  = 'html';
                        $config['charset']   = 'utf-8';
                        $config['newline'] = '\n';
                    }

                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                    $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                    $this->email->to($check_befor_reset->user_email);
                    $this->email->subject('Your ' . $site_info->set_site_name . ' Account Password');
                    $this->email->message($messages);
                    if($this->email->send()) {

                        //let redirect the user
                        echo '
                        <div class="alert alert-success"> New password sent to you email address</div>
                    ';
                    }
                }
            }
            else
            {
                echo '<div class="alert alert-danger"> We can not Identify you.</div>';
            }
        }
        
    }

    //* Facebook authentication
    public function fb_auth()
    {
        $fb_key = $this->Extra_model->getFacebookAppKeys();
        //* Delare facebook configuration
        $fb = new \Facebook\Facebook([
            'app_id' => $fb_key->fb_app_key,
            'app_secret' => $fb_key->fb_app_secret,
            'default_graph_version' => 'v2.10',
        ]);

        $fb_output = "";
        $helper = $fb->getRedirectLoginHelper();

        if(isset($_GET['code']))
         {

            //* User is now logged
            if($this->session->userdata('access_token'))
             {
                //* User already has a valid session
                $access_token = $this->session->userdata('access_token');
            } 
            else 
            {
                //* Generate new session for user
                $access_token = $helper->getAccessToken();
                $this->session->set_userdata('access_token', $access_token);
        
                //* set default access token
                $fb->setDefaultAccessToken($this->session->userdata('access_token'));
            }
        
            $graph_res = $fb->get("/me?fields=first_name,last_name,name,email", $access_token);
        
            $fb_my_info = $graph_res->getGraphUser();
        
            if(! empty($fb_my_info['email']) && ! empty($fb_my_info['name'])) {
                //* User is logged let us stor userdata

                $user_name = $fb_my_info['name'];
                $user_name = str_replace(' ', '', $user_name);
                $user_email = $fb_my_info['email'];
                $user_fname = $fb_my_info['first_name'];
                $user_lname = $fb_my_info['last_name'];

                //* Let check if user email is already taken
                if($uid = $this->Account_model->fbCheckIfEmailIsUsed($user_email))
                {
                    if (! $this->session->userdata('uids')) {
                        //* let get unique id and grant login access
                        //* Update last seen time zone

                        $this->Account_model->updateLastSeenOfUser($uid);
                        //* Store login data in session

                        

                        $this->session->set_userdata('uids', $uid);
                        $this->session->set_userdata('user_logged', true);

                        //* Redirecting
                        redirect('/#');
                        exit();
                    }
                }
                else
                {
                    //* Let create new user account
                    $user_name = substr($user_name, 6);

                    //* Let check unique user name
                    $check_username = $this->Account_model->checkUsedUsername($user_name);
                    $i = 0;
                    while($check_username != 0)
                    {
                        $i++; //Add 1 to i
                        $user_name = $user_name . $i;
                        $check_username = $this->Account_model->checkUsedUsername($user_name);
                    }

                    //* Assign profile avater for the user
                    $input = array("avatar-1", "avatar-2", "avatar-3", "avatar-4", "avatar-5");
                    $rand_keys = array_rand($input);
                    $avater = 'default/' . $input[$rand_keys] .'.png';

                    //* Password generate
                    $n = 15;
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                    $randomString = '';
                    for ($i = 0; $i < $n; $i++) { 
                        $index = rand(0, strlen($characters) - 1); 
                        $randomString .= $characters[$index]; 
                    }
                    $new_password = password_hash($randomString, PASSWORD_DEFAULT);


                    //* Let generate user details
                    $data = array(
                        'user_status' => 1,
                        'user_firstname' => $user_fname,
                        'user_lastname' => $user_lname,
                        'user_username' => strtolower($user_name),
                        'user_email' => $user_email,
                        'user_avater' => $avater,
                        'user_password' => $new_password
                    );

                    //* Insert data to database
                    if ($uid = $this->Account_model->userCreateAccount($data))
                    {

                        //* Create a user balance for the account
                        $this->Account_model->createUserBalance($uid);
    
                        //* Get the user informations

                        $u_info = $this->Account_model->getTheUserInfo($uid);

                        //* Let send actovatopm leu tp the user
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $template = array(
                            'username' => $u_info->user_username,
                            'email' => $u_info->user_email,
                            'firstname' => $u_info->user_firstname,
                            'lastname' => $u_info->user_lastname,
                            'sitename' => $site_info->set_site_name,
                            'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                            'main_url' => base_url()
                        );

                        $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 1);
                        $template['send_msg'] = $send_welcome_email;
                        $messages = $this->parser->parse('mails/welcome/send', $template, true);

                        $email_set = $this->Settings_model->getSmtpDetails();
                        if ($email_set->smtp_type == 'ssl') {
                            $config['protocol']  = 'smtp';
                            $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                            $config['smtp_port'] = $email_set->smtp_port;
                            $config['smtp_user'] = $email_set->smtp_username;
                            $config['smtp_pass'] = $email_set->smtp_password;
                            $config['mailtype']  = 'html';
                            $config['charset']   = 'utf-8';
                            $config['newline'] = '\n';
                        } else {
                            $config['protocol']  = 'smtp';
                            $config['smtp_host'] = $email_set->smtp_host;
                            $config['smtp_port'] = $email_set->smtp_port;
                            $config['smtp_user'] = $email_set->smtp_username;
                            $config['smtp_pass'] = $email_set->smtp_password;
                            $config['mailtype']  = 'html';
                            $config['charset']   = 'utf-8';
                            $config['newline'] = '\n';
                        }

                        $this->email->initialize($config);
                        $this->email->set_mailtype("html");
                        $this->email->set_newline("\r\n");
                        $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                        $this->email->to($u_info->user_email);
                        $this->email->subject('Welcome to '.$site_info->set_site_name);
                        $this->email->message($messages);
                        $this->email->send();

                        $user_login = array(
                            'uids' => $uid,
                            'user_logged' => TRUE
    
                        );

                        $this->session->set_userdata($user_login);
    
                        //* Redirecting
                        redirect('/#');
                        exit();
                    }
                }


            }
        }
    }

    //* Goggle authentication
    public function google_auth()
    {
        $gg_key = $this->Extra_model->getGoogleAppKeys();
        $gc = new Google_Client();
        $gc->setClientId($gg_key->gg_app_key);
        $gc->setClientSecret($gg_key->gg_app_secret_key);
        $gc->setRedirectUri(base_url('auth/google_auth/'));
        $gc->addScope('email');
        $gc->addScope('profile');

        //* Let procced authentication
        $google_auth = '';

        //* Lect check if session to get code is set
        if(isset($_GET['code']))
        {
            //* Proceed with auth request
            $token = $gc->fetchAccessTokenWithAuthCode($_GET['code']);

            //* Let check if there is error autenticating the user
            if(! isset($_GET['error']))
            {
                //* No error detected we can proceed
                $gc->setAccessToken($token['access_token']);
                $this->session->set_userdata('access_token', $token['access_token']);

                //* Let set the google service
                $google_service = new Google_Service_Oauth2($gc);
                $data = $google_service->userinfo->get();

                //* Now let process user data
                if(! empty($data['email'] && ! empty($data['given_name']) && ! empty($data['family_name'])))
                {
                    //* The user got the data we need let procced
                    $user_email = $data['email'];
                    $user_fname = $data['given_name'];
                    $user_lname = $data['family_name'];
                    $u_name = strtolower($user_fname);
                    $user_name = substr($u_name, 6);

                    //* Let check if user email is already taken
                    if($uid = $this->Account_model->fbCheckIfEmailIsUsed($user_email))
                    {
                        if (! $this->session->userdata('uids')) {
                            //* let get unique id and grant login access
                            //* Update last seen time zone

                            $this->Account_model->updateLastSeenOfUser($uid);
                            //* Store login data in session

                            

                            $this->session->set_userdata('uids', $uid);
                            $this->session->set_userdata('user_logged', true);

                            //* Redirecting
                            redirect('/#');
                            exit();
                        }
                    }
                    else
                    {

                        //* Let check unique user name
                        $check_username = $this->Account_model->checkUsedUsername($user_name);
                        $i = 0;
                        while($check_username != 0)
                        {
                            $i++; //Add 1 to i
                            $user_name = $user_name . $i;
                            $check_username = $this->Account_model->checkUsedUsername($user_name);
                        }

                        //* Assign profile avater for the user
                        $input = array("avatar-1", "avatar-2", "avatar-3", "avatar-4", "avatar-5");
                        $rand_keys = array_rand($input);
                        $avater = 'default/' . $input[$rand_keys] .'.png';

                        //* Password generate
                        $n = 15;
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                        $randomString = '';
                        for ($i = 0; $i < $n; $i++) { 
                            $index = rand(0, strlen($characters) - 1); 
                            $randomString .= $characters[$index]; 
                        }
                        $new_password = password_hash($randomString, PASSWORD_DEFAULT);


                        //* Let generate user details
                        $data = array(
                            'user_status' => 1,
                            'user_firstname' => $user_fname,
                            'user_lastname' => $user_lname,
                            'user_username' => strtolower($user_name),
                            'user_email' => $user_email,
                            'user_avater' => $avater,
                            'user_password' => $new_password
                        );

                        //* Insert data to database
                        if ($uid = $this->Account_model->userCreateAccount($data))
                        {

                            //* Create a user balance for the account
                            $this->Account_model->createUserBalance($uid);
        
                            //* Get the user informations

                            $u_info = $this->Account_model->getTheUserInfo($uid);

                            //* Let send actovatopm leu tp the user
                            $site_info = $this->Settings_model->getApllicationInfo();
                            $template = array(
                                'username' => $u_info->user_username,
                                'email' => $u_info->user_email,
                                'firstname' => $u_info->user_firstname,
                                'lastname' => $u_info->user_lastname,
                                'sitename' => $site_info->set_site_name,
                                'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                                'main_url' => base_url()
                            );

                            $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 1);
                            $template['send_msg'] = $send_welcome_email;
                            $messages = $this->parser->parse('mails/welcome/send', $template, true);

                            $email_set = $this->Settings_model->getSmtpDetails();
                            if ($email_set->smtp_type == 'ssl') {
                                $config['protocol']  = 'smtp';
                                $config['smtp_host'] = $email_set->smtp_type . '://' . $email_set->smtp_host;
                                $config['smtp_port'] = $email_set->smtp_port;
                                $config['smtp_user'] = $email_set->smtp_username;
                                $config['smtp_pass'] = $email_set->smtp_password;
                                $config['mailtype']  = 'html';
                                $config['charset']   = 'utf-8';
                                $config['newline'] = '\n';
                            } else {
                                $config['protocol']  = 'smtp';
                                $config['smtp_host'] = $email_set->smtp_host;
                                $config['smtp_port'] = $email_set->smtp_port;
                                $config['smtp_user'] = $email_set->smtp_username;
                                $config['smtp_pass'] = $email_set->smtp_password;
                                $config['mailtype']  = 'html';
                                $config['charset']   = 'utf-8';
                                $config['newline'] = '\n';
                            }

                            $this->email->initialize($config);
                            $this->email->set_mailtype("html");
                            $this->email->set_newline("\r\n");
                            $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                            $this->email->to($u_info->user_email);
                            $this->email->subject('Welcome to '.$site_info->set_site_name);
                            $this->email->message($messages);
                            $this->email->send();

                            $user_login = array(
                                'uids' => $uid,
                                'user_logged' => TRUE
        
                            );

                            $this->session->set_userdata($user_login);
        
                            //* Redirecting
                            redirect('/#');
                            exit();
                        }
                    }
                }
                else
                {
                    //* Let thro the user back
                    redirect('/');
                    exit();
                }
            }
            else
            {
                //* TAke the user back to home page
                redirect('/');
                exit();
            }
        }
        else
        {
            //* Take user back to hompage
            redirect('/');
            exit();
        }
    }
}