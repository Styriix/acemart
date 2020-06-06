<?php
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

defined('BASEPATH') OR exit('This page does not exit');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        //* Check if the user is login as admin
        if(! $this->auths->adminLogged())
        {
            $this->session->unset_userdata('admin_logged');
            redirect('auth/admin');
            exit();
        }
        else
        {
            $this->auths->adminLoggedInfo();
        }
    }

    /*
    ===============================================================
    * Page Viewing sections start here
    ===============================================================
    */

    //* ADmin Dashboard page
    public function index()
    {
        if(! $this->uri->segment(2))
        {
            redirect('admin/dashboard');
            exit();
        }

        $tot_u = $this->Account_model->countAllUsers();
        $tot_item = $this->Item_model->countItems();
        $tot_s = $this->Item_model->getTotalSale();
        $earn = $this->Item_model->getEarning();

        //* Annually sales statement

        $jan = $this->Item_model->getJanSale(); // January sales
        $feb = $this->Item_model->getFebSale(); // Febuary sales
        $mar = $this->Item_model->getMarSale(); // March sales
        $apr = $this->Item_model->getAprSale(); // April sales
        $may = $this->Item_model->getMaySale(); // May sales
        $jun = $this->Item_model->getJunSale(); // June sales
        $jul = $this->Item_model->getJulSale(); // July sales
        $aug = $this->Item_model->getAugSale(); // August sales
        $sept = $this->Item_model->getSeptSale(); // September sales
        $oct = $this->Item_model->getOctSale(); // October sales
        $nov = $this->Item_model->getNovSale(); // November sales
        $dec = $this->Item_model->getDecSale(); // December sales

        $dataPoints = array( 
            array("y" => $jan, "label" => "January" ),
            array("y" => $feb, "label" => "Febuary" ),
            array("y" => $mar, "label" => "March" ),
            array("y" => $apr, "label" => "April" ),
            array("y" => $may, "label" => "May" ),
            array("y" => $jun, "label" => "June" ),
            array("y" => $jul, "label" => "July" ),
            array("y" => $aug, "label" => "August" ),
            array("y" => $sept, "label" => "September" ),
            array("y" => $oct, "label" => "October" ),
            array("y" => $nov, "label" => "November" ),
            array("y" => $dec, "label" => "December" )
        );

        $this->smarty->view('public/index.tpl', compact(
            'tot_u',
            'tot_item',
            'tot_s',
            'earn',
            'dataPoints'
        ));
    }

    //* Website settings page view
    public function settings($url = NULL)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch ($url) {
            case 'site-settings':

                $this->smarty->view('settings/site-settings.tpl');

                break;

            case 'email-settings':

                //* Get smtp infomations
                $smtp = $this->Settings_model->getSmtpDetails();

                $this->smarty->view('settings/email-settings.tpl', compact(
                    'smtp'
                ));

                break;

            case 'live-chat':

                //* Get smtp infomations

                $this->smarty->view('settings/live-chat.tpl');

                break;

            case 'affinate-program':

                $this->smarty->view('settings/affinate.tpl');

                break;

            case 'header-contents':

                $this->smarty->view('settings/head_cont.tpl');

                break;

            case 'footer-contents':

                $this->smarty->view('settings/foot_cont.tpl');

                break;
            
            case 'social-connect':
                //* List all available social links
                $sl = $this->Settings_model->getSocialLinks();

                //* Editing mode
                if($this->uri->segment(4) == 'edit')
                {
                    $edit = $this->uri->segment(5);
                    if(! $sl_edit = $this->Settings_model->getSocialLinkToEdit($edit))
                    {
                        redirect('error_404');
                        exit();
                    }
                    else
                    {
                        $sl_edit = null;
                    }
                }
                else
                {
                    $sl_edit = NULL;
                }
                $this->smarty->view('settings/social_connect.tpl', compact(
                    'sl',
                    'sl_edit'
                ));

                break;
            case 'google-recaptcha':
                $this->smarty->view('settings/google_recaptcha.tpl');
            break;

            case 'amazon-s3-storage':
                $aws = $this->Extra_model->getAmazonSettings();
                $this->smarty->view('settings/amazon_s3.tpl', compact('aws'));
            break;
            
            default:
            redirect('error_404');
            exit();
        }
    }

    //* Acoounts page view sections
    public function accounts()
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        //* Specify the actual url we gotten
        $url = $this->uri->segment(3);

        //* switch between the url base on the pages
        switch ($url) {
            case 'admin':

                //* Let load page to create new account for admin
                if($this->uri->segment(4) && $this->uri->segment(4) == 'create-new')
                {
                    $this->smarty->view('account/admin/create.tpl');
                }
                elseif($this->uri->segment(4) && $this->uri->segment(4) == 'edit-account')
                {
                    //* let detect if username is in url
                    if($this->uri->segment(5))
                    {
                        //* Detect if the username is vaid to edit
                        $uname = $this->uri->segment(5);
                        if($u_edit = $this->Account_model->checkEditedUsername($uname))
                        {
                            $this->smarty->view('account/admin/edit.tpl', compact(
                                'u_edit'
                            ));
                        }
                        else
                        {
                            redirect('error_404');
                            exit();
                        }
                    }
                    else
                    {
                        redirect('error_404');
                        exit();
                    }
                }
                else 
                {
                    //( Retrieve all admin from database
                    $admins = $this->Account_model->getAllAdmin();

                    //* Load the admin list page
                    $this->smarty->view('account/admin/list.tpl', compact(
                        'admins'
                    ));
                }

                break;

            case 'users':

                //* Let load page to create new account for admin
                if($this->uri->segment(4) && $this->uri->segment(4) == 'create-new')
                {
                    $this->smarty->view('account/users/create.tpl');
                }
                elseif($this->uri->segment(4) && $this->uri->segment(4) == 'edit-account')
                {
                    //* let detect if username is in url
                    if($this->uri->segment(5))
                    {
                        //* Detect if the username is vaid to edit
                        $uname = $this->uri->segment(5);
                        if($u_edit = $this->Account_model->checkUserEditedUsername($uname))
                        {
                            $this->smarty->view('account/users/edit.tpl', compact(
                                'u_edit'
                            ));
                        }
                        else
                        {
                            redirect('error_404');
                            exit();
                        }
                    }
                    else
                    {
                        redirect('error_404');
                        exit();
                    }
                }
                else 
                {
                    //( Retrieve all admin from database
                    $users = $this->Account_model->getAllUsers();

                    //* Load the admin list page
                    $this->smarty->view('account/users/list.tpl', compact(
                        'users'
                    ));
                }
                break;

            case 'users-balance':
                //* Retrive user balance
                $users = $this->Account_model->getAllUsersBalances();
                $this->smarty->view('account/users/balance.tpl', compact('users'));
            break;
            default:
                redirect('error_404');
        }
    }

    //* Items categories page
    public function category($url = NULL)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch ($url) {
            case 'main-category':

                //* Fetch out main category
                $main_cats = $this->Category_model->fetchMainCategory();

                //* Editng of category
                if($this->uri->segment(4) && $this->uri->segment(4) == 'edit-category')
                {
                    if($this->uri->segment(5))
                    {
                        $cat = $this->uri->segment(5);

                        if($edit_cat = $this->Category_model->getEditedCats($cat))
                        {
                            $edit = $edit_cat;
                        }
                        else
                        {
                            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> The category you trying to modify does no exsist. Please create it first</div>');
                            redirect('admin/category/main-category');
                            exit();
                        }
                    }
                }
                else
                {
                    $edit = NULL;
                }

                $this->smarty->view('category/main-category.tpl', compact(
                    'main_cats',
                    'edit'
                ));

                break;

            case 'sub-category':

                //* Fetch out main category
                $sub_cats = $this->Category_model->fetchSubCategory();

                //* Editng of category
                if($this->uri->segment(4) && $this->uri->segment(4) == 'edit-category')
                {
                    if($this->uri->segment(5))
                    {
                        $cat = $this->uri->segment(5);

                        if($edit_cat = $this->Category_model->getEditedSubCats($cat))
                        {
                            $edit = $edit_cat;
                        }
                        else
                        {
                            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> The category you trying to modify does no exsist. Please create it first</div>');
                            redirect('admin/category/sub-category');
                            exit();
                        }
                    }
                }
                else
                {
                    $edit = NULL;
                }

                $this->smarty->view('category/sub-category.tpl', compact(
                    'sub_cats',
                    'edit'
                ));

                break;

            case 'child-category':

                //* Fetch out main category
                $child_cats = $this->Category_model->fetchChildCategory();

                //* Fetch sub categories or opton list dropdown
                $list_subs = $this->Category_model->getOptionLIstSubCats();

                //* Editng of category
                if($this->uri->segment(4) && $this->uri->segment(4) == 'edit-category')
                {
                    if($this->uri->segment(5))
                    {
                        $cat = $this->uri->segment(5);

                        if($edit_cat = $this->Category_model->getEditedChildCats($cat))
                        {
                            $edit = $edit_cat;
                        }
                        else
                        {
                            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> The category you trying to modify does no exsist. Please create it first</div>');
                            redirect('admin/category/child-category');
                            exit();
                        }
                    }
                }
                else
                {
                    $edit = NULL;
                }

                $this->smarty->view('category/child-category.tpl', compact(
                    'child_cats',
                    'edit',
                    'list_subs'
                ));

                break;
            
            default:
            redirect('error_404');
            exit();
        }
    }

    //* Product sections
    public function product($url = NULL)
    {
        //* Set uniq session for files uploaded identifier
        if(! $this->session->userdata('upl_uniq'))
        {
            $uid = $this->session->userdata('uid');
            $upl_uniq = $uid . uniqid();

            $this->session->set_userdata('upl_uniq', $upl_uniq);
        }

        if($url)
        {
            switch ($url) {
                case 'add-new':
                    $list_users = $this->Account_model->listUsersInSelect();
                    $this->smarty->view('product/add-new.tpl', compact(
                        'list_users'
                    ));
                    break;
                case 'active-item':
                    $items = $this->Item_model->getActiveItemAdmin();
                    $this->smarty->view('product/active-item.tpl', compact(
                        'items'
                    ));
                    break;

                case 'pause-item':
                    $items = $this->Item_model->getPauseItemAdmin();
                    $this->smarty->view('product/pause-item.tpl', compact(
                        'items'
                    ));
                    break;

                case 'in-review':
                    $items = $this->Item_model->getReviewItemAdmin();
                    $this->smarty->view('product/in-review.tpl', compact(
                        'items'
                    ));
                    break;

                case 'edit-item':
                    if($this->uri->segment(5))
                    {
                        $id = $this->uri->segment(5);
                        if($edit = $this->Item_model->getItemToEditInAdmin($id))
                        {
                            $list_users = $this->Account_model->listUsersInSelect();
                            $this->smarty->view('product/edit-item.tpl', compact(
                                'edit',
                                'list_users'
                            ));
                        }
                        else
                        {
                            redirect('error_404');
                        }
                    }
                    else
                    {
                        redirect('error_404');
                    }
                    break;

                case 'review-item':
                    if($this->uri->segment(5))
                    {
                        $id = $this->uri->segment(5);
                        if($edit = $this->Item_model->getItemToEditInAdmin($id))
                        {
                            $list_users = $this->Account_model->listUsersInSelect();
                            $this->smarty->view('product/review-item.tpl', compact(
                                'edit',
                                'list_users'
                            ));
                        }
                        else
                        {
                            redirect('error_404');
                        }
                    }
                    else
                    {
                        redirect('error_404');
                    }
                    break;
                default:
            }
        }
    }

    //* Emails templates page
    public function email_templates($url = NULL)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch ($url) {
            case 'activate-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(2);
                $this->smarty->view('email/activate-email.tpl', compact(
                    'email'
                ));
                break;

            case 'welcome-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(1);
                $this->smarty->view('email/welcome-email.tpl', compact(
                    'email'
                ));
                break;

            case 'user-transaction-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(3);
                $this->smarty->view('email/user-trans.tpl', compact(
                    'email'
                ));
                break;

            case 'item-rating-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(4);
                $this->smarty->view('email/item-rate.tpl', compact(
                    'email'
                ));
                break;

            case 'item-like-email':

                //* Get item like email
                $email = $this->Email_model->getEmailTemps(9);
                $this->smarty->view('email/item-like.tpl', compact(
                    'email'
                ));
                break;

            case 'item-comment-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(5);
                $this->smarty->view('email/item-comment.tpl', compact(
                    'email'
                ));
                break;

            case 'item-approve-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(6);
                $this->smarty->view('email/item-approve.tpl', compact(
                    'email'
                ));
                break;

            case 'item-reject-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(7);
                $this->smarty->view('email/item-reject.tpl', compact(
                    'email'
                ));
                break;

            case 'withdraw-approve-email':

                //* Get activate email
                $email = $this->Email_model->getEmailTemps(8);
                $this->smarty->view('email/withdraw-approve.tpl', compact(
                    'email'
                ));
                break;
            
            default:
                redirect('error_404');
                exit();
                break;
        }
    }

    //* Transaction
    public function transaction($type = NULL)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch($url)
        {
            case 'paypal':
                $p_trans = $this->Payment_model->getPaypalTransactions();
                $this->smarty->view('transactions/paypal.tpl', compact(
                    'p_trans'
                ));
                break;

            case 'stripe':
                $s_trans = $this->Payment_model->getStripeTransactions();
                $this->smarty->view('transactions/stripe.tpl', compact(
                    's_trans'
                ));
                break;

            case 'bitcoin':
                $btc_trans = $this->Payment_model->getBitcoinTransactions();
                $this->smarty->view('transactions/bitcoin.tpl', compact(
                    'btc_trans'
                ));
                break;

            default:
                redirect('error_404');
                break;
        }
    }

    //* Payments Gateways
    public function payment_gateway($type = NULL)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch($url)
        {
            case 'paypal':
                $paypal = $this->Payment_model->getPaypalGateway();
                $this->smarty->view('gateways/paypal.tpl', compact(
                    'paypal'
                ));
                break;

            case 'stripe':
                $stripe = $this->Payment_model->getStripeGateway();
                $this->smarty->view('gateways/stripe.tpl', compact(
                    'stripe'
                ));
                break;

            case 'bitcoin':
                $btc = $this->Payment_model->getBitcoinGateway();
                $this->smarty->view('gateways/bitcoin.tpl', compact(
                    'btc'
                ));
                break;

            default:
                redirect('error_404');
                break;
        }
    }

    //* Earning withdrawal request
    public function withdrawal()
    {
        //* Get all withdrawals
        $mws = $this->Payment_model->getAllPendingWithdrawals();
        $this->smarty->view('withdraw/index.tpl', compact(
            'mws'
        ));
    }

    //* Pages sections
    public function pages($url)
    {
        if(! $this->uri->segment(3))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch($url)
        {
            case 'create-page':
                $this->smarty->view('pages/create.tpl');
                break;

            case 'edit':
                $edit = $this->uri->segment(4);
                if($ed = $this->Extra_model->toBeEdited($edit))
                {
                    $this->smarty->view('pages/edit.tpl', compact(
                        'ed'
                    ));
                }
                else
                {
                    redirect('error_404');
                }
                break;

                default:
                redirect('error_404');
        }
    }

    //* Themes pages
    public function themes()
    {
        $theme = $this->Theme_model->getActiveTheme();
        $this->smarty->view('public/themes.tpl', compact(
            'theme'
        ));
    }

    //* Email for all users
    public function email_all_members()
    {
        if(isset($_POST['submit']))
        {
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

            //* Fetch all user we got
            $users = $this->Account_model->fetchAllUsers();
            $num = 0;

            foreach($users as $user):

                $num++;
                $this->email->clear();
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");
                $this->email->from($email_set->smtp_default_email, $email_set->smtp_display_name);
                $this->email->to($user->user_email);
                $this->email->subject($this->input->post('subject'));
                $this->email->message($this->input->post('email_body'));
                $this->email->send();

            endforeach;

            //* Set session message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><b>'.$num.'</b> messages has been sent successfully!</div>');
            redirect('admin/email_all_members');
            exit();
        }
        $this->smarty->view('public/email_mems.tpl');
    }

    //* Blog section
    public function blog($url = NULL)
    {
        if(! $url)
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(3);

        switch ($url) {
            case 'categories':

                //* Get categories
                $cats = $this->Blog_model->listAllCategories();

                //* Editing of category
                if($this->uri->segment(4) && $this->uri->segment(5))
                {
                    $edit_cat = $this->uri->segment(5);
                    if(! $edit = $this->Blog_model->editBlogCategory($edit_cat))
                    {
                        redirect('error_404');
                    }
                }
                $edit = NULL;
                
                $this->smarty->view('blog/categories.tpl', compact(
                    'cats',
                    'edit'
                ));
                break;

            case 'blog-post':

                //* Get blog post in admin
                $blogs = $this->Blog_model->getAllBlogs();

                $this->smarty->view('blog/posts.tpl', compact(
                    'blogs'
                ));
                break;

            case 'create-new-blog':
                if($this->session->flashdata('old_blog_title'))
                {
                    $old_title = $this->session->flashdata('old_blog_title');
                }
                else
                {
                    $old_title = NULL;
                }

                if($this->session->flashdata('old_contents'))
                {
                    $old_contents = $this->session->flashdata('old_contents');
                }
                else
                {
                    $old_contents = NULL;
                }

                $cats = $this->Blog_model->listAllCategories();
                $this->smarty->view('blog/create.tpl', compact(
                    'cats',
                    'old_title',
                    'old_contents'
                ));
                break;

            case 'edit-blog':
                if(! $this->uri->segment(4))
                {
                    redirect('error_404');
                    exit();
                }

                //* let grab the blog to edit by slug
                $bid = $this->uri->segment(4);

                if($e_blog = $this->Blog_model->getBlogToEdit($bid))
                {
                    $cats = $this->Blog_model->listAllCategories();
                    $this->smarty->view('blog/edit.tpl', compact(
                        'e_blog',
                        'cats'
                    ));
                }
                else
                {
                    redirect('error_404');
                    exit();
                }
                break;
            case 'comment-setup':
                $cmt = $this->Blog_model->getCommentSettings();
                $this->smarty->view('blog/comment.tpl', compact(
                    'cmt'
                ));
                break;
            
            default:
                # code...
                break;
        }
    }

    //* Charts Data
    public function chart_data()
    {
        $tops = $this->Item_model->getTopItemsAuthor();
        
        if($tops) {
            $data = array();
            foreach($tops as $top)
            {
                $data[] = $top;
            }
        }

        echo json_encode($data);
    }

    //* Top item seller
    public function top_item_sale()
    {
        $tops = $this->Item_model->getTopItemSale();
        if($tops) {
            $data = array();
            foreach($tops as $top)
            {
                $data[] = $top;
            }
        }

        echo json_encode($data);
    }

    //* Social Logins
    public function social_login($url = NULL)
    {
        if(! $url)
        {
            redirect('error_404');
        }

        switch($url)
        {
            case 'facebook':
                //* Get current facebook app credential
                $fb_key = $this->Extra_model->getFacebookAppKeys();
                $this->smarty->view('social-login/facebook.tpl', compact('fb_key'));
            break;

            case 'google':
                //* Get current google app credential
                $gg_key = $this->Extra_model->getGoogleAppKeys();
                $this->smarty->view('social-login/google.tpl', compact('gg_key'));
            break;

            default:
            redirect('error_404');
        }
    }

    /*
    ===============================================================
    * Page Viewing sections ends here
    ===============================================================
    */

    /*
    ===============================================================
    * Creating of datas sections start here
    ===============================================================
    */

    //* Creating of new admin account
    public function create_new_admin()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Validate the forms input requests

        //* First name
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s must not be more than 50 characters'
        ));

        //* Last name
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s must not be more than 50 characters'
        ));

        //* User name
        $this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags|is_unique[zd_admin.admin_username]', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s must not be more than 50 characters',
            'is_unique' => 'This %s is already taken please try another',
        ));

        //* Email
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags|is_unique[zd_admin.admin_username]|valid_email', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s must not be more than 50 characters',
            'is_unique' => 'This %s is already taken please try another',
        ));

        //* Password
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 8 characters',
        ));

        //* Confirm Password
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]|xss_clean|strip_tags', array(
            'required' => 'The %s can not be blank',
            'min_length' => 'The %s must be at least 8 characters',
            'matches' => 'The Provided passwords does not match!',
        ));

        //* Check if the validation are okay or not
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and displate the error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            $this->session->set_flashdata($errors);

            redirect('admin/accounts/admin/create-new');
        } else {
            
            //* Validation are clear we move on

            //* Let check if profile picture is selected
            if(! empty($_FILES['profile_pic']['name']))
            {
                //* let validate and process the upload datas
                
                $config['upload_path'] = './static/profile/admin/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']  = '1000';
                $config['encrypt_name'] = TRUE;
                
                $this->upload->initialize($config);
                
                if ( ! $this->upload->do_upload('profile_pic')){
                    $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));
                    $this->session->set_flashdata($errors);
                    redirect('admin/accounts/admin');
                }
                else{
                    $file = $this->upload->data();

                    $profile_pic = $file['file_name'];
                }
                
            }
            else
            {
                $profile_pic = NULL;
            }

            //* let encrypt the password
            $old_pass = $this->input->post('password');
            $password = password_hash($old_pass, PASSWORD_DEFAULT);

            //* Store all form data requests
            $data = array(
                'admin_firstname' => ucfirst(strtolower($this->input->post('first_name'))),
                'admin_lastname' => ucfirst(strtolower($this->input->post('last_name'))),
                'admin_username' => strtolower($this->input->post('username')),
                'admin_email' => $this->input->post('email'),
                'admin_profile_pic' => $profile_pic,
                'admin_password' => $password
            );

            //* Call the database for insertion action
            if($this->Account_model->createNewAdmin($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New Account has been created <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/accounts/admin/create-new');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/accounts/admin/create-new');
            }
        }
        
        
    }

    //* Create new main category
    public function create_main_category()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_main_category.main_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s already exist'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/main-category');
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'main_cat_name' => ucfirst(strtolower($this->input->post('cat_name'))),
                'main_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE)
            );

            //* Call the database for action
            if($this->Category_model->createNewMainCategory($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New Category has been created <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/main-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/main-category');
            }
        }
        
        
    }

    //* Create new sub category
    public function create_sub_category()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_sub_category.sub_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s already exist'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/sub-category');
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'sub_cat_name' => ucfirst($this->input->post('cat_name')),
                'sub_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE),
                'sub_main_cat_id' => $this->input->post('main_cat')
            );

            //* Call the database for action
            if($this->Category_model->createNewSubCategory($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New Category has been created <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/sub-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/sub-category');
            }
        }
        
        
    }

    //* Create new child category
    public function create_child_category()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_child_category.child_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s already exist'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/child-category');
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'child_cat_name' => ucfirst($this->input->post('cat_name')),
                'child_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE),
                'child_sub_cat_id' => $this->input->post('main_cat')
            );

            //* Call the database for action
            if($this->Category_model->createNewChildCategory($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New Category has been created <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/child-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/child-category');
            }
        }
    }

    //* Admin create new items
    public function create_new_item()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let us validate form request

        //* item name
        $this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[5]|max_length[100]|strip_tags|xss_clean|alpha_numeric_spaces', array(
            'required' => 'The %s is required',
            'min_length' => 'The %s must be greater than 5 characters',
            'max_length' => 'The %s must not be more than 100 characters',
            'alpha_numeric_spaces' => 'The %s can not contain special characters'
        ));
        
        //* Item descriptions
        $this->form_validation->set_rules('item_description', 'Item Descriptions', 'trim|required|xss_clean', array(
            'required' => 'Please Provide your %s'
        ));
        
        //* Item version
        $this->form_validation->set_rules('item_version', 'Item Version', 'trim|xss_clean|strip_tags');
        
        //* Live demo url
        $this->form_validation->set_rules('item_demo', 'Live demo url', 'trim|xss_clean|strip_tags');
        
        //* Regular liecence
        $this->form_validation->set_rules('item_r_liecence', 'Item Regular Liecence', 'trim|required|xss_clean|strip_tags|numeric', array(
            'required' => 'Give your %s Price',
            'numeric' => '%s can only be in figure'
        ));

        //* Extended Liecence
        $this->form_validation->set_rules('item_e_liecence', 'Item Extended Liecence', 'trim|required|xss_clean|strip_tags|numeric', array(
            'required' => 'Give your %s Price',
            'numeric' => '%s can only be in figure'
        ));

        //* Item tags
        $this->form_validation->set_rules('item_tags', 'Item Tags', 'trim|required|xss_clean|strip_tags');

        //* Run form validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store the session
            $this->session->set_flashdata($errors);

            //* Redirect the user
            redirect('admin/product/add-new');
        } else {
            
            //* Form validations are safe
            if($this->Extra_model->isAmazonStorage())
            {
                $storage = 1;
            }
            else
            {
                $storage = 0;
            }

            //* Store items information in a data
            $data = array(
                'item_cat_id' => $this->input->post('item_cat'),
                'item_user_id' => $this->input->post('item_author'),
                'item_status' => 1,
                'item_name' => $this->input->post('item_name'),
                'item_description' => $this->input->post('item_description'),
                'item_version' => $this->input->post('item_version'),
                'item_live_demo' => $this->input->post('item_demo'),
                'item_regu_price' => $this->input->post('item_r_liecence'),
                'item_exte_price' => $this->input->post('item_e_liecence'),
                'item_tags' => $this->input->post('item_tags'),
                'item_slug' => url_title($this->input->post('item_name'), 'dash', TRUE),
                'item_storage' => $storage,
            );

            //* Call the database for the creating action
            if($this->Item_model->adminCreateNewItem($data))
            {
                $slug =url_title($this->input->post('item_name'), 'dash', TRUE);

                //* Let get the last created item id by slug
                $item_id = $this->Item_model->getLastCreatedItemBySlug($slug);

                //* Create the thumbnail icon
                $thumbs = $this->input->post('item_thumbnail');
                $this->Item_model->createItemThumbs($thumbs, $item_id);

                //* Crete the preview image
                $pre_img = $this->input->post('item_preview');
                $this->Item_model->createItemPreviewImage($pre_img, $item_id);

                //* Create item main file
                $item_file = $this->input->post('item_main_file');
                $this->Item_model->createItemMainFile($item_file, $item_id);

                //* Unset the current unique session
                $this->session->unset_userdata('upl_uniq');

                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New item has been <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/product/add-new');
            }
            else
            {
                 //* Show error message
                 $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                 //* Redirect the user
                 redirect('admin/product/add-new');
            }
        }
        
        
        
    }

    //* Creating new user
    public function create_new_user()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validate the form request

        //* firstname
        $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
            'required' => 'Please provide the user %s',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s can not be more than 20 Characters'
        ));

        //* Lastname
        $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
            'required' => 'Please provide the user %s',
            'min_length' => 'The %s must be at least 3 characters',
            'max_length' => 'The %s can not be more than 20 Characters'
        ));

        //* Username
        $this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[4]|max_length[50]|xss_clean|strip_tags|is_unique[zd_users.user_username]', array(
            'required' => 'Please provide the user %s',
            'min_length' => 'The %s must be at least 4 characters',
            'max_length' => 'The %s can not be more than 50 Characters',
            'is_unique' => 'The username you provide is already taken'
        ));

        //* Email address
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean|strip_tags|is_unique[zd_users.user_email]', array(
            'required' => 'The %s is required please fill it',
            'is_unique' => 'The provided %s is already taken'
        ));

        //* Password
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
            'required'=> 'Please provide the user %s',
            'min_length' => 'The %s must be at aleast 8 characters'
        ));

        //* Confirm password
        $this->form_validation->set_rules('con_pass', 'Confirm Password', 'trim|required|xss_clean|strip_tags|matches[password]', array(
            'required' => 'Confirm the user password',
            'matches' => 'User passwords does not match'
        ));
        
        //* Check if form validation request is true or false
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Prepare the error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store the error message
            $this->session->set_flashdata($errors);

            //* Redirect the user
            redirect('admin/accounts/users/create-new');
            exit();
        } else {
            
            //* check if profile pic is choosen
            if(! empty($_FILES['avater']['name']))
            {
                //* Let process the form with profile avater
                
                $config['upload_path'] = './static/profile/users/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['encrypt_name'] = TRUE;
                
                $this->upload->initialize($config);
                
                if ( ! $this->upload->do_upload('avater')){
                    $errors = array('error' => $this->upload->display_errors('<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));

                    //* Store the error message
                    $this->session->set_flashdata($errors);

                    //* Redirect the user
                    redirect('admin/accounts/users/create-new');
                }
                else{
                    //* Avater uploading is complete let store the data
                    $file = $this->upload->data();

                    $avater = $file['file_name'];
                }
                
            }
            else
            {
                $input = array("avatar-1", "avatar-2", "avatar-3", "avatar-4", "avatar-5");
                $rand_keys = array_rand($input);
                $avater = 'default/' . $input[$rand_keys] .'.png';
            }

            //* Encrypt password
            $old_pass = $this->input->post('password');
            $password = password_hash($old_pass, PASSWORD_DEFAULT);

            //* Store all form request data in array
            $data = array(
                'user_status' => $this->input->post('status'),
                'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                'user_username' => strtolower($this->input->post('username')),
                'user_email' => $this->input->post('email'),
                'user_avater'=> $avater,
                'user_country' => $this->input->post('country'),
                'user_region' => $this->input->post('region'),
                'user_password' => $password,
            );

            //* Call the database for updating action
            if($lastId = $this->Account_model->adminCreateNewUser($data))
            {
                //* Create a user balance for the account
                $this->Account_model->createUserBalance($lastId);

                //* Show success message   
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button>New Account has been created successfully</div>');

                redirect('admin/accounts/users');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button> Somethingwent wrong please try again.</div>');

                redirect('admin/accounts/users/create-new');
                exit();
            }
        }
        
    }

    //* Creating of new pages
    public function create_new_page()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        $this->form_validation->set_rules('page_name', 'Page Name', 'trim|required|max_length[20]|xss_clean|strip_tags|is_unique[zd_pages.page_name]');
        $this->form_validation->set_rules('page_contents', 'Page Contents', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            redirect('admin/pages/create-page');
        } else {
            
            $data = array(
                'page_name' => $this->input->post('page_name'),
                'page_contents' => $this->input->post('page_contents'),
                'page_slug' => url_title($this->input->post('page_name'), 'dash', TRUE)
            );

            if($this->Extra_model->createNewPage($data))
            {
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Page Created Successfully!</div>');
                redirect('admin/pages/create-page');
            }
        }
        
    }

    //* Creating new social links
    public function create_new_social_link()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validation the form request
        //* Social name
        $this->form_validation->set_rules('sl_name', 'Social Link Name', 'trim|required|xss_clean|strip_tags|is_unique[zd_social_links.sl_name]', array(
            'required' => 'Please provide th <b>%s</b>',
            'is_unique' => "This <b>%s</b> already exist"
        ));
        
        //* social icon
        $this->form_validation->set_rules('sl_icon', 'Social Link Icon', 'trim|required|xss_clean|strip_tags', array(
            'required' => "You must providet the <b>%S</b>"
        ));

        //* Social link
        $this->form_validation->set_rules('sl_link', 'Social Link Url', 'trim|required|xss_clean|strip_tags|valid_url', array(
            'required' => 'Please provide the <b>%s</b>',
            'valid_url' => 'Valid url is Reccommended'
        ));
        
        //* Let confirm form request is safe or not
        
        if ($this->form_validation->run() == FALSE) {
            //* Store error messages and redirect
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/settings/social-connect');
            exit();
        } else {
            
            //* Forms look safe let stroe to array
            $data = array(
                'sl_icon' => $this->input->post('sl_icon'),
                'sl_name' => $this->input->post('sl_name'),
                'sl_link' => $this->input->post('sl_link')
            );

            //* prepare all data to the database
            if($this->Settings_model->createNewSocialLinks($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">New Social Link has been created Successfully</div>');
                redirect('admin/settings/social-connect');
                exit();
            }
            else
            {
                //* show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
                redirect('admin/settings/social-connect');
                exit();
            }
        }
        
        
    }

    //* Create new blog category
    public function create_blog_category()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validate the form request
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_blog_category.bc_name]', array(
            'required' => 'Please provide th <b>%s</b>',
            'min_length' => 'Sorry but <b>%s</b> must be at least 3 Characters',
            'max_length' => 'Sorry but <b>%s</b> must not be greater than 20 characters',
            'is_unique' => 'Sorry this <b>%s</b> already exist'
        ));
        
        //* let check for validation errors
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            redirect('admin/blog/categories');
        } else {
            
            //* Form validations are safe let send to database
            $data = array(
                'bc_name' => ucfirst(strtolower($this->input->post('cat_name'))),
                'bc_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE)
            );

            //* Let call the database for action
            if($this->Blog_model->createNewBlogCategory($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">New category has been created sucessfully!</div>');
                redirect('admin/blog/categories');
            }
            else
            {
                //* show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try agin</div>');
                redirect('admin/blog/categories');
            }
        }
        
    }

    //* Create new blog post
    public function create_blog_post()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Store old values
        $this->session->set_flashdata('old_blog_title', $this->input->post('blog_title'));
        $this->session->set_flashdata('old_contents', $this->input->post('blog_contents'));

        //* :et va;odate tje fpr, reqiest

        //* Blog Title
        $this->form_validation->set_rules('blog_title', 'Blog Title', 'trim|required|min_length[3]|max_length[100]|xss_clean|strip_tags|is_unique[zd_blogs.blog_title]', array(
            'required' => 'Please provide the <b>%s</b>',
            'min_length' => 'The <b>%s</b> must be atleast 3 characters',
            'max_length' => 'The <b>%s</b> must not exceed 100 characters',
            'is_unique' => 'Sorry but the <b>%s</b> is already exist'
        ));

        //* Blog Contents
        $this->form_validation->set_rules('blog_contents', 'Blog Contents', 'trim|required|xss_clean', array(
            'required' => 'Please write your <b>%s</b>'
        ));

        //* Let check for form vaidlation erros
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages in array
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            //* Disaplay errors
            $this->session->set_flashdata($errors);
            redirect('admin/blog/create-new-blog');
        } else {
            
            //* Form request saft let validation fille upload if exist
            if(! empty($_FILES['blog_preview']['name']))
            {
                
                $config['upload_path'] = './static/blog/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name'] = strtolower($this->input->post('blog_title').time());
                
                $this->upload->initialize($config);
                
                if ( ! $this->upload->do_upload('blog_preview')){
                    $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center">','</div>'));
                    $this->session->set_flashdata($errors);
                    redirect('admin/blog/create-new-blog');
                }
                else{
                   
                    $upl = $this->upload->data();
                    $blog_preview = $upl['file_name'];
                }
                
            }
            else
            {
                $blog_preview = NULL;
            }

            //* Let prepare our form request in an array
            $data = array(
                'blog_author_id' => $this->session->userdata('uid'),
                'blog_cat_id' => $this->input->post('blog_cat'),
                'blog_status_id' => $this->input->post('blog_status'),
                'blog_title' => $this->input->post('blog_title'),
                'blog_preview' => $blog_preview,
                'blog_contents' => $this->input->post('blog_contents'),
                'blog_slug' => url_title($this->input->post('blog_title'), 'dash', TRUE)
            );

            //* Let call the database for creating action
            if($this->Blog_model->createNewBlogPost($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">New blog post has been created successfully</div>');
                redirect('admin/blog/blog-post');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
                redirect('admin/blog/admin/blog/create-new-blog');
            }
        }
        
    }

    /*
    ===============================================================
    * Creating of datas sections end here
    ===============================================================
    */

    /*
    ===============================================================
    * Reading of datas sections start here
    ===============================================================
    */

    /*
    ===============================================================
    * Reading of datas sections end here
    ===============================================================
    */

    /*
    ===============================================================
    * Updating of datas sections start here
    ===============================================================
    */

    //* Let update website basic settings
    public function update_website_basic_settings()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let this section validate the form requests
        $this->form_validation->set_rules('site_name', 'Website Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
            'required' => 'Please provide the %s',
            'min_length' => '%s must be atleast 3 characters',
            'max_length' => '%s must not exceed 50 characters'
        ));
        
        $this->form_validation->set_rules('site_title', 'Website Title', 'trim|required|min_length[3]|max_length[100]|xss_clean|strip_tags', array(
            'required' => 'Please provide the %s',
            'min_length' => '%s must be atleast 3 characters',
            'max_length' => '%s must not exceed 100 characters'
        ));

        $this->form_validation->set_rules('site_short_description', 'Website Short Description', 'trim|required|min_length[3]|max_length[250]|xss_clean|strip_tags', array(
            'required' => 'Please provide the %s',
            'min_length' => '%s must be atleast 3 characters',
            'max_length' => '%s must not exceed 250 characters'
        ));

        $this->form_validation->set_rules('site_description', 'Website Description', 'trim|xss_clean|strip_tags');
        
        //* let verity if validation is true or false
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Let show error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store the error messages
            $this->session->set_flashdata($errors);

            //* Redirect he user back to page
            redirect('admin/settings/site-settings');
        } else {
            
            //* Form validations are true let process our datas
            $data = array(
                'set_site_name' => $this->input->post('site_name'),
                'set_site_title' => $this->input->post('site_title'),
                'set_site_short_description' => $this->input->post('site_short_description'),
                'set_site_description' => $this->input->post('site_description')
            );

            //* Call the database form updating action
            if($this->Settings_model->updateWebsiteBasicSettings($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Website Basic Settings has been Saved <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/settings/site-settings');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
            }
        }
        
    }

    //* Let update website meta tags
    public function update_website_meta_tags()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let us validate the form requests
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('meta_keywords', 'Meta Keywords', 'trim|xss_clean|strip_tags');
        
        //* Next check if the form is true or false
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store error message to session
            $this->session->set_flashdata($errors);

            //* Redirect the user
            redirect('admin/settings/site-settings');
            exit();
        } else {
            
            //* Form are okay let prepare our data here
            $data = array(
                'set_meta_description' => $this->input->post('meta_description'),
                'set_meta_keywords' => $this->input->post('meta_keywords'),
                'set_theme_color' => $this->input->post('theme_color')
            );

            //* Call the database for updating action
            if($this->Settings_model->updateWebsiteBasicSettings($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Website Basic Settings has been Saved <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/settings/site-settings');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
            }
        }
        
    }

    //* Updatte website prefrences settings
    public function update_website_prefrences()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let determine if the logo should be changed
        if(! empty($_FILES['site_logo']['name']))
        {
            //* Let validate the uploaded file
            
            $config['upload_path'] = './static/website/site-logo/';
            $config['allowed_types'] = 'png';
            $config['max_size']  = '1000';
            $config['max_width']  = '137';
            $config['max_height']  = '38';
            $config['file_name'] = 'logo.png';
            $config['overwrite'] = TRUE;
            
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('site_logo')){
                $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button><b>Site Logo:</b>','</div>'));

                $this->session->set_flashdata($errors);
                redirect('admin/settings/site-settings');
            }
            
        }

        //* Let determine if the logo should be changed
        if(! empty($_FILES['site_favicon']['name']))
        {
            //* Let validate the uploaded file
            
            $config['upload_path'] = './static/website/site-logo/';
            $config['allowed_types'] = 'png';
            $config['max_size']  = '1000';
            $config['max_width']  = '36';
            $config['max_height']  = '36';
            $config['file_name'] = 'favicon.png';
            $config['overwrite'] = TRUE;
            
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('site_favicon')){
                $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button><b>Site Favicon:</b>','</div>'));

                $this->session->set_flashdata($errors);
                redirect('admin/settings/site-settings');
            }
            
        }

        //* Validate the orhter form request
        $site_currency = $this->input->post('site_currency');
        $site_status = $this->input->post('site_status');

        if($site_currency == 'USD')
        {
            $site_currency_symbol = '$';
        }
        elseif($site_currency == 'EUR')
        {
            $site_currency_symbol = '€';
        }
        elseif($site_currency == 'UKP')
        {
            $site_currency_symbol = '£';
        }
        elseif($site_currency == 'JPY')
        {
            $site_currency_symbol = '¥';
        }
        elseif($site_currency == 'NGN')
        {
            $site_currency_symbol = '₦';
        }

        //* Store form request in data values
        $data = array(
            'set_site_currency_code' => $site_currency,
            'set_site_currency' => $site_currency_symbol,
            'set_site_status' => $this->input->post('site_status')
        );

        //* Call the database for updating action
        if($this->Settings_model->updateWebsiteBasicSettings($data))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Website Basic Settings has been Saved <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/settings/site-settings');
        }
        else
        {
            //* Show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
            //* Redirect the user
        }
    }

    //* Let update website more settings
    public function update_website_more()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let us validate the form requests
        $this->form_validation->set_rules('item_charge', 'Item Charges', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('min_withdraw', 'Minimum Withdrawal', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('site_email', 'Site Email', 'trim|required|xss_clean|strip_tags|valid_email');
        
        
        //* Next check if the form is true or false
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store error message to session
            $this->session->set_flashdata($errors);

            //* Redirect the user
            redirect('admin/settings/site-settings');
            exit();
        } else {
            
            //* Form are okay let prepare our data here
            $data = array(
                'set_item_charge' => $this->input->post('item_charge'),
                'set_min_withdraw' => $this->input->post('min_withdraw'),
                'set_pay_day' => $this->input->post('pay_day'),
                'set_email' => $this->input->post('site_email')
            );

            //* Call the database for updating action
            if($this->Settings_model->updateWebsiteBasicSettings($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Website Basic Settings has been Saved <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/settings/site-settings');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
            }
        }
        
    }

    //* Updating of admin account
    public function update_account($id, $uname)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Update the form if passowrd is provide
        if(! empty($_POST['password']))
        {
            //* Validate the forms input requests

            //* First name
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s must not be more than 50 characters'
            ));

            //* Last name
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s must not be more than 50 characters'
            ));

            //* Password
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 8 characters',
            ));

            //* Confirm Password
            $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 8 characters',
                'matches' => 'The Provided passwords does not match!',
            ));

             //* Check if the validation are okay or not
        
            if ($this->form_validation->run() == FALSE) {
                
                //* Store and displate the error messages
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
                );

                $this->session->set_flashdata($errors);

                redirect('admin/accounts/admin/edit-account/'.$uname);
            } else {

                //* Check if profile picture is to be changed
                if (! empty($_FILES['profile_pic']['name'])) {
                    //* let validate and process the upload datas
                    
                    $config['upload_path'] = './static/profile/admin/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']  = '1000';
                    $config['encrypt_name'] = true;
                    
                    $this->upload->initialize($config);
                    
                    if (! $this->upload->do_upload('profile_pic')) {
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>', '</div>'));
                        $this->session->set_flashdata($errors);
                        redirect('admin/accounts/admin/edit-account/'.$uname);
                    } else {
                        $file = $this->upload->data();

                        $profile_pic = $file['file_name'];
                    }
                } else {
                    //* We going to fetch and use the current one
                    $profile_pic = $this->Account_model->getUserProfilePic($id);
                }

                //* let encrypt the password
                $old_pass = $this->input->post('password');
                $password = password_hash($old_pass, PASSWORD_DEFAULT);

                //* Store all form data requests
                $data = array(
                    'admin_firstname' => ucfirst(strtolower($this->input->post('first_name'))),
                    'admin_lastname' => ucfirst(strtolower($this->input->post('last_name'))),
                    'admin_profile_pic' => $profile_pic,
                    'admin_password' => $password
                );
            }
        }
        else
        {
            //* Validate the forms input requests

            //* First name
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s must not be more than 50 characters'
            ));

            //* Last name
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[50]|xss_clean|strip_tags', array(
                'required' => 'The %s can not be blank',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s must not be more than 50 characters'
            ));

             //* Check if the validation are okay or not
        
            if ($this->form_validation->run() == FALSE) {
                
                //* Store and displate the error messages
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
                );

                $this->session->set_flashdata($errors);

                redirect('admin/accounts/admin/edit-account/'.$uname);
            } else {

                //* Check if profile picture is to be changed
                if (! empty($_FILES['profile_pic']['name'])) {
                    //* let validate and process the upload datas
                    
                    $config['upload_path'] = './static/profile/admin/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']  = '1000';
                    $config['encrypt_name'] = true;
                    
                    $this->upload->initialize($config);
                    
                    if (! $this->upload->do_upload('profile_pic')) {
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>', '</div>'));
                        $this->session->set_flashdata($errors);
                        redirect('admin/accounts/admin/edit-account/'.$uname);
                    } else {
                        $file = $this->upload->data();

                        $profile_pic = $file['file_name'];
                    }
                } else {
                    //* We going to fetch and use the current one
                    $profile_pic = $this->Account_model->getUserProfilePic($id);
                }

                //* Store all form data requests
                $data = array(
                    'admin_firstname' => ucfirst(strtolower($this->input->post('first_name'))),
                    'admin_lastname' => ucfirst(strtolower($this->input->post('last_name'))),
                    'admin_profile_pic' => $profile_pic
                );
            }
        }

        //* Let call the database for updating action
        if($this->Account_model->updateAdminAccount($id, $uname, $data))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> '.$uname.' Account has been updated <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/accounts/admin');
        }
        else
        {
            //* Show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
            //* Redirect the user
            redirect('admin/accounts/admin/edit-account/'.$uname);
        }
    
    }

    //* Update main category
    public function update_main_category($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_main_category.main_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s is already created as Main Category'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/main-category/edit-category/'.$slug);
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'main_cat_name' => ucfirst(strtolower($this->input->post('cat_name'))),
                'main_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE)
            );

            //* Call the database for action
            if($this->Category_model->updateMainCategory($data, $id))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Category has been updated <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/main-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/main-category/edit-category/'.$slug);
            }
        }
    }

    //* Update sub categories
    public function update_sub_category($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_sub_category.sub_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s is already created as Sub Category'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/sub-category/edit-category/'.$slug);
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'sub_cat_name' => ucfirst($this->input->post('cat_name')),
                'sub_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE),
                'sub_main_cat_id' => $this->input->post('main_cat')
            );

            //* Call the database for action
            if($this->Category_model->updateSubCategory($data, $id))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Category has been updated <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/sub-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/sub-category/edit-category/'.$slug);
            }
        }
    }

    //* Update child category
    public function update_child_category($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate the form request

        //* Category name
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_child_category.child_cat_name]', array(
            'required' => 'Please fill in the %s',
            'min_length' => 'The %s must be at least 3 Characters',
            'max_length' => 'The %s Must not exceed 20 Characters',
            'is_unique' => 'The %s is already created as Sub Category'
        ));

        //* Run validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and display error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/category/child-category/edit-category/'.$slug);
        } else {
            
            //* Validation are okay let create the data
            $data = array(
                'child_cat_name' => ucfirst($this->input->post('cat_name')),
                'child_cat_slug' => url_title($this->input->post('cat_name'), 'dash', TRUE),
                'child_sub_cat_id' => $this->input->post('main_cat')
            );

            //* Call the database for action
            if($this->Category_model->updateChildCategory($data, $id))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Category has been updated <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/category/child-category');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('admin/category/child-category/edit-category/'.$slug);
            }
        }
    }

    //* Admin update item infomations
    public function update_item($slug, $id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
        }

         //* Let us validate form request

        //* item name
        $this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[5]|max_length[100]|strip_tags|xss_clean|alpha_numeric_spaces', array(
            'required' => 'The %s is required',
            'min_length' => 'The %s must be greater than 5 characters',
            'max_length' => 'The %s must not be more than 100 characters',
            'alpha_numeric_spaces' => 'The %s can not contain special characters'
        ));
        
        //* Item descriptions
        $this->form_validation->set_rules('item_description', 'Item Descriptions', 'trim|required|xss_clean', array(
            'required' => 'Please Provide your %s'
        ));
        
        //* Item version
        $this->form_validation->set_rules('item_version', 'Item Version', 'trim|xss_clean|strip_tags');
        
        //* Live demo url
        $this->form_validation->set_rules('item_demo', 'Live demo url', 'trim|xss_clean|strip_tags');
        
        //* Regular liecence
        $this->form_validation->set_rules('item_r_liecence', 'Item Regular Liecence', 'trim|required|xss_clean|strip_tags|numeric', array(
            'required' => 'Give your %s Price',
            'numeric' => '%s can only be in figure'
        ));

        //* Extended Liecence
        $this->form_validation->set_rules('item_e_liecence', 'Item Extended Liecence', 'trim|required|xss_clean|strip_tags|numeric', array(
            'required' => 'Give your %s Price',
            'numeric' => '%s can only be in figure'
        ));

        //* Item tags
        $this->form_validation->set_rules('item_tags', 'Item Tags', 'trim|required|xss_clean|strip_tags');

        //* Run form validation check
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
            );

            //* Store the session
            $this->session->set_flashdata($errors);

            //* Redirect the user
            redirect('admin/product/edit-item/'.$slug.'/'.$id);
        } else {
            
            //* Form validations are safe

            //* Store items information in a data
            $data = array(
                'item_cat_id' => $this->input->post('item_cat'),
                'item_user_id' => $this->input->post('item_author'),
                'item_status' => 1,
                'item_name' => $this->input->post('item_name'),
                'item_description' => $this->input->post('item_description'),
                'item_version' => $this->input->post('item_version'),
                'item_live_demo' => $this->input->post('item_demo'),
                'item_regu_price' => $this->input->post('item_r_liecence'),
                'item_exte_price' => $this->input->post('item_e_liecence'),
                'item_tags' => $this->input->post('item_tags'),
                'item_slug' => url_title($this->input->post('item_name'), 'dash', TRUE)
            );

            //* Call the database for the creating action
            if($this->Item_model->adminUpdateItem($data, $id))
            {
                $item_id = $id;

                if(! empty($_POST['item_thumbnail']))
                {
                     //* Create the thumbnail icon
                    $thumbs = $this->input->post('item_thumbnail');
                    $this->Item_model->updateItemThumbs($thumbs, $item_id);
                }

                if(! empty($_POST['item_preview']))
                {
                    //* Crete the preview image
                    $pre_img = $this->input->post('item_preview');
                    $this->Item_model->updateItemPreviewImage($pre_img, $item_id);
                }

                if(! empty($_POST['item_main_file']))
                {
                    //* Create item main file
                    $item_file = $this->input->post('item_main_file');
                    $this->Item_model->updateItemMainFile($item_file, $item_id);
                }

                //* Unset the current unique session
                $this->session->unset_userdata('upl_uniq');

                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button>item has been updated <b>Successfully!</b></div>');
                //* Redirect the user
                redirect('admin/product/edit-item/'.$slug.'/'.$id);
            }
            else
            {
                 //* Show error message
                 $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                 //* Redirect the user
                 redirect('admin/product/edit-item/'.$slug.'/'.$id);
            }
        }
    }

    //* Update user account
    public function user_account($uname)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
        }

        if(! empty($_POST['password']))
        {
            //* Let update the user account along side with password set

            //* firstname
            $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide the user %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Lastname
            $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide the user %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Password
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
                'required'=> 'Please provide the user %s',
                'min_length' => 'The %s must be at aleast 8 characters'
            ));

            //* Confirm password
            $this->form_validation->set_rules('con_pass', 'Confirm Password', 'trim|required|xss_clean|strip_tags|matches[password]', array(
                'required' => 'Confirm the user password',
                'matches' => 'User passwords does not match'
            ));

            //* Check if form validation request is true or false
        
            if ($this->form_validation->run() == FALSE) {
                
                //* Prepare the error messages
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
                );

                //* Store the error message
                $this->session->set_flashdata($errors);

                //* Redirect the user
                redirect('admin/accounts/users/edit-account/'.$uname);
                exit();
            }
            else
            {
                 //* check if profile pic is choosen
                if(! empty($_FILES['avater']['name']))
                {
                    //* Let process the form with profile avater
                    
                    $config['upload_path'] = './static/profile/users/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['encrypt_name'] = TRUE;
                    
                    $this->upload->initialize($config);
                    
                    if ( ! $this->upload->do_upload('avater')){
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));

                        //* Store the error message
                        $this->session->set_flashdata($errors);

                        //* Redirect the user
                        redirect('admin/accounts/users/edit-account/'.$uname);
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $avater = $file['file_name'];
                    }
                    
                }
                else
                {
                    $avater = $this->Account_model->getUserCurrentAvater($uname);
                }

                 //* Encrypt password
                $old_pass = $this->input->post('password');
                $password = password_hash($old_pass, PASSWORD_DEFAULT);

                //* Store all form request data in array
                $data = array(
                    'user_status' => $this->input->post('status'),
                    'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                    'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                    'user_avater'=> $avater,
                    'user_country' => $this->input->post('country'),
                    'user_region' => $this->input->post('region'),
                    'user_password' => $password,
                );

                //* Call the database for updating action
                if($this->Account_model->adminUpdatedUser($data, $uname))
                {
                    //* Show success message   
                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button>Account has been updated successfully</div>');

                    redirect('admin/accounts/users');
                }
                else
                {
                    //* Show error message
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button> Somethingwent wrong please try again.</div>');

                    redirect('admin/accounts/users/edit-account/'.$uname);
                    exit();
                }
            }
        }
        else
        {
            //* Password is empty we make no password change

            //* firstname
            $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide the user %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Lastname
            $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide the user %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

             //* Check if form validation request is true or false
        
             if ($this->form_validation->run() == FALSE) {
                
                //* Prepare the error messages
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>','</div>')
                );

                //* Store the error message
                $this->session->set_flashdata($errors);

                //* Redirect the user
                redirect('admin/accounts/users/edit-account/'.$uname);
                exit();
            }
            else
            {
                //* check if profile pic is choosen
                if(! empty($_FILES['avater']['name']))
                {
                    //* Let process the form with profile avater
                    
                    $config['upload_path'] = './static/profile/users/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['encrypt_name'] = TRUE;
                    
                    $this->upload->initialize($config);
                    
                    if ( ! $this->upload->do_upload('avater')){
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));

                        //* Store the error message
                        $this->session->set_flashdata($errors);

                        //* Redirect the user
                        redirect('admin/accounts/users/edit-account/'.$uname);
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $avater = $file['file_name'];
                    }
                    
                }
                else
                {
                    $avater = $this->Account_model->getUserCurrentAvater($uname);
                }

                //* Store all form request data in array
                $data = array(
                    'user_status' => $this->input->post('status'),
                    'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                    'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                    'user_avater'=> $avater,
                    'user_country' => $this->input->post('country'),
                    'user_region' => $this->input->post('region'),
                );

                //* Call the database for updating action
                if($this->Account_model->adminUpdatedUser($data, $uname))
                {
                    //* Show success message   
                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button>Account has been updated successfully</div>');

                    redirect('admin/accounts/users');
                }
                else
                {
                    //* Show error message
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button> Somethingwent wrong please try again.</div>');

                    redirect('admin/accounts/users/edit-account/'.$uname);
                    exit();
                }
            }
        }
    }

    //* Updating of email templates
    public function update_email_templates($id, $url)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }
        $email = $this->input->post('email_body');

        //* Call the database for updating action
        if($this->Email_model->updateEmailTemps($email, $id))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button>Email has been updated successfully</div>');

            redirect('admin/email_templates/'.$url);
        }
        else
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center"><button class="close" data-dismiss="alert"></button>Something Went Wrong</div>');

            redirect('admin/email_templates/'.$url);
        }
    }

    //* Updating of email smtp settings
    public function update_email_settings()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let us validate our form request
        $this->form_validation->set_rules('sender_email', 'Sender Email Address', 'trim|required|xss_clean|strip_tags|valid_email', array(
            'required' => 'Please provide the %s',
            'valid_email' => '%s must be a valid email address'
        ));
        
        $this->form_validation->set_rules('sender_name', 'Sender Name', 'trim|required|xss_clean|strip_tags');
        
        $this->form_validation->set_rules('smtp_user', 'Smtp Username', 'trim|required|xss_clean|strip_tags');
        
        $this->form_validation->set_rules('smtp_pass', 'SMtp Password', 'trim|required|xss_clean|strip_tags');
        
        $this->form_validation->set_rules('smtp_port', 'Smtp Port', 'trim|required|xss_clean|strip_tags');
        
        $this->form_validation->set_rules('smtp_host', 'Smtp Host', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store the error message
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            
            redirect('admin/settings/email-settings');
            
        } else {
            
            //* Let us store the form request
            $data = array(
                'smtp_default_email' => $this->input->post('sender_email'),
                'smtp_display_name	' => $this->input->post('sender_name'),
                'smtp_type' => $this->input->post('smtp_type'),
                'smtp_username'=> $this->input->post('smtp_user'),
                'smtp_password' => $this->input->post('smtp_pass'),
                'smtp_port' => $this->input->post('smtp_port'),
                'smtp_host' => $this->input->post('smtp_host')
            );

            //* Call the database for action
            if($this->Settings_model->updateSmtpSettings($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">SMTP Credential have been updated successfully!</div>');
                
                redirect('admin/settings/email-settings');
                
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">Something went wrong please try again</div>');
                
                redirect('admin/settings/email-settings');
            }
        }
        
    }

    //* Admin reving item
    public function review_item($slug, $id)
    {
        if(isset($_POST['approve']))
        {
            //* let approve the item
            if($this->Item_model->approveNewItem($id))
            {
                //* Let send email to the author
                $uid = $this->input->post('item_author');

                //* get author email
                $email = $this->Account_model->getAuthorEmail($uid);

                 //* Let send notification email to author
                 $site_info = $this->Settings_model->getApllicationInfo();
                 $template = array(
                     'sitename' => $site_info->set_site_name,
                     'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                     'main_url' => base_url(),
                     'item_url' => base_url().'item/'. $id . '/' . $slug,
                     'item_name' => $this->input->post('item_name')
                 );
                 
                 $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 6);
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
                 $this->email->to($email);
                 $this->email->subject('Your item has been approved');
                 $this->email->message($messages);
                 $this->email->send();

                redirect('admin/product/active-item');
                exit();
            }
        }
        elseif(isset($_POST['reject']))
        {
            //* Let send email to the author
            $uid = $this->input->post('item_author');

            //* get author email
            $email = $this->Account_model->getAuthorEmail($uid);

            if($this->Item_model->rejectItem($id))
            {
                //* Let send notification email to author
                $site_info = $this->Settings_model->getApllicationInfo();
                $template = array(
                    'sitename' => $site_info->set_site_name,
                    'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                    'main_url' => base_url(),
                    'item_name' => $this->input->post('item_name'),
                    'reject_reason' => $this->input->post('item_reject')
                );
                
                $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 7);
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
                $this->email->to($email);
                $this->email->subject('Your item has been rejected');
                $this->email->message($messages);
                $this->email->send();

               redirect('admin/product/active-item');
               exit();
            }
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Update paypal payment gateway
    public function update_papal_gateway()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* let validate the form

        $this->form_validation->set_rules('public_key', 'Public Key', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('secret_key', 'Secret Key', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/payment_gateway/paypal');
            exit();
        } else {
            
            $data = array(
                'pg_mode' => $this->input->post('mode'),
                'pg_api_public_key' => $this->input->post('public_key'),
                'pg_api_secret_key' => $this->input->post('secret_key'),
                'pg_status' => $this->input->post('pg_status')
            );

            if($this->Payment_model->updatePaypalGateway($data))
            {
                //* show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Setting has been saved!</div>');
                redirect('admin/payment_gateway/paypal');
            }
        }
        
    }

    //* Update stripe payment gateway
    public function update_stripe_gateway()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* let validate the form

        $this->form_validation->set_rules('public_key', 'Public Key', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('secret_key', 'Secret Key', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/payment_gateway/stripe');
            exit();
        } else {
            
            $data = array(
                'sg_public_key' => $this->input->post('public_key'),
                'sg_secret_key' => $this->input->post('secret_key'),
                'sg_status' => $this->input->post('sg_status')
            );

            if($this->Payment_model->updateStripeGateway($data))
            {
                //* show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Setting has been saved!</div>');
                redirect('admin/payment_gateway/stripe');
            }
        }
        
    }

    //* Update bitcoin payment gateway
    public function update_bitcoin_gateway()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* let validate the form

        $this->form_validation->set_rules('public_key', 'Public Key', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('secret_key', 'Secret Key', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/payment_gateway/stripe');
            exit();
        } else {
            
            $data = array(
                'btc_public_key' => $this->input->post('public_key'),
                'btc_private_key' => $this->input->post('secret_key'),
                'btc_status' => $this->input->post('btc_status')
            );

            if($this->Payment_model->updateBitcoinGateway($data))
            {
                //* show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Setting has been saved!</div>');
                redirect('admin/payment_gateway/bitcoin');
            }
        }
        
    }

    //* updating page
    public function update_page($id, $slug)
    {
        if(isset($_POST['update']))
        {
            $this->form_validation->set_rules('page_contents', 'Page Contents', 'trim|required|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
                );
                $this->session->set_flashdata($errors);
                redirect('admin/pages/edit/'.$slug);
            } else {
                
                $data = array(
                    'page_contents' => $this->input->post('page_contents')
                );

                if($this->Extra_model->updatePage($data, $id))
                {
                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Page Updated Successfully!</div>');
                    redirect('admin/pages/edit/'.$slug);
                }
            }
        }
        elseif(isset($_POST['delete']))
        {
            $this->Extra_model->deletePage($id);
            redirect('admin');
        }
    }

    //* Updating live chat settings
    public function set_live_chat()
    {
        $data = array(
            'set_live_chat' => $this->input->post('code')
        );

        //* Call the database form updating action
        if($this->Settings_model->updateWebsiteBasicSettings($data))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Website Basic Settings has been Saved <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/settings/live-chat');
        }
        else
        {
            //* Show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
            //* Redirect the user
        }
    }

    //* Updating of affinate program section
    public function set_affinate_program()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        $data = array(
            'set_affi_status' => $this->input->post('aff_set'),
            'set_affi_rate' => $this->input->post('aff_earn')
        );

        //* Call the database for updating action
        if($this->Settings_model->updateWebsiteBasicSettings($data))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> Affinate Program Settings has been Saved <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/settings/affinate-program');
        }
        else
        {
            //* Show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
            //* Redirect the user
            redirect('admin/settings/affinate-program');
        }
    }

    //* Webiste Theme selection
    public function change_site_theme($id)
    {
        if(isset($_POST['submit']))
        {
            //* Let reset the theme section
            $this->Theme_model->resetTheme();

            //* set new theme
            $this->Theme_model->setNewTheme($id);

            //* Notification message
            $this->session->set_flashdata('error', '<div class="alert alet-success" align="center">Theme has been changed Successfully!</div>');
            redirect('admin/themes');
            exit();
        }
        else
        {
            redirect('error_404');
        }
    }

    //* Website header contents
    public function update_website_header_contents()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Store the form request in an array
        $data = array(
            'hc_inner_head' => $this->input->post('inner_head'),
            'hc_after_nav_head' => $this->input->post('after_nav_head'),
            'hc_after_header_head' => $this->input->post('after_header_head')
        );

        //* Let insert the data into the database
        if($this->Settings_model->updateHeaderContents($data))
        {
            //* Show the success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Your settings have been saved Successfully!</div>');
            redirect('admin/settings/header-contents');
        }
    }

    //* Website Footer contents
    public function update_website_footer_contents()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Store the form request in an array
        $data = array(
            'fc_bottom_page' => $this->input->post('fc_bottom_page'),
            'fc_bottom_close' => $this->input->post('fc_bottom_close')
        );

        //* Let insert the data into the database
        if($this->Settings_model->updateFooterContents($data))
        {
            //* Show the success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Your settings have been saved Successfully!</div>');
            redirect('admin/settings/footer-contents');
        }
    }

    //* Updating social links
    public function update_social_link($name)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validation the form request
        
        //* social icon
        $this->form_validation->set_rules('sl_icon', 'Social Link Icon', 'trim|required|xss_clean|strip_tags', array(
            'required' => "You must providet the <b>%S</b>"
        ));

        //* Social link
        $this->form_validation->set_rules('sl_link', 'Social Link Url', 'trim|required|xss_clean|strip_tags|valid_url', array(
            'required' => 'Please provide the <b>%s</b>',
            'valid_url' => 'Valid url is Reccommended'
        ));
        
        //* Let confirm form request is safe or not
        
        if ($this->form_validation->run() == FALSE) {
            //* Store error messages and redirect
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/settings/social-connect/edit/'.$name);
            exit();
        } else {
            
            //* Forms look safe let stroe to array
            $data = array(
                'sl_icon' => $this->input->post('sl_icon'),
                'sl_link' => $this->input->post('sl_link')
            );

            //* prepare all data to the database
            if($this->Settings_model->updateSocialLinks($data, $name))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">New Social Link has been updated Successfully</div>');
                redirect('admin/settings/social-connect/edit/'.$name);
                exit();
            }
            else
            {
                //* show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
                redirect('admin/settings/social-connect/edit/'.$name);
                exit();
            }
        }
    }

    //* Update blog category
    public function update_blog_category($id, $name)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validate the form request
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags|is_unique[zd_blog_category.bc_name]', array(
            'required' => 'Please provide th <b>%s</b>',
            'min_length' => 'Sorry but <b>%s</b> must be at least 3 Characters',
            'max_length' => 'Sorry but <b>%s</b> must not be greater than 20 characters',
            'is_unique' => 'Sorry this <b>%s</b> already exist'
        ));
        
        //* let check for validation errors
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            redirect('admin/blog/categories/edit-category/'.$name);
        } else {
            
            //* Form validations are safe let send to database
            $data = array(
                'bc_name' => ucfirst(strtolower($this->input->post('cat_name'))),
                'bc_slug' => url_title($this->input->post('cat_name'), TRUE)
            );

            //* Let call the database for action
            if($this->Blog_model->updateBlogCategory($data, $id))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Category has been updated sucessfully!</div>');
                redirect('admin/blog/categories');
            }
            else
            {
                //* show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try agin</div>');
                redirect('admin/blog/categories');
            }
        }
    }

    //* Update blog post
    public function update_blog_post($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Store old values
        $this->session->set_flashdata('old_blog_title', $this->input->post('blog_title'));
        $this->session->set_flashdata('old_contents', $this->input->post('blog_contents'));

        //* :et va;odate tje fpr, reqiest

        //* Blog Title
        $this->form_validation->set_rules('blog_title', 'Blog Title', 'trim|required|min_length[3]|max_length[100]|xss_clean|strip_tags', array(
            'required' => 'Please provide the <b>%s</b>',
            'min_length' => 'The <b>%s</b> must be atleast 3 characters',
            'max_length' => 'The <b>%s</b> must not exceed 100 characters'
        ));

        //* Blog Contents
        $this->form_validation->set_rules('blog_contents', 'Blog Contents', 'trim|required|xss_clean', array(
            'required' => 'Please write your <b>%s</b>'
        ));

        //* Let check for form vaidlation erros
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store error messages in array
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            //* Disaplay errors
            $this->session->set_flashdata($errors);
            redirect('admin/blog/edit-blog/'.$id.'/'.$slug);
        } else {
            
            //* Form request saft let validation fille upload if exist
            if(! empty($_FILES['blog_preview']['name']))
            {
                
                $config['upload_path'] = './static/blog/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name'] = strtolower($this->input->post('blog_title').time());
                
                $this->upload->initialize($config);
                
                if ( ! $this->upload->do_upload('blog_preview')){
                    $errors = array('error' => $this->upload->display_errors('<div class="alert alert-danger" align="center">','</div>'));
                    $this->session->set_flashdata($errors);
                    redirect('admin/blog/edit-blog/'.$id.'/'.$slug);
                }
                else{
                   
                    $upl = $this->upload->data();
                    $blog_preview = $upl['file_name'];
                }
                
            }
            else
            {
                $blog_preview = $this->Blog_model->getBlogPostImagePreview($id);
            }

            //* Let prepare our form request in an array
            $data = array(
                'blog_cat_id' => $this->input->post('blog_cat'),
                'blog_status_id' => $this->input->post('blog_status'),
                'blog_title' => $this->input->post('blog_title'),
                'blog_preview' => $blog_preview,
                'blog_contents' => $this->input->post('blog_contents')
            );

            //* Let call the database for creating action
            if($this->Blog_model->updateBlogPost($data, $id))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Blog post has been updated successfully</div>');
                redirect('admin/blog/blog-post');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
                redirect('admin/blog/edit-blog/'.$id.'/'.$slug);
            }
        }
    }

    //* Setting up blog comments
    public function update_blog_comment_code()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        $code = $this->input->post('code');

        if($this->Blog_model->updateBlogComment($code))
        {
            //* show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Settings has been saved</div>');
            redirect('admin/blog/comment-setup');
        }
        else
        {
            //* show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
            redirect('admin/blog/comment-setup');
        }
    }

    //* Update google recaptcha settings
    public function update_google_recaptcha()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* secret key
        $this->form_validation->set_rules('sc_key', 'Secret Key', 'trim|required|xss_clean|strip_tags');
        
        //* Public key
        $this->form_validation->set_rules('pb_key', 'Public key', 'trim|required|xss_clean|strip_tags');
        
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/settings/google-recaptcha');
        } else {
            
            //* form request are validated let proceed
            $data = array(
                'gr_enable' => $this->input->post('enable'),
                'gr_p_key' => $this->input->post('pb_key'),
                'gr_s_key' => $this->input->post('sc_key')
            );

            if($this->Settings_model->updateGoogleRecaptcha($data))
            {
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Settings has been saved</div>');
                redirect('admin/settings/google-recaptcha');
            }
        }
        
    }

    //* Updat Facebbok app keys
    public function update_fb_login_key()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* App key
        $this->form_validation->set_rules('fb_app_key', 'Facebook App Key', 'trim|xss_clean|strip_tags');

        //* App secret key
        $this->form_validation->set_rules('fb_app_secret_key', 'Facebbok App Scret key', 'trim|xss_clean|strip_tags');

        //* Check vailations
        if($this->form_validation->run() == FALSE)
        {
            //* Prepare error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            //* set and redirect errors
            $this->session->set_flashdata($errors);
            redirect('admin/social_login/facebook');
        }
        else
        {
            $data = array(
                'fb_status' => $this->input->post('fb_app_status'),
                'fb_app_key' => $this->input->post('fb_app_key'),
                'fb_app_secret' => $this->input->post('fb_app_secret_key')
            );

            //* Let update data to database
            if($this->Extra_model->updateFacebookLoginApp($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Facebook Application Login has been Set!</div>');
                redirect('admin/social_login/facebook');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-error" align="center">Something Went Wrong Please Try Again</div>');
                redirect('admin/social_login/facebook');
            }
        }
    }

    //* Update Google app keys
    public function update_google_login_key()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* App key
        $this->form_validation->set_rules('gg_app_key', 'Google App Key', 'trim|xss_clean|strip_tags');

        //* App secret key
        $this->form_validation->set_rules('gg_app_secret_key', 'Google App Scret key', 'trim|xss_clean|strip_tags');

        //* Check vailations
        if($this->form_validation->run() == FALSE)
        {
            //* Prepare error messages
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            //* set and redirect errors
            $this->session->set_flashdata($errors);
            redirect('admin/social_login/google');
        }
        else
        {
            $data = array(
                'gg_status' => $this->input->post('gg_app_status'),
                'gg_app_key' => $this->input->post('gg_app_key'),
                'gg_app_secret_key' => $this->input->post('gg_app_secret_key')
            );

            //* Let update data to database
            if($this->Extra_model->updateGoogleLoginApp($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Google Application Login has been Set!</div>');
                redirect('admin/social_login/google');
            }
            else
            {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-error" align="center">Something Went Wrong Please Try Again</div>');
                redirect('admin/social_login/google');
            }
        }
    }

    //* Admin update user balances
    public function update_usaer_blance($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Amount
        $this->form_validation->set_rules('u_bal', 'Amount', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            //* Store and dispaly error messagss
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('admin/accounts/users-balance');
        } else {
            //* Let store data request
            $data = array(
                'bal_value' => number_format($this->input->post('u_bal'), 2)
            );

            //* Send request to the database
            if($this->Account_model->adminUpdateUserBalance($data, $id))
            {
                //* Show success and Redirect
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Account updated!</div>');
                redirect('admin/accounts/users-balance');
            }
        }
        
    }

    //* Updating amazon s3 storage settings
    public function update_amazon_s3_storage()
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* VAlidate form data
        $this->form_validation->set_rules('s3_access', 'Access Token', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('sc_key', 'Scret Key', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('s3_bucket', 'Bucket Name', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            //* DIsplay error messages
            $this->session->set_flashdata($errors);
            redirect('admin/settings/amazon-s3-storage');
        } else {
            
            //* Form request are safe
            $data = array(
                's3_access_key' => $this->input->post('s3_access'),
                's3_secret_key' => $this->input->post('sc_key'),
                's3_bucket_name' => $this->input->post('s3_bucket'),
                's3_status' => $this->input->post('enable')
            );

            //* Let send data to database
            if($this->Settings_model->updateAmazoneSEttings($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Account updated!</div>');
                redirect('admin/settings/amazon-s3-storage');
            }
        }
        
    }

    /*
    ===============================================================
    * Updating of datas sections ends here
    ===============================================================
    */

    /*
    ===============================================================
    * Deleting of datas sections start here
    ===============================================================
    */

    //* Removing of admin account
    public function delete_admin_account($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->Account_model->delteAdminAccount($id))
        {
            redirect('admin/accounts/admin');
            exit();
        }
    }

    //* Removing of user account
    public function delete_user_account($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->Account_model->delteUserAccount($id))
        {
            redirect('admin/accounts/users');
            exit();
        }
    }

    //* Deleting main category
    public function delete_main_category($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->Category_model->deleteMainCategory($id))
        {
            //* Show info message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center"><button class="close" data-dismiss="alert"></button> Category has been deleted <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/category/main-category');
        }
        else
        {
             //* Show info message
             $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Something went wrong please try again</div>');
             //* Redirect the user
             redirect('admin/category/main-category');
        }
    }

    //* Deleting sub category
    public function delete_sub_category($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->Category_model->deleteSubCategory($id))
        {
            //* Show info message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center"><button class="close" data-dismiss="alert"></button> Category has been deleted <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/category/sub-category');
        }
        else
        {
             //* Show info message
             $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Something went wrong please try again</div>');
             //* Redirect the user
             redirect('admin/category/mainsub-category');
        }
    }

    public function delete_child_category($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->Category_model->deleteChildCategory($id))
        {
            //* Show info message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center"><button class="close" data-dismiss="alert"></button> Category has been deleted <b>Successfully!</b></div>');
            //* Redirect the user
            redirect('admin/category/child-category');
        }
        else
        {
             //* Show info message
             $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Something went wrong please try again</div>');
             //* Redirect the user
             redirect('admin/category/child-category');
        }
    }

    //* Rejecting withdrawals
    public function reject_withdrawal($id)
    {
        if($this->Payment_model->delete_withdrawal($id))
        {
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Action Complete</div>');
            redirect('admin/withdrawal');
        }
    }

    //* deleting of item
    public function remove_item($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Remove the preview file
        $preview = $this->Item_model->getItemPreviewToDelete($id);
        unlink('./static/files/'.$preview);

        if ($this->Item_model->deleteItemPreview($id)) {

            //* Remove the icon file
            $icon = $this->Item_model->getIemIconFileToDelete($id);
            unlink('./static/files/'.$icon);

            if ($this->Item_model->deleteItemIcon($id)) {

                if ($do = $this->Item_model->isAwsStoreage($id)) {
                    $aws = $this->Extra_model->isAmazonStorageOpt();

                    // AWS Info
                    $bucketName = $aws->s3_bucket_name;
                    $IAM_KEY = $aws->s3_access_key;
                    $IAM_SECRET = $aws->s3_secret_key;

                    // Connect to AWS
                    try {
                        // You may need to change the region. It will say in the URL when the bucket is open
                        // and on creation.
                        $s3 = S3Client::factory(
                            array(
                                'credentials' => array(
                                    'key' => $IAM_KEY,
                                    'secret' => $IAM_SECRET
                                ),
                                'version' => 'latest',
                                'region'  => 'us-east-2'
                            )
                        );
                    } catch (Exception $e) {
                        // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
                        // return a json object.
                        die("Error: " . $e->getMessage());
                    }

                    //* Let remove item ziped file
                    $file = $this->Item_model->getItemZippedFile($id);

                    //* Remove file
                    $s3->deleteObject([
                        'Bucket' => $bucketName,
                        'Key'    => 'acemart/static/files/zips/'.$file
                    ]);
                    
                    if ($this->Item_model->deleteMainFile($id)) {
                        if ($this->Item_model->deleteItem($id)) {
                            //* Show info message
                            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center"><button class="close" data-dismiss="alert"></button> Item has been deleted <b>Successfully!</b></div>');
                            //* Redirect the user
                            redirect('admin/product/active-item');
                        } else {
                            //* Show info message
                            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Something went wrong please try again</div>');
                            //* Redirect the user
                            redirect('admin/product/active-item');
                        }
                    }
                } else {

                    $file = $this->Item_model->getItemZippedFile($id);
                    unlink('./static/files/zips/'.$file);
                    if ($this->Item_model->deleteMainFile($id)) {
                        if ($this->Item_model->deleteItem($id)) {
                            //* Show info message
                            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center"><button class="close" data-dismiss="alert"></button> Item has been deleted <b>Successfully!</b></div>');
                            //* Redirect the user
                            redirect('admin/product/active-item');
                        } else {
                            //* Show info message
                            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Something went wrong please try again</div>');
                            //* Redirect the user
                            redirect('admin/product/active-item');
                        }
                    }
                }
            }
        }
    }

    //* Delecting social links
    public function delete_social_link($id)
    {
        if(! isset($_POST['dels']))
        {
            redirect('error_404');
            exit();
        }

        //* Let perform deleting action
        if($this->Settings_model->deleteSocialLinks($id))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center">Social link has been deleted Successfuly</div>');
            redirect('admin/settings/social-connect');
            exit();
        }
        else
        {
            //* Show error message
            $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Something went wrong please try again</div>');
            redirect('admin/settings/social-connect');
            exit();
        }
    }

    //* Delete blog category
    public function delete_blog_category($id = NULL)
    {
        if(! $id)
        {
            redirect('error_404');
            exit();
        }

        if($this->Blog_model->deleteBlogCategory($id))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center">Category has been updated sucessfully!</div>');
            redirect('admin/blog/categories');
        }
    }

    //* Deleting of blog post
    public function delete_blog_post($id)
    {
        if(! isset($_POST['del']))
        {
            redirect('error_404');
            exit();
        }

        //* Get the image from server
        $blog_preview = $this->Blog_model->getBlogPostImagePreview($id);

        if($blog_preview)
        {
            //* Delete the image from server
            unlink('static/blog/'.$blog_preview);
        }

        //* delete blog post
        if($this->Blog_model->deleteBlogPost($id))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-info" align="center">Blog post has been removed</div>');
            redirect('admin/blog/blog-post');
        }
    }

    /*
    ===============================================================
    * Deleting of datas sections ends here
    ===============================================================
    */

    /*
    ===============================================================
    * Extra sections start here
    ===============================================================
    */

    //* Admin download item zip file
    public function get_item_zip_file()
    {
        if(isset($_POST['download']))
        {
            if ($do = $this->Item_model->isAwsStoreage($this->input->post('download'))) {

                $aws = $this->Extra_model->isAmazonStorageOpt();

                // AWS Info
                $bucketName = $aws->s3_bucket_name;
                $IAM_KEY = $aws->s3_access_key;
                $IAM_SECRET = $aws->s3_secret_key;

                // Connect to AWS
                try {
                    // You may need to change the region. It will say in the URL when the bucket is open
                    // and on creation.
                    $s3 = S3Client::factory(
                        array(
                            'credentials' => array(
                                'key' => $IAM_KEY,
                                'secret' => $IAM_SECRET
                            ),
                            'version' => 'latest',
                            'region'  => 'us-east-2'
                        )
                    );
                } catch (Exception $e) {
                    // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
                    // return a json object.
                    die("Error: " . $e->getMessage());
                }
                $itd = $this->input->post('download');

                //* Let fetch out the item main file
                if ($file = $this->Item_model->getMainFileForAdmin($itd)) {
                    //* Grab the item informations
                    $item_info = $this->Item_model->getItemInfoBeforeDownload($itd);

                    //* Get the website name
                    $site = $this->Settings_model->getApllicationInfo();
                    $sitename = $site->set_site_name;

                    //* Prepare file for downloading

                    $name = $sitename.'-'.$item_info->item_id.'-'.$item_info->item_slug.'.zip';
                    $path = './static/files/zips/'.$file;

                    $obj = 'acemart/static/files/zips/'.$file;
                    $url = $s3->getObjectUrl($bucketName, $obj);

                    $file_name = $name;
                    $file_url = $url;
                    header('Content-Type: application/octet-stream');
                    header("Content-Transfer-Encoding: Binary"); 
                    header("Content-disposition: attachment; filename=\"".$file_name."\""); 
                    readfile($file_url);
                    exit;

                } else {
                    redirect('error_404');
                    exit();
                }
            }else {
                $itd = $this->input->post('download');

                //* Let fetch out the item main file
                if ($file = $this->Item_model->getMainFileForAdmin($itd)) {
                    //* Grab the item informations
                    $item_info = $this->Item_model->getItemInfoBeforeDownload($itd);

                    //* Get the website name
                    $site = $this->Settings_model->getApllicationInfo();
                    $sitename = $site->set_site_name;

                    //* Prepare file for downloading

                    $name = $sitename.'-'.$item_info->item_id.'-'.$item_info->item_slug.'.zip';
                    $path = './static/files/zips/'.$file;

                    if (is_file($path)) {
                        if (ini_get('zlib.output_compression')) {
                            ini_set('zlib.output_compression', 'Off');
                        }
                
                        $mime = get_mime_by_extension($path);
                
                        header('Pragma: public');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($path)).' GMT');
                        header('Cache-Control: private', false);
                        header('Content-Type: '.$mime);
                        header('Content-Disposition: attachment; filename="'.basename($name).'"');
                        header('Content-Transfer-Encoding: binary');
                        header('Content-Length: '.filesize($path));
                        header('Connection: close');
                        readfile($path);
                        exit();
                    }
                } else {
                    redirect('error_404');
                    exit();
                }
            }
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Approve earning withdrawal request
    public function approve_withdrawal($uid, $id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* get the user information
        $u_info = $this->Account_model->getTheUserInfo($uid);

        //8 Get the user balance
        $u_bal = $this->Account_model->getUserBalance($uid);

        //* Let deduct the user balance
        $amt = $this->input->post('amt');

        $remain = $u_bal - $amt;

        //* let update the user balance
        if($this->Account_model->updateBalanceAfterWithdraw($uid, $remain))
        {
            //* Let update the withdrawal status
            $this->Payment_model->updateWithdrawState($id);

            //* Let send email
            $site_info = $this->Settings_model->getApllicationInfo();
            $template = array(
                'sitename' => $site_info->set_site_name,
                'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                'main_url' => base_url(),
                'earn' => $site_info->set_site_currency. $amt
            );
            
            $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 8);
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
            $this->email->subject('Your Earning has been paid out!');
            $this->email->message($messages);
            $this->email->send();

            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Action Complete</div>');
            redirect('admin/withdrawal');
        }
    }

    /*
    ===============================================================
    * Extra sections ends here
    ===============================================================
    */
}