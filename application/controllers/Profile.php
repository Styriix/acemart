<?php
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

defined('BASEPATH') OR exit('This page does not exist');

class Profile extends CI_Controller
{
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

    //* My downloads page
    public function mydownload()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');

            //* Fetch the user downloaded items
            $downloads = $this->Download_model->getUserItemDownloads($uid);
            $this->smarty->view('profile/my_downloads.tpl', compact(
                'downloads'
            ));
        }
        else
        {
            redirect('/');
        }
    }

    //* Profile details page
    public function profile_page($user)
    {
        //* let get the user infomations
        if($up = $this->Account_model->getUserProfileInfomation($user))
        {
            //* Calculate the total sale of user item
            $total_sale = $this->Account_model->calculateTotalSale($up->user_id);

            //* Get the user shop
            $shops = $this->Item_model->getUserShops($up->user_id);

            //* check visitor id
            if($this->session->userdata('uids'))
            {
                $myId = $this->session->userdata('uids');

                //* Check if is already following
                $isFollowing = $this->Account_model->isFollowing($up->user_id, $myId);
            }
            else
            {
                $isFollowing = NULL;
            }

            //* Count number of followers
            $num_folo = $this->Account_model->countNumOfFollwers($up->user_id);

            //* List out user followers
            $follo_lists = $this->Account_model->listOutUserFollowers($up->user_id);

            //* list out user following
            $following_lists = $this->Account_model->listOutUserFollowing($up->user_id);

            //* Count the num of user following
            $num_following = $this->Account_model->countNumOfFollowing($up->user_id);

            //* User collector badges
            $num_purchases = $this->Account_model->getNumberOfItemPurchase($up->user_id);
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
            $num_sales = $this->Account_model->catchTotalOfItemSold($up->user_id);
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
            $num_ref = $this->Account_model->getNumberOfRefs($up->user_username);
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
            $giftBadge = $this->Account_model->checkIfUserIsGiftBadge($up->user_id);

            //* Flash badge
            $flashBadge = $this->Account_model->checkIfUserHasFlashBadge($up->user_id);

            $this->smarty->view('profile/index.tpl', compact(
                'up',
                'total_sale',
                'shops',
                'isFollowing',
                'num_folo',
                'follo_lists',
                'following_lists',
                'num_following',
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
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Profile settings
    public function settings()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
            $user = $this->Account_model->getUserData($uid);
            $this->smarty->view('profile/settings.tpl', compact(
                'user'
            ));
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Uploading of item
    public function upload_item()
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('/');
        }

        //* if user is not an author let activate the user
        $uid = $this->session->userdata('uids');
        if(! $this->Account_model->checkIfUserIsAnAuthor($uid))
        {
            //* Make user and author
            $this->Account_model->makeUserAnAuthor($uid);
        }

        //* Set uniq session for files uploaded identifier
        if(! $this->session->userdata('upl_uniq'))
        {
            $uid = $this->session->userdata('uid');
            $upl_uniq = $uid . uniqid();

            $this->session->set_userdata('upl_uniq', $upl_uniq);
        }

        $this->smarty->view('profile/upload.tpl');
    }

    //* My items list page
    public function my_items()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
            $up = $this->Account_model->getUserData($uid);
            $items = $this->Item_model->getMyItems($uid);
            if($this->Account_model->checkIfUserIsAnAuthor($uid))
            {
                $this->smarty->view('profile/my-item.tpl', compact(
                    'up',
                    'items'
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
            exit();
        }
    }

    //* Editing of item page
    public function edit_item($id, $slug)
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        //* Set uniq session for files uploaded identifier
        if(! $this->session->userdata('upl_uniq'))
        {
            $uid = $this->session->userdata('uid');
            $upl_uniq = $uid . uniqid();

            $this->session->set_userdata('upl_uniq', $upl_uniq);
        }

        $uid = $this->session->userdata('uids');

        if($item = $this->Item_model->isMyItem($uid, $id))
        {
            $this->smarty->view('profile/edit-item.tpl', compact(
                'item'
            ));
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    //* Withdrawal page
    public function withdraw()
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        $uid = $this->session->userdata('uids');

        $up = $this->Account_model->getUserData($uid);

        $mws = $this->Payment_model->getWithdrawalList($uid);
        
        if($this->Account_model->checkIfUserIsAnAuthor($uid))
        {
            $this->smarty->view('profile/withdraw.tpl', compact(
                'up',
                'mws'
            ));
        }
        else
        {
            redirect('error_404');
        }
    }

    //* Messaging and chet section
    public function message($user = NULL)
    {
        if ($uid = $this->session->userdata('uids')) {

            //* Get sender infomations
            $sender = $this->Account_model->getSenderInfomation($uid);


            if($user && $user != $sender->user_username)
            {
                //* idetify the receiver
                $receiver = $this->Account_model->getReceiverId($user);

                //* Grab the user sending to infomations
                $msg_to = $this->Account_model->getUserMessagingToInfo($user);

                if ($msg_to->user_id != $uid) {
                    //* Read messages receipt
                    $this->Account_model->readMessagesReceipt($receiver, $uid);
                }

                //* Get the conversation messages
                $messages = $this->Account_model->getMessages($uid, $receiver);
            }
            else
            {
                $msg_to = NULL;
                $messages = NULL;
            }
            
            $this->smarty->view('message/index.tpl', compact(
                'msg_to',
                'messages',
                'sender',
                'uid'
            ));
        }
        else
        {
            redirect('/');
            exit();
        }
    }

    //* Load convos in ajax request
    public function load_convos($user = NULL)
    {
        if(! $this->input->is_ajax_request())
        {
            redirect('error_404');
            exit();
        }
        $uid = $this->session->userdata('uids');

        //* Get recent conversations
        $convos = $this->Account_model->getConversations($uid);

        $conva = array();
        foreach($convos as $convo)
        {
            $user_to_push = ($convo->msg_to_id != $uid) ? $convo->msg_to_id : $convo->msg_from_id;

			if(!in_array($user_to_push, $conva)) {
				array_push($conva, $user_to_push);
			}
        }

        foreach($conva as $cons)
        {
            $convers = $this->Account_model->getConversationsSecond($cons);
            
            $this->smarty->assign(array(
                'convers'=> $convers,
                'uid' => $uid
            ));
            $this->smarty->display('message/convos.tpl');
        }
        
    }

    //* Slae statements
    public function sale_statements()
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        $uid = $this->session->userdata('uids');

        if(isset($_GET['from']) && isset($_GET['to']))
        {
            $from = $this->input->get('from'). " 00:00:00";
            $to = $this->input->get('to'). " 00:00:00";
        }
        else
        {
            $from = NULL;
            $TO = NULL;
        }
        

        //* Get the user statement
        if($from != "" && $to != "")
        {
            $my_smt = $this->Account_model->getUserSaleStatementByDate($uid, $from, $to);
        }
        else
        {
            $my_smt = $this->Account_model->getUserSaleStatement($uid);
        }

        //* Calculate my total sales
        $my_sales = $this->Account_model->calculateMyTotalSales($uid);
        $sum = 0;
        if($my_sales)
        {
            foreach($my_sales as $key=>$value)
            {
                $sum += $value->ss_earn;
            }
        }

        $my_sales = $sum;

        if($this->Account_model->checkIfUserIsAnAuthor($uid))
        {
            $this->smarty->view('profile/statement.tpl', compact(
                'my_smt',
                'my_sales'
            ));
        }
        else
        {
            redirect('error_404');
        }
    }

    /*
    ==================================================
    * Creating of datas
    ==================================================
    */

    //* Rating an item
    public function rate_item($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');

            //* Let check if user purchat item
            $itd = $id;

            $this->form_validation->set_rules('r_cmt', 'R cmt', 'trim|xss_clean|strip_tags');
            

            if($this->Download_model->checkIfUserIsPurchased($uid, $itd))
            {
                //* Let check if user have not supbmit any rating
                if($this->Item_model->checkIfNotRateBefore($uid, $itd))
                {
                    //* Let submit rating
                    $value = $this->input->post('r_value');
                    $r_cmt = $this->input->post('r_cmt');

                    //* Insert to the database
                    if($this->Item_model->submitNewItemRating($itd, $value, $uid, $r_cmt))
                    {
                        //* get item info
                        $item = $this->Item_model->getItemByIdAndSlug($id, $slug);

                        //* Get user info
                        $u_info = $this->Account_model->getUserRaterInfo($uid);
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
                            'rate' => $value,
                            'item_name' => $item->item_name
                        );
                        
                        $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 4);
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
                        $this->email->subject('Your item receive '.$value.' star rating');
                        $this->email->message($messages);
                        $this->email->send();


                        //* Show success message
                        $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Review has been submited successfully!</div>');
                        redirect('item/'.$itd.'/'.$slug);
                    }
                }
                else
                {
                    redirect('/');
                }
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    //* Post of new item comment
    public function item_comment($id, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Get the user id
        $uid = $this->session->userdata('uids');

        //* validating the form request
        $this->form_validation->set_rules('cmt_body', 'Comment', 'trim|required|xss_clean|strip_tags');
        
        //* check if validate if free
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            redirect('item/'.$id.'/'.$slug);
        } else {
            
            //* Form look ggod and clear let process it
            $data = array(
                'cmt_user_id' => $uid,
                'cmt_item_id' => $id,
                'cmt_body' => $this->input->post('cmt_body')
            );

            //* Let call the database for updating action
            if($this->Item_model->postNewItemComment($data))
            {
                //* Get author info
                $item = $this->Item_model->getAuthorInfo($id);
                
                //* Check if not author who post comment
                if($this->Item_model->notAuthorComment($uid, $id))
                {
                    //* Get user info
                    $u_info = $this->Account_model->getUserRaterInfo($uid);

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
                        'item_name' => $item->item_name
                    );
                    
                    $send_welcome_email = $this->Email_model->getEmailTempsToSend($id = 5);
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
                    $this->email->subject($u_info->user_username . ' Comment on your item');
                    $this->email->message($messages);
                    $this->email->send();
                }
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Your comment has been posted successfully!</div>');
                redirect('item/'.$item->item_id.'/'.$item->item_slug);
            }
        }
        
    }

    //* Post comment reply
    public function reply_cmt($id, $item_id, $item_slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        $cmt_id = $id;
        $uid = $this->session->userdata('uids');

        //* let validate the from request
        $this->form_validation->set_rules('r_cmt', 'Reply Contents', 'trim|required|xss_clean|strip_tags');
        
        //* let check validation
        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );
            $this->session->set_flashdata($errors);
            redirect('item/'.$item_id.'/'.$item_slug);
        } else {
            $data = array(
                'rp_cmt_id' => $cmt_id,
                'rp_user_id' => $uid,
                'rp_body' => $this->input->post('r_cmt')
            );

            //* Let call the database for action
            if($this->Item_model->replyToComment($data))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Reply has been updated</div>');
                redirect('item/'.$item_id.'/'.$item_slug);
            }
        }
        
    }

    //* Submiting new item
    public function submit_new_item()
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
            redirect('upload-item');
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
                'item_user_id' => $this->session->userdata('uids'),
                'item_name' => $this->input->post('item_name'),
                'item_description' => $this->input->post('item_description'),
                'item_version' => $this->input->post('item_version'),
                'item_live_demo' => $this->input->post('item_demo'),
                'item_regu_price' => $this->input->post('item_r_liecence'),
                'item_exte_price' => $this->input->post('item_e_liecence'),
                'item_tags' => $this->input->post('item_tags'),
                'item_slug' => url_title($this->input->post('item_name'), 'dash', true),
                'item_storage' => $storage
            );

            //* Call the database for the creating action
            if ($item_id = $this->Item_model->userCreateNewItem($data)) {

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
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center"><button class="close" data-dismiss="alert"></button> New item has been <b>Successfully!</b> and is awaiting admin review</div>');
                //* Redirect the user
                redirect('upload-item');
            } else {
                //* Show error message
                $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button> Sorry something went wrong please try again</div>');
                //* Redirect the user
                redirect('upload-item');
            }
        }
    }

    //* Creating of withdarawal
    public function create_withdrawal()
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        $uid = $this->session->userdata('uids');

        //* Let validate the form requests
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean|strip_tags|numeric');
        $this->form_validation->set_rules('account', 'Account / Email', 'trim|required|xss_clean|strip_tags');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|strip_tags');
        
        if ($this->form_validation->run() == FALSE) {
            
            $errors = array(
                'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
            );

            $this->session->set_flashdata($errors);
            redirect('withdraw');
        } else {
            
            //* Check if password is correct
            $password = $this->input->post('password');
            if($this->Account_model->checkPasswordToWithdraw($uid, $password))
            {
                //* Let check if not withdraw place before
                if($this->Payment_model->allreadyHavePendingWithdrawal($uid))
                {
                    $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Your already have a pending withdrawal</div>');
                    redirect('withdraw');
                    exit();
                }
                else
                {

                
                    //* Let assign schedule date
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $day = $site_info->set_pay_day;

                    $set = Carbon\Carbon::now();

                    $add_month = $set->addMonths(1);

                    $next = $add_month->startOfMonth();

                    $day = $next->weekDay($day);

                    $sch_date = $day->toFormattedDateString();

                    //* Let store the data request
                    $data = array(
                        'wd_user_id' => $uid,
                        'wd_amount' => $this->input->post('amount'),
                        'wd_method' => $this->input->post('method'),
                        'wd_account' => $this->input->post('account'),
                        'wd_place' => $sch_date
                    );

                    //* Create data to data base
                    if ($this->Payment_model->createNewWithdrawRequest($data)) {
                        $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Withdrawal Placed!</div>');
                        redirect('withdraw');
                    }
                }
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">YOur password is incorrect</div>');
                redirect('withdraw');
            }
        }
        
    }

    //* Following user
    public function follow_user($id, $user)
    {
        if(! $this->input->is_ajax_request())
        {
            redirect('error_404');
            exit();
        }

        if($this->session->userdata('uids'))
        {
            $me = $this->session->userdata('uids');
            //* Let check if user is not following before
            if(! $this->Account_model->checkIfIsNotFollowingBefore($me, $id))
            {
                //* Let create a new follower
                if($this->Account_model->createNewFollower($me, $id))
                {
                    //* Grab the user from infomation
                    $user_from_info = $this->Account_model->getUserFromInfo($me);

                    //* Get the user to infomations
                    $user_to_info = $this->Account_model->getUserFromInfo($id);

                    //* Let send notification email
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $template = array(
                        'username' => strtolower($user_from_info->user_username),
                        'firstname' => ucfirst(strtolower($user_from_info->user_firstname)),
                        'lastname' => ucfirst(strtolower($user_from_info->user_lastname)),
                        'avater' => base_url() . 'static/profile/users/' . $user_from_info->user_avater,
                        'sitename' => $site_info->set_site_name,
                        'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                        'main_url' => base_url(),
                        'user_to_name' => $user_to_info->user_username
                    );
                    
                    $messages = $this->parser->parse('mails/follow/send', $template, true);

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
                    $this->email->to($user_to_info->user_email);
                    $this->email->subject('Hi '.$user_to_info->user_username .' You have a new Follower');
                    $this->email->message($messages);
                    $this->email->send();

                    //* Refresh the current page
                    echo "
                    <script>window.location.href='". base_url($user) ."';</script>
                ";
                exit();
                }
            }
        }
    }

    //* Un Following user
    public function unfollow_user($id, $user)
    {
        if(! $this->input->is_ajax_request())
        {
            redirect('error_404');
            exit();
        }

        if($this->session->userdata('uids'))
        {
            $me = $this->session->userdata('uids');
            //* Let check if user is not following before
            if($this->Account_model->checkIfIsNotFollowingBefore($me, $id))
            {
                //* Let Remove followers
                if($this->Account_model->removeFollower($me, $id))
                {
                    //* Refresh the current page
                    echo "
                    <script>window.location.href='". base_url($user) ."';</script>
                ";
                exit();
                }
            }
        }
    }

    //* Sending message
    public function send_message($id)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if($uid = $this->session->userdata('uids'))
        {
            //* Check if user to is valid
            if ($u_to = $this->Account_model->checkValidUserTo($id)) {
                //* let validate the form
                $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean|strip_tags');
                
                if ($this->form_validation->run() == false) {
                    redirect('message/'.$u_to->user_username);
                } else {
                    
                    //* Let store message data in an array
                    $data = array(
                        'msg_from_id' => $uid,
                        'msg_to_id' => $id,
                        'msg_body' => $this->input->post('message')
                    );

                    //* Prepare to data base
                    if($this->Account_model->createNewMessage($data))
                    {
                        //* Send Notification email
                         //* Grab the user from infomation
                        $user_from_info = $this->Account_model->getUserFromInfo($uid);

                        //* Get the user to infomations
                        $user_to_info = $this->Account_model->getUserFromInfo($id);

                        //* Let send notification email
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $template = array(
                            'username' => strtolower($user_from_info->user_username),
                            'firstname' => ucfirst(strtolower($user_from_info->user_firstname)),
                            'lastname' => ucfirst(strtolower($user_from_info->user_lastname)),
                            'avater' => base_url() . 'static/profile/users/' . $user_from_info->user_avater,
                            'sitename' => $site_info->set_site_name,
                            'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                            'main_url' => base_url(),
                            'user_to_name' => $user_to_info->user_username
                        );
                        
                        $messages = $this->parser->parse('mails/msg/send', $template, true);

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
                        $this->email->to($user_to_info->user_email);
                        $this->email->subject($user_from_info->user_username .' Sent you a new Message');
                        $this->email->message($messages);
                        $this->email->send();

                        //* redirect the user
                        redirect('message/'.$u_to->user_username);
                    }
                    else
                    {
                        //* Still redirect the user
                    }
                }
            } else{
                redirect('/');
            }
            
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    /*
    ==================================================
    * Reading of datas
    ==================================================
    */

    /*
    ==================================================
    * Updating of datas
    ==================================================
    */

    //* User update basic infomation
    public function update_base_info()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
        }
        else
        {
            redirect('error_404');
            exit();
        }

        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        if (! empty($_POST['oldpass'])) 
        {
            //* Let update the user account along side with password set

            //* firstname
            $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide your %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Lastname
            $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide your %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Password
            $this->form_validation->set_rules('oldpass', 'Old Password', 'trim|required|xss_clean|strip_tags', array(
                'required'=> 'Please provide your %s',
                'min_length' => 'The %s must be at aleast 8 characters'
            ));

            //* Password
            $this->form_validation->set_rules('newpass', 'New Password', 'trim|required|min_length[8]|xss_clean|strip_tags', array(
                'required'=> 'Please provide your %s',
                'min_length' => 'The %s must be at aleast 8 characters'
            ));

            //* Confirm password
            $this->form_validation->set_rules('conpass', 'Confirm Password', 'trim|required|xss_clean|strip_tags|matches[newpass]', array(
                'required' => 'Confirm the user password',
                'matches' => 'User passwords does not match'
            ));

            //* Let check if validation is free
            
            if ($this->form_validation->run() == FALSE) {
                $errors = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
                );

                $this->session->set_flashdata($errors);
                redirect('settings');
            } else {
                
                //* Let check if old password matcheds
                $old_pass = $this->input->post('oldpass');

                if(! $this->Account_model->verifyOldpassword($old_pass, $uid))
                {
                    //* Show error messages
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">Old password is incorrect</div>');
                    redirect('settings');
                    exit();
                }

                //* Let encrypt new password
                $pass = $this->input->post('newpass');
                $password = password_hash($pass, PASSWORD_BCRYPT);

                $data = array(
                    'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                    'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                    'user_country' => $this->input->post('country'),
                    'user_region' => $this->input->post('region'),
                    'user_password' => $password
                );
            }
            
        }
        else
        {
            //* Let update the data without password changing
             //* firstname
             $this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide your %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            //* Lastname
            $this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[3]|max_length[20]|xss_clean|strip_tags', array(
                'required' => 'Please provide your %s',
                'min_length' => 'The %s must be at least 3 characters',
                'max_length' => 'The %s can not be more than 20 Characters'
            ));

            if ($this->form_validation->run() == FALSE) {
                $errros = array(
                    'error' => validation_errors('<div class="alert alert-danger" align="center">','</div>')
                );

                $this->session->set_flashdata($errors);
                redirect('settings');
            }
            else
            {
                $data = array(
                    'user_firstname' => ucfirst(strtolower($this->input->post('firstname'))),
                    'user_lastname' => ucfirst(strtolower($this->input->post('lastname'))),
                    'user_country' => $this->input->post('country'),
                    'user_region' => $this->input->post('region')
                );
            }
        }

        if($this->Account_model->userUpdateBasicProfile($data, $uid))
        {
            //* Show success message
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Profile is updated!</div>');
            redirect('settings');
        }
    }

    //* Updating user profile avater
    public function update_profile_avater()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
            $user = $this->Account_model->getUserData($uid);
        }
        else
        {
            redirect('error_404');
            exit();
        }

        //* validate the form request
        $this->form_validation->set_rules('about', 'profile info', 'trim|xss_clean|strip_tags');

        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors()
            );

            $this->session->set_flashdata($errors);
            redirect('error_404');
            exit();
        } else {
            
            //* Check for avater
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
                        redirect('settings');
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $avater = $file['file_name'];
                    }
                    
                }
                else
                {
                    $avater = $user->user_avater;
                }

                //* Check for banner
                if(! empty($_FILES['banner']['name']))
                {
                    //* Let process the form with profile avater
                    
                    $config['upload_path'] = './static/profile/users/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['encrypt_name'] = TRUE;
                    
                    $this->upload->initialize($config);
                    
                    if ( ! $this->upload->do_upload('banner')){
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));

                        //* Store the error message
                        $this->session->set_flashdata($errors);

                        //* Redirect the user
                        redirect('settings');
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $banner = $file['file_name'];
                    }
                    
                }
                else
                {
                    $banner = $user->user_banner;
                }

                //* Store the data
                $data = array(
                    'user_about' => $this->input->post('about'),
                    'user_avater' => $avater,
                    'user_banner' => $banner
                );

                if($this->Account_model->userUpdateBasicProfile($data, $uid))
                {
                    //* Show success message
                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Profile is updated!</div>');
                    redirect('settings');
                }
        }
        
        
    }

    public function update_profile_avater_digcool()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
            $user = $this->Account_model->getUserData($uid);
        }
        else
        {
            redirect('error_404');
            exit();
        }

        //* validate the form request
        $this->form_validation->set_rules('about', 'profile info', 'trim|xss_clean|strip_tags');

        
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors()
            );

            $this->session->set_flashdata($errors);
            redirect('error_404');
            exit();
        } else {
            
            //* Check for avater
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
                        redirect('settings');
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $avater = $file['file_name'];
                    }
                    
                }
                else
                {
                    $avater = $user->user_avater;
                }

                //* Check for banner
                if(! empty($_FILES['banner']['name']))
                {
                    //* Let process the form with profile avater
                    
                    $config['upload_path'] = './static/profile/users/';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['encrypt_name'] = TRUE;
                    
                    $this->upload->initialize($config);
                    
                    if ( ! $this->upload->do_upload('banner')){
                        $errors = array('error' => $this->upload->display_errors('<div class="alert alert-warning" align="center"><button class="close" data-dismiss="alert"></button>','</div>'));

                        //* Store the error message
                        $this->session->set_flashdata($errors);

                        //* Redirect the user
                        redirect('settings');
                    }
                    else{
                        //* Avater uploading is complete let store the data
                        $file = $this->upload->data();
                        $banner = $file['file_name'];
                    }
                    
                }
                else
                {
                    $banner = $user->user_banner;
                }

                //* Store the data
                $data = array(
                    'user_avater' => $avater,
                    'user_banner' => $banner
                );

                if($this->Account_model->userUpdateBasicProfile($data, $uid))
                {
                    //* Show success message
                    $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Profile is updated!</div>');
                    redirect('settings');
                }
        }
        
        
    }

    //* Updateing user profile avater
    public function update_social()
    {
        if($this->session->userdata('uids'))
        {
            $uid = $this->session->userdata('uids');
        }
        else
        {
            redirect('error_404');
            exit();
        }

        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }

        //* Let validate the form request

        //* Facebook
        $this->form_validation->set_rules('fb', 'fieldlabel', 'trim|xss_clean|strip_tags');

        //* Twitter
        $this->form_validation->set_rules('tw', 'fieldlabel', 'trim|xss_clean|strip_tags');

        //* Google
        $this->form_validation->set_rules('google', 'fieldlabel', 'trim|xss_clean|strip_tags');

        //* Linkedin
        $this->form_validation->set_rules('ln', 'fieldlabel', 'trim|xss_clean|strip_tags');

        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'error' => validation_errors()
            );

            $this->session->set_flashdata($errors);
            redirect('error_404');
            exit();
        }
        else
        {
            $data = array(
                'user_fb' => $this->input->post('fb'),
                'user_tw' => $this->input->post('tw'),
                'user_ln' => $this->input->post('ln'),
                'user_google' => $this->input->post('google')
            );

            if($this->Account_model->userUpdateBasicProfile($data, $uid))
            {
                //* Show success message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Profile is updated!</div>');
                redirect('settings');
            }
        }
        
    }

    //* Updating of item
    public function update_item($tid, $slug)
    {
        if(! isset($_POST['submit']))
        {
            redirect('error_404');
            exit();
        }
        
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
            redirect('edit-item/'.$tid.'/'.$slug);
        } else{
            if(! empty($_POST['item_main_file']))
            {
                $update = TRUE;
                //* Create item main file
                $item_file = $this->input->post('item_main_file');
                $this->Item_model->updateItemMainFile($item_file, $tid);
            }
            else
            {
                $update = FALSE;
            }

            if (! empty($_POST['item_thumbnail'])) {
                //* Create the thumbnail icon
                $thumbs = $this->input->post('item_thumbnail');
                $this->Item_model->updateItemThumbs($thumbs, $tid);
            }

            if(! empty($_POST['item_preview']))
            {
                 //* Crete the preview image
                $pre_img = $this->input->post('item_preview');
                $this->Item_model->updateItemPreviewImage($pre_img, $tid);
            }

            //* Check if item is to be a free files
            if(isset($_POST['free_item']))
            {
                $is_free = 1;
            }
            else
            {
                $is_free = 0;
            }

            //* Check if item is to be a flash sale
            if(isset($_POST['flash_sale']))
            {
                $is_flash = 1;
            }
            else
            {
                $is_flash = 0;
            }

            //* Store items information in a data
            $data = array(
                'item_cat_id' => $this->input->post('item_cat'),
                'item_description' => $this->input->post('item_description'),
                'item_version' => $this->input->post('item_version'),
                'item_live_demo' => $this->input->post('item_demo'),
                'item_regu_price' => $this->input->post('item_r_liecence'),
                'item_exte_price' => $this->input->post('item_e_liecence'),
                'item_tags' => $this->input->post('item_tags'),
                'item_to_free' => $is_free,
                'item_to_flash' => $is_flash
            );

            if($this->Item_model->userUpdateItem($data, $tid, $update))
            {
                //* Unset the current unique session
                $this->session->unset_userdata('upl_uniq');
                
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Update has been saved!</div>');
                redirect('edit-item/'.$tid.'/'.$slug);
            }
        }
    }

    /*
    ==================================================
    * Deleting of datas
    ==================================================
    */

    //* Deleting of item rating
    public function remove_rating()
    {
        if(! isset($_POST['r']))
        {
            redirect('error_404');
            exit();
        }

        $rate_id = $this->input->post('r');
        $uid = $this->session->userdata('uids');

        //* Check if user can delete rating
        if($this->Item_model->isUserCanDeleteRating($uid, $rate_id))
        {
            //* Proceed deleting the item
            if($this->Item_model->deleteRating($rate_id))
            {
                //* show info message
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Rating has been removed successffully!</div>');
                redirect('my-download');
            }
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    /*
    ==================================================
    * Downloading of datas
    ==================================================
    */

    //* User download is item
    public function user_download_item()
    {
        if(! isset($_POST['item']))
        {
            redirect('error_404');
            exit();
        }

        //* Delcare the item id form post
        $item_id = $this->input->post('item');

        //* Check if the user is a logged user
        if($this->session->userdata('uids'))
        {
            //* Grab the user id
            $user_id = $this->session->userdata('uids');

            //* Let determine if the user have right to download this item
            if($this->Download_model->isAbleToDownloadItem($item_id, $user_id))
            {
                //* Grante the perminssion to download
                if ($file = $this->Item_model->getMainFileForUser($item_id)) 
                {
                    //* detect if file is store in amazon
                    if ($do = $this->Item_model->isAwsStoreage($this->input->post('item'))) {

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

                        //* Grab the item informations
                        if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                            $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                            redirect('my-download');
                            exit();
                        }
                    } else{
                        //* Grab the item informations
                        if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                            $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                            redirect('my-download');
                            exit();
                        }
                    }
                }
                else
                {
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                    redirect('my-download');
                    exit();
                }
            }
            elseif($this->Item_model->checkIfUserIsAuthor($user_id, $item_id))
            {
                //* Grante the perminssion to download
                if ($file = $this->Item_model->getMainFileForUser($item_id))
                 {
                     //* detect if file is store in amazon
                    if ($do = $this->Item_model->isAwsStoreage($this->input->post('item'))) {

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

                        //* Grab the item informations
                        if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                            $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                            redirect('my-download');
                            exit();
                        }
                    } else{
                        //* Grab the item informations
                        if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                        }
                    }
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
            redirect('error_404');
            exit();
        }
    }

    //* User donwload free files
    public function get_free_file($id = NULL)
    {
        if($id)
        {
            if($this->session->userdata('uids'))
            {
                //* Check if file is on free item
                if($this->Item_model->checkIfFileIsFree($id))
                {
                    //* Grante the perminssion to download
                    if ($file = $this->Item_model->getMainFileForUser($id)) 
                    {
                         //* detect if file is store in amazon
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

                            //* Grab the item informations
                            if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                                redirect('my-download');
                                exit();
                            }
                        } else{
                            //* Grab the item informations
                            if ($item_info = $this->Item_model->getItemInfoBeforeDownloadForUser($item_id)) {

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
                                $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                                redirect('my-download');
                                exit();
                            }
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">This item is no Longer Available</div>');
                        redirect('my-download');
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
                redirect('error_404');
                exit();
            }
        }
        else
        {
            redirect('error_404');
        }
    }

}