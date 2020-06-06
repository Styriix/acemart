<?php
defined('BASEPATH') OR exit('This page does not exist');

class Main extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        if($this->Settings_model->isPause())
        {
            redirect('under-maintainace');
            exit();
        }

        if($this->auths->userLogged())
        {
            $this->auths->userLoggedInfo();
        }
    }

    /*
    ===================================================
    * Page viewing section start here
    ===================================================
    */

    //* Main index page
    public function index()
    {
        //* Get Newest items
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $new_items = $this->Item_model->getHomePageNewestItem($user);

        //* Popular items
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $pops = $this->Item_model->getPopularItems($user);

        //* Weekly free files
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $freebies = $this->Item_model->getAllFreeFiles($user);

        //* Follower feeds items
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
            if($this->session->userdata('uids')) {
                $user = $this->session->userdata('uids');
            } else {
                $user = NULL;
            }
            $follo_feed = $this->Item_model->getFollowingFeed($uid, $user);
        }
        else
        {
            $follo_feed = NULL;
        }

        //* Get home page blog
        $h_blogs = $this->Blog_model->getMainPageBlogList();

        //* Get flash iitems
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $flashes = $this->Item_model->getAllFlashSale($user);

        $this->smarty->view('public/index.tpl', compact(
            'new_items',
            'pops',
            'freebies',
            'follo_feed',
            'h_blogs',
            'flashes'
        ));
    }

    //* item details page
    public function item($id = NULL, $slug = NULL)
    {
        $this->session->unset_userdata('ref');
        $this->session->unset_userdata('order_id');
        if(isset($_GET['ref']))
        {
            $ref = $_GET['ref'];
            
            $this->session->set_userdata('ref', $ref);
        }
        $this->load->library(array('paypal_express' => 'paypal'));

        $paypal = $this->paypal;

        $sandbox = $paypal->public_api_key();
        $env = $paypal->paypal_env();
        $production = $paypal->public_api_key();

        //* Stripe payment infomation goes here
        $stripe = $this->Payment_model->getStripeGateway();
        $publishable_key = $stripe->sg_public_key;

        if(! $id && ! $slug)
        {
            redirect('error_404');
            exit();
        }

        //* Get the item details
        if ($item = $this->Item_model->getItemByIdAndSlug($id, $slug)) {

            //* Grab the item rating
            $rate = $this->Item_model->getHomeNewItemRating($item->item_id);

            //* Get author related product
            $p_authors = $this->Item_model->getMoreAuthorProduct($item->item_user_id, $item->item_id);

            //* Check if the user already purchase the item
            if ($this->session->userdata('uids')) {
                $uid = $this->session->userdata('uids');
                $is_purchased = $this->Download_model->checkIfUserIsPurchased($uid, $item->item_id);

                //* Check if user is author
                $is_author = $this->Item_model->checkIfUserIsAuthor($uid, $id);

                //* Check if user can rate item
                $u_rate = $this->Item_model->checkIfNotRateBefore($uid, $item->item_id);
            }
            else
            {
                $is_purchased = NULL;
                $is_author = NULL;
                $u_rate = NULL;
            }

            //* Calculate total sale time for an item
            $item_sales = $this->Download_model->getSalesValue($item->item_id);

            //*Get the review on the item
            $reviews = $this->Item_model->getItemReviews($item->item_id);

            //* Fetch the item comments
            $comments = $this->Item_model->getItemComments($item->item_id);

            //* Check if item is free
            $is_free = $this->Item_model->checkIfItemIsFree($item->item_id);

            //* Check if item is flash sale
            $is_flash = $this->Item_model->checkIfItemIsFalsh($item->item_id);

            //* Grap item price if item is on flash sale
            if($is_flash) {
                $fs_price = $this->Item_model->getFlashItemPrice($item->item_id);
            } else {
                $fs_price = NULL;
            }

            //* Bitcoin payment button
            $btc = $this->Payment_model->getBitcoinGateway();

            //* Strip payment buttons
            $stripe = $this->Payment_model->getStripeGateway();

            //* Paypal payments
            $paypal = $this->Payment_model->getPaypalGateway();

            //* Flash sale time
            $last_update_flash = $this->Item_model->getLastUpdatedFlashFiles();

            //* User collector badges
            $num_purchases = $this->Account_model->getNumberOfItemPurchase($item->item_user_id);
            if($num_purchases > 0 && $num_purchases < 20)
            {
                $c_badge = '1.png';
                $c_min = '1';
                $c_max = '20';
            }
            elseif($num_purchases > 20 && $num_purchases < 50)
            {
                $c_badge = '2.png';
                $c_min = '20';
                $c_max = '50';
            }
            elseif($num_purchases >= 50 && $num_purchases < 200)
            {
                $c_badge = '3.png';
                $c_min = '50';
                $c_max = '200';
            }
            elseif($num_purchases >= 200 && $num_purchases < 500)
            {
                $c_badge = '4.png';
                $c_min = '200';
                $c_max = '500';
            }
            elseif($num_purchases > 1000)
            {
                $c_badge = '5.png';
                $c_min = '500';
                $c_max = '1000';
            }
            else
            {
                $c_badge = NULL;
                $c_min = NULL;
                $c_max = NULL;
            }

            //* Sellers badges section
            $num_sales = $this->Account_model->catchTotalOfItemSold($item->item_user_id);
            if($num_sales > 0 && $num_sales < 200)
            {
                $s_badge = '1.png';
                $s_min = '1';
                $s_max = '200';
            }
            elseif($num_sales >= 200 && $num_sales < 1000)
            {
                $s_badge = '2.png';
                $s_min = '200';
                $s_max = '1000';
            }
            elseif($num_sales >= 1000 && $num_sales < 5000)
            {
                $s_badge = '3.png';
                $s_min = '1000';
                $s_max = '5000';
            }
            elseif($num_sales >= 5000 && $num_sales < 15000)
            {
                $s_badge = '4.png';
                $s_min = '5000';
                $s_max = '15000';
            }
            elseif($num_sales >= 15000)
            {
                $s_badge = '5.png';
                $s_min = '15000';
                $s_max = 'Above';
            }
            else
            {
                $s_badge = NULL;
                $s_min = NULL;
                $s_max = NULL;
            }

            //* Affilate badge section
            $num_ref = $this->Account_model->getNumberOfRefs($item->user_username);
            if($num_ref > 0 && $num_ref <= 20)
            {
                $a_badge = '1.png';
                $a_min = '1';
                $a_max = '20';
            }
            elseif($num_ref > 20 && $num_ref <= 100)
            {
                $a_badge = '2.png';
                $a_min = '20';
                $a_max = '100';
            }
            elseif($num_ref > 100 && $num_ref <= 200)
            {
                $a_badge = '3.png';
                $a_min = '100';
                $a_max = '200';
            }
            elseif($num_ref > 200 && $num_ref <= 1000)
            {
                $a_badge = '4.png';
                $a_min = '200';
                $a_max = '1000';
            }
            elseif($num_ref > 1000)
            {
                $a_badge = '5.png';
                $a_min = '1000';
                $a_max = 'Above';
            }
            else
            {
                $a_badge = NULL;
                $a_min = NULL;
                $a_max = NULL;
            }

            //* Giffter badge
            $giftBadge = $this->Account_model->checkIfUserIsGiftBadge($item->item_user_id);

            //* Flash badge
            $flashBadge = $this->Account_model->checkIfUserHasFlashBadge($item->item_user_id);

            if ($item) {
                if($is_flash) {
                    $stripe_item_price = $fs_price . '00';
                } else {
                    $stripe_item_price = $item->item_regu_price . '00';
                }
                $this->smarty->view('public/item-detail.tpl', compact(
                    'item',
                    'rate',
                    'p_authors',
                    'sandbox',
                    'env',
                    'production',
                    'publishable_key',
                    'stripe_item_price',
                    'is_purchased',
                    'is_author',
                    'item_sales',
                    'u_rate',
                    'reviews',
                    'comments',
                    'is_free',
                    'btc',
                    'stripe',
                    'paypal',
                    'is_flash',
                    'fs_price',
                    'last_update_flash',
                    'c_badge',
                    'c_min',
                    'c_max',
                    's_badge',
                    's_min',
                    's_max',
                    'a_badge',
                    'a_min',
                    'a_max',
                    'giftBadge',
                    'flashBadge'
                ));
            } else {
                redirect('error_404');
            }
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Category page view
    public function category($cat = NULL, $page = NULL, $num = NULL)
    {
        if(! $this->uri->segment(2))
        {
            redirect('error_404');
            exit();
        }

        if($this->uri->segment(2) OR $this->uri->segment(3) == 'pages')
        {
            if($main_cats = $this->Category_model->getMainCatBySlug($cat))
            {
                //* Get sub category base on the main category
                $sub_cats = $this->Category_model->getSubCatByMainCatId($main_cats->main_cat_id);

                //* Get all ite product related to this category

                $row_count = $this->Item_model->count_search($main_cats->main_cat_id);
                $config['base_url'] = base_url().'category/'.$cat. '/'.'pages/';
                $config['full_tag_open'] = '<ul class="pagination-align-left">';
                $config['full_tag_close'] = '</ul>';
                $config['cur_tag_open'] = '<li class="active"><a href="javascript: void(0);">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = '<span class="btn btn-outline-secondary btn-sm"><i class="icon-arrow-left"></i> First</span>';
                $config['first_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['first_tag_close'] = '</span>';
                $config['last_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['last_tag_close'] = '</span>';
                $config['last_link'] = '<span class="btn btn-outline-secondary btn-sm">Last <i class="icon-arrow-right"></i></span>';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['prev_link'] = '«';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['next_link'] = '»';
                $config['prev_tag_link'] = '<i class="fa fa-angle-left"></i>';
                $config['next_tag_link'] = '<i class="fa fa-angle-right"></i>';
                $config['total_rows'] = $row_count;
                $config['per_page'] = 15;
                $config['num_links'] = 5;
                $config['url_segment'] = 4;
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                $pages = $this->pagination->create_links();

                if($this->session->userdata('uids')) {
                    $user = $this->session->userdata('uids');
                } else {
                    $user = NULL;
                }
                $items = $this->Item_model->getItemByTheMainCat($main_cats->main_cat_id, $page, $user);

                //* Get item top sallers
                $top_sales = $this->Item_model->getItemTopSalers($main_cats->main_cat_id);


                $this->smarty->view('category/main.tpl', compact(
                    'main_cats',
                    'sub_cats',
                    'items',
                    'pages',
                    'top_sales'
                ));
            }
            else
            {
                redirect('error_404');
                exit();
            }
        }
    }

    //* Sub categories page
    public function subcategory($cat = NULL, $page = NULL, $num = NULL)
    {
        if(! $this->uri->segment(2))
        {
            redirect('error_404');
            exit();
        }

        if($this->uri->segment(2) OR $this->uri->segment(3) == 'pages')
        {
            //* Get the sub cat
            if($sub_cat = $this->Category_model->getSubCatId($cat))
            {
                //* Get the main cat
                $main_cat = $this->Category_model->getTheMainCatFromSubCat($sub_cat->sub_main_cat_id);

                //* Get all item realted to the sub cateogory
                $row_count = $this->Item_model->count_sub_item($sub_cat->sub_cat_id);
                $config['base_url'] = base_url().'subcategory/'.$cat. '/'.'pages/';
                $config['full_tag_open'] = '<ul class="pagination-align-left">';
                $config['full_tag_close'] = '</ul>';
                $config['cur_tag_open'] = '<li class="active"><a href="javascript: void(0);">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = '<span class="btn btn-outline-secondary btn-sm"><i class="icon-arrow-left"></i> First</span>';
                $config['first_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['first_tag_close'] = '</span>';
                $config['last_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['last_tag_close'] = '</span>';
                $config['last_link'] = '<span class="btn btn-outline-secondary btn-sm">Last <i class="icon-arrow-right"></i></span>';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['prev_link'] = '«';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['next_link'] = '»';
                $config['prev_tag_link'] = '<i class="fa fa-angle-left"></i>';
                $config['next_tag_link'] = '<i class="fa fa-angle-right"></i>';
                $config['total_rows'] = $row_count;
                $config['per_page'] = 20;
                $config['num_links'] = 5;
                $config['url_segment'] = 4;
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                $pages = $this->pagination->create_links();

                if($this->session->userdata('uids')) {
                    $user = $this->session->userdata('uids');
                } else {
                    $user = NULL;
                }
                $a_items = $this->Item_model->getAllItemRelateToTheSubCat($sub_cat->sub_cat_id, $page, $user);

                //* Fetch all the child category base on this sub category
                $childs = $this->Category_model->getAllChildCatBaseOnSubCat($sub_cat->sub_cat_id);

                $this->smarty->view('category/sub.tpl', compact(
                    'main_cat',
                    'sub_cat',
                    'a_items',
                    'pages',
                    'childs'
                ));
            }
        }
        else
        {
            redirect('error_404');
        }
    }

    //* Chid category page
    public function childcategory($cat = NULL, $page = NULL, $num = NULL)
    {
        if(! $this->uri->segment(2))
        {
            redirect('error_404');
            exit();
        }

        if($this->uri->segment(2) OR $this->uri->segment(3) == 'pages')
        {
            //* Get the sub cat
            if($child_cat = $this->Category_model->getChildCatId($cat))
            {
                //* Get the main cat
                $sub_cat = $this->Category_model->getTheSubCatFromSubCat($child_cat->child_sub_cat_id);

                //* Get the main category id
                $main_cat = $this->Category_model->getTheMainCatFromSubCat($sub_cat->sub_main_cat_id);

                //* Get all item realted to the sub cateogory
                $row_count = $this->Item_model->count_child_item($child_cat->child_cat_id);
                $config['base_url'] = base_url().'childcat/'.$cat. '/'.'pages/';
                $config['full_tag_open'] = '<ul class="pagination-align-left">';
                $config['full_tag_close'] = '</ul>';
                $config['cur_tag_open'] = '<li class="active"><a href="javascript: void(0);">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = '<span class="btn btn-outline-secondary btn-sm"><i class="icon-arrow-left"></i> First</span>';
                $config['first_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['first_tag_close'] = '</span>';
                $config['last_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
                $config['last_tag_close'] = '</span>';
                $config['last_link'] = '<span class="btn btn-outline-secondary btn-sm">Last <i class="icon-arrow-right"></i></span>';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['prev_link'] = '«';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['next_link'] = '»';
                $config['prev_tag_link'] = '<i class="fa fa-angle-left"></i>';
                $config['next_tag_link'] = '<i class="fa fa-angle-right"></i>';
                $config['total_rows'] = $row_count;
                $config['per_page'] = 20;
                $config['num_links'] = 5;
                $config['url_segment'] = 4;
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                $pages = $this->pagination->create_links();

                if($this->session->userdata('uids')) {
                    $user = $this->session->userdata('uids');
                } else {
                    $user = NULL;
                }
                $a_items = $this->Item_model->getAllItemRelateToTheChildCat($child_cat->child_cat_id, $page, $user);

                //* Fetch all the child category base on this sub category
                $childs = $this->Category_model->getAllChildCatBaseOnSubCat($sub_cat->sub_cat_id);

                $this->smarty->view('category/child.tpl', compact(
                    'main_cat',
                    'sub_cat',
                    'a_items',
                    'pages',
                    'childs',
                    'child_cat'
                ));
            }
        }
        else
        {
            redirect('error_404');
        }
    }

    public function test()
    {

        // $mnt = Carbon\Carbon::now()->format('m');
        // $yr = Carbon\Carbon::now()->format('Y');

        // $date = mktime(0,0,0,$mnt,1,$yr); //The get's the first of March 2009
        // $links = array();
        // for($n=1;$n <= date('t',$date);$n++){
        // echo $n;
        // }

        $timestamp = strtotime('2009-10-22');

        echo $day = date('D', $timestamp);

    }

    public function errors()
    {
        $this->smarty->view('public/error.tpl');
    }

    //* Pages
    public function pages($url)
    {
        if(! $this->uri->segment(2))
        {
            redirect('error_404');
            exit();
        }

        $url = $this->uri->segment(2);

        if($page = $this->Extra_model->getPagesMain($url))
        {
            $this->smarty->view('public/pages.tpl', compact(
                'page'
            ));
        }
    }

    //* Search
    public function search()
    {
        if(isset($_POST['search']))
        {
            $key = $this->input->post('key');

            $keys = $this->Item_model->searchItem($key);

            $this->smarty->view('public/search.tpl', compact(
                'keys'
            ));
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* contact us
    public function contact_us()
    {
        $this->smarty->view('public/contact.tpl');
    }

    //* send msg
    public function send_contact()
    {
        if(isset($_POST['submit']))
        {
            $site_info = $this->Settings_model->getApllicationInfo();
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
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to($site_info->set_email);
            $this->email->subject($this->input->post('subject'));
            $this->email->message($this->input->post('message'));
            $this->email->send();

            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Your message has been sent!</div>');
            redirect('contact');
        }
    }

    //* Under maintenace
    public function pause()
    {
        $this->smarty->view('public/pause.tpl');
    }

    //* Free file page
    public function free_files()
    {
        $last_update_free = $this->Item_model->getLastUpdatedFreeFiles();
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $freebies = $this->Item_model->getAllFreeFiles($user);
        $this->smarty->view('public/free_files.tpl', compact(
            'last_update_free',
            'freebies'
        ));
    }

    //* Flahs sales page
    public function flash_sales()
    {
        $last_update_flash = $this->Item_model->getLastUpdatedFlashFiles();
        if($this->session->userdata('uids')) {
            $user = $this->session->userdata('uids');
        } else {
            $user = NULL;
        }
        $flashes = $this->Item_model->getAllFlashSale($user);
        $this->smarty->view('public/flash_sale.tpl', compact(
            'last_update_flash',
            'flashes'
        ));
    }

    //* Item demo preview
    public function preview($id = NULL, $slug = NULL)
    {
        if ($item = $this->Item_model->getItemByIdAndSlug($id, $slug)) {
            $this->smarty->view('public/preview.tpl', compact(
                'item'
            ));
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* View item liecence
    public function get_license($id = NULL)
    {
        IF(! $id)
        {
            redirect('error_404');
            exit();
        }

        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        $uid = $this->session->userdata('uids');

        //* Get the license infomations
        $lies = $this->Item_model->getLicenseInfo($id, $uid);
        $mine = $this->Account_model->getMyInfo($uid);

        //* Load website infomations
        $site_info = $this->Settings_model->getApllicationInfo();

        if($lies)
        {
            $this->load->view('liecense/download', compact(
                'site_info',
                'lies',
                'mine'
            ));
        }
        else
        {
            redirect('error_404');
        }
        
    }

    //* Blog list section
    public function blog($page = NULL)
    {
         //* Get all item realted to the sub cateogory
         $row_count = $this->Blog_model->count_blog_post();
         $config['base_url'] = base_url().'blog/pages/';
         $config['full_tag_open'] = '<ul class="pagination-align-left">';
         $config['full_tag_close'] = '</ul>';
         $config['cur_tag_open'] = '<li class="active"><a href="javascript: void(0);">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $config['first_link'] = '<span class="btn btn-outline-secondary btn-sm"><i class="icon-arrow-left"></i> First</span>';
         $config['first_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
         $config['first_tag_close'] = '</span>';
         $config['last_tag_open'] = '<span class="float-right column text-right hidden-xs-down">';
         $config['last_tag_close'] = '</span>';
         $config['last_link'] = '<span class="btn btn-outline-secondary btn-sm">Last <i class="icon-arrow-right"></i></span>';
         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';
         $config['prev_link'] = '«';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['next_link'] = '»';
         $config['prev_tag_link'] = '<i class="fa fa-angle-left"></i>';
         $config['next_tag_link'] = '<i class="fa fa-angle-right"></i>';
         $config['total_rows'] = $row_count;
         $config['per_page'] = 12;
         $config['num_links'] = 5;
         $config['url_segment'] = 3;
         $this->pagination->initialize($config);
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
         $pages = $this->pagination->create_links();

        //* Fetch the blogs
        $blogs = $this->Blog_model->getHomePageBlogList($page);
        $this->smarty->view('blog/list.tpl', compact(
            'blogs',
            'pages'
        ));
    }

    //* Bog single page
    public function blog_single($slug)
    {
        //* get blog by slug
        if($blog = $this->Blog_model->getBlogBySlug($slug))
        {
            //* set cookie for views
            $bid = $blog->blog_id;
            if(! $this->input->cookie('blog_view_'.$bid,TRUE))
            {
                $cookie= array(
                    'name'   => 'blog_view_'.$bid,
                    'value'  => $blog->blog_title,
                    'expire' => '2628000',
                );
                $this->input->set_cookie($cookie);

                $this->Blog_model->setBlogView($blog->blog_id);
            }
            //* Get recent post
            $recents = $this->Blog_model->getRecentBlogPost($slug);
            $cmt = $this->Blog_model->getCommentSettings();
            $this->smarty->view('blog/single.tpl', compact(
                'blog',
                'recents',
                'cmt'
            ));
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    /*
    ===================================================
    * Page viewing section ends here
    ===================================================
    */

    /*
    ====================================================
    * Ajax processing start here
    ====================================================
    */

    //* Processing liking of items
    public function like_item($id, $uid = NULL)
    {
        if ($uid) {
            if ($this->input->is_ajax_request()) {
                //* Let create item likes
                if ($this->Item_model->createNewItemLike($id, $uid)) {
                    $total = $this->Item_model->getHomeNewitemTotalLike($id);
                    $likes = number_format($total);
                    $data = array(
                        'likes' => $likes,
                        'status' => 'liked'
                    );
                    echo json_encode($data);

                     //* Get user info
                     $u_info = $this->Account_model->getUserRaterInfo($uid);
                     //* Get the item information
                     $item = $this->Item_model->getItemLIkedInfo($id);
                     //* Let send notification email to author
                     $site_info = $this->Settings_model->getApllicationInfo();
                     $template = array(
                         'username' => $u_info->user_username,
                         'email' => $u_info->user_email,
                         'firstname' => $u_info->user_firstname,
                         'lastname' => $u_info->user_lastname,
                         'sitename' => $site_info->set_site_name,
                         'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                         'main_url' => base_url(),
                         'item_url' => base_url().'item/'. $item->item_id . '/' . $item->item_slug,
                         'item_name' => $item->item_name,
                         'user_avater' => base_url('static/profile/users/'.$u_info->user_avater)
                     );
                     
                     $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 9);
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
                     $this->email->to($item->user_email);
                     $this->email->subject($u_info->user_username.' like your item');
                     $this->email->message($messages);
                     $this->email->send();


                } else {
                    //* let remove like function
                    $this->Item_model->removeItemLike($id, $uid);
                    $total = $this->Item_model->getHomeNewitemTotalLike($id);
                    $likes = number_format($total);
                    $data = array(
                        'likes' => $likes,
                        'status' => 'disliked'
                    );
                    echo json_encode($data);
                }
            } else {
                redirect('error_404');
                exit();
            }
        }
    }
}