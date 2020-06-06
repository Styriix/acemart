<?php
defined('BASEPATH') OR exit('This page does not exist');

class General {

    public function __construct()
    {
        $CI =& get_instance();
        
        /*
        =========================================
        * Loads all needed Libraries
        =========================================
        */
        $CI->load->library(array(
            'themes',
            'session',
        ));
        

        /*
        =========================================
        * Loads all needed helpers
        =========================================
        */

        $CI->load->helper(array(
            'url'
        ));

        /*
        =========================================
        * Loads all needed Models
        =========================================
        */

        $CI->load->model(array(
            'Settings_model',
            'Category_model',
            'Account_model',
            'Extra_model',
            'Item_model',
            'Blog_model'
        ));
        

        /*
        =========================================
        * Loads all website assests
        =========================================
        */

        $theme = $CI->themes->getTheme();

        $CI->smarty->assign(array(
            'asset' => base_url() . 'assets/admin',  //* Admin asset loader
            'ast' => base_url() . 'assets/' . $theme, //* Load front end assets,
            'ck' => base_url() . 'assets/ckeditor', //* Load ckeditor plugins
            'upl' => base_url() . 'assets/uploader', //* File uploader assets,
            'contf' => base_url() . 'assets/country', //* Website country selector assets
            'timer' => base_url('assets/flip'), //* Flip countdown titmer
        ));

        /*
        ==========================================
        * Website URL
        ==========================================
        */

        $CI->smarty->assign('url', array(
            'admin' => base_url() . 'admin',
            'main' => base_url(),
        ));

        /*
        =================================================
        * Active url class declarations
        =================================================
        */

        $CI->smarty->assign(array(
            'url_1' => $CI->uri->segment(1),
            'url_2' => $CI->uri->segment(2),
            'url_3'=> $CI->uri->segment(3),
            'url_4' => $CI->uri->segment(4),
            'url_5' => $CI->uri->segment(5)
        ));

        /*
        =================================================
        * Load all the provide website security
        =================================================
        */

        $CI->smarty->assign(array(
            'csrf_token' => '<input type="hidden" name="'. $CI->security->get_csrf_token_name() .'" value="' . $CI->security->get_csrf_hash() . '">',
            'csrf_value' => $CI->security->get_csrf_hash()
        ));

        /*
        =================================================
        * Forms and alert messages here
        =================================================
        */

        //* Normal alert messages
        if($CI->session->flashdata('error'))
        {
            $form_alert = $CI->session->flashdata('error');
        }
        else
        {
            $form_alert = NULL;
        }

        $CI->smarty->assign('form_alert', $form_alert);

        /*
        ==========================================
        * Theme identifiers
        ==========================================
        */

        $theme = $CI->themes->getTheme();

        $CI->smarty->assign('theme', array(
            'name' => $theme
        ));

        /*
        ==========================================
        * Load Application Infomaton
        ==========================================
        */

        $site_info = $CI->Settings_model->getApllicationInfo();

        $CI->smarty->assign('app', array(
            'name' => $site_info->set_site_name,
            'title' => $site_info->set_site_title,
            'short_descrip' => $site_info->set_site_short_description,
            'descrip' => $site_info->set_site_description,
            'meta_descrip' => $site_info->set_meta_description,
            'meta_keys' => $site_info->set_meta_keywords,
            'site_color' => $site_info->set_theme_color,
            'logo' => base_url() . 'static/website/site-logo/'. $site_info->set_site_logo,
            'favicon' => base_url() . 'static/website/site-logo/'. $site_info->set_site_favicon,
            'currency' => $site_info->set_site_currency,
            'currency_code' => $site_info->set_site_currency_code,
            'item_charge' => $site_info->set_item_charge,
            'min_withdraw' => $site_info->set_min_withdraw,
            'pay_day' => $site_info->set_pay_day,
            'email' => $site_info->set_email,
            'lc' => $site_info->set_live_chat,
            'site_status' => $site_info->set_site_status,
            'is_affi' => $site_info->set_affi_status,
            'affi_rate' => $site_info->set_affi_rate
        ));

        /*
        =========================================================
        * User and Admin account profile & Product asset assert_options
        =========================================================
        */

        $CI->smarty->assign(array(
            'a_photo' => base_url() . 'static/profile/admin/',
            'u_photo' => base_url() . 'static/profile/users/',
            'prd_img' => base_url() . 'static/files/',
        ));

        /*
        ============================================================
        * Global list main categories
        ============================================================
        */

        //* Main categories listing
        $main_cats = $CI->Category_model->listMainCategoryGlobally();

        $CI->smarty->assign('main_g_cats', $main_cats);

        //Sub category listing for item uploads
        $upl_sub_cats = $CI->Category_model->listSubCatsForUploader();

        $CI->smarty->assign('upl_subs', $upl_sub_cats);

        /*
        ==============================================================
        * Authentication access
        ==============================================================
        */

        //* Let detect if user is logged
        if($CI->session->userdata('user_logged'))
        {
            //* Let grab the session id of the user
            $uid = $CI->session->userdata('uids');

            //* Let check if the id exist in out database
            if($user_login = $CI->Account_model->validateUserSectionLogId($uid))
            {
                $CI->smarty->assign('is_login', TRUE);
            }
            else
            {
                $CI->smarty->assign('is_login', FALSE);
            }
        }
        else
        {
            $CI->smarty->assign('is_login', FALSE);
        }

        /*
        ==============================================================
        * Get custorm pages
        ==============================================================
        */

        $page = $CI->Extra_model->getPages();

        $CI->smarty->assign('c_pages', $page);

        /*
        ==============================================================
        * Application version check
        ==============================================================
        */

        /*
        ==============================================================
        * Main website counter
        ==============================================================
        */

        //* Count all item available
        $count_item = $CI->Item_model->countHomeViewItems();

        //* Count total item sold out
        $count_sales = $CI->Item_model->countHomeViewTotalSales();

        //* Count total item free files
        $count_free_files = $CI->Item_model->countHomeViewFreeFiles();

        //* Count total users
        $count_total_users = $CI->Account_model->countHomeViewTotalUsers();

        $CI->smarty->assign(array(
            'cal_users' => $count_total_users,
            'cal_free' => $count_free_files,
            'cal_sales' => $count_sales,
            'cal_item' => $count_item
        ));

        /*
        ==============================================================
        * Header contents infomations
        ==============================================================
        */

        $hc = $CI->Settings_model->getHeaderContents();

        $CI->smarty->assign('head', array(
            'inn' => $hc->hc_inner_head,
            'a_nav' => $hc->hc_after_nav_head,
            'b_main' => $hc->hc_after_header_head
        ));

        /*
        ==============================================================
        * Footer contents infomations
        ==============================================================
        */

        $fc = $CI->Settings_model->getFooterContents();

        $CI->smarty->assign('foot', array(
            'foot' => $fc->fc_bottom_page,
            'inn_foot' => $fc->fc_bottom_close
        ));

         /*
        ==============================================================
        * Get all social links
        ==============================================================
        */

        $sl = $CI->Settings_model->getSocialLinks();
        $CI->smarty->assign('m_social', $sl);

        /*
        ============================================================
        * Blog data and infomation
        ============================================================
        */

        $CI->smarty->assign('blogg', array(
            'blog_img' => base_url('static/blog/'),
            'blog_no_img' => base_url('static/blog/no-preview.jpg')
        ));

        $is_blog = $CI->Blog_model->checkIsBlog();
        $CI->smarty->assign('is_blog', $is_blog);

        /*
        ============================================================
        * Google Recaptcha informations
        ===========================================================
        */

        $gr = $CI->Settings_model->getGoogleRecaptchaInfo();

        if($gr->gr_enable == 1)
        {
            $enable = TRUE;
        }
        else
        {
            $enable = FALSE;
        }

        $CI->smarty->assign('robot', array(
            'p_key' => $gr->gr_p_key,
            's_key' => $gr->gr_s_key,
            'enable' => $gr->gr_enable,
            'isRobotCheck' => $enable
        ));

        /*
        =======================================================
        * Let determin if autual logged user is and Author or Not
        ========================================================
        */

        if($CI->session->userdata('uids'))
        {
            $uid = $CI->session->userdata('uids');
            if($CI->Account_model->checkIfUserIsAnAuthor($uid))
            {
                $is_author = TRUE;
            }
            else
            {
                $is_author = FALSE;
            }
        }
        else
        {
            $is_author = FALSE;
        }

        $CI->smarty->assign('is_author', $is_author);

        /*
        ============================================================
        * Declare facebook login url
        ============================================================
        */
        $fb_key = $CI->Extra_model->getFacebookAppKeys();
        $fb = new \Facebook\Facebook([
            'app_id' => $fb_key->fb_app_key,
            'app_secret' => $fb_key->fb_app_secret,
            'default_graph_version' => 'v2.10',
        ]);
        $helper = $fb->getRedirectLoginHelper();
        $fb_pamit = ['email'];
        $fb_login_url = $helper->getLoginUrl(base_url('auth/fb_auth'), $fb_pamit);

        $CI->smarty->assign('fb_login', $fb_login_url);

        /*
        ============================================================
        * Declare Google login url
        ============================================================
        */

        $gc = new Google_Client();
        $gg_key = $CI->Extra_model->getGoogleAppKeys();
        $gc->setClientId($gg_key->gg_app_key);
        $gc->setClientSecret($gg_key->gg_app_secret_key);
        $gc->setRedirectUri(base_url('auth/google_auth/'));
        $gc->addScope('email');
        $gc->addScope('profile');

        $google_login = $gc->createAuthUrl();

        $CI->smarty->assign('google_login', $google_login);

         /*
        ============================================================
        * Referal Detectors
        ============================================================
        */

        if(isset($_GET['ref']))
        {
            $ref = $_GET['ref'];
        }
        else
        {
            $ref = NULL;
        }

        $CI->smarty->assign('myRef', $ref);
        
    }
}