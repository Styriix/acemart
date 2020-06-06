<?php
defined('BASEPATH') OR exit('This page does not exist');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $this->load->library(array('paypal_express' => 'paypal'));

        $paypal = $this->paypal;

        // $sandbox = $paypal->paypalClientID;
        // $env = $paypal->paypalEnv;
        // $production = $paypal->paypalClientID;

        $sandbox = $paypal->public_api_key();
        $env = $paypal->paypal_env();
        $production = $paypal->public_api_key();

        $this->smarty->view('payment/checkout.tpl', compact(
            'sandbox',
            'env',
            'production'
        ));
    }

    public function process()
    {
        if($_GET['pay_method'] == 'paypal')
        {
            $redirectStr = '';
            if(!empty($_GET['paymentID']) && !empty($_GET['token']) && !empty($_GET['payerID']) && !empty($_GET['itd']) ){
                

                // Include and initialize paypal class
                $this->load->library(array('paypal_express' => 'paypal'));
                $paypal = $this->paypal;
                
                // Get payment info from URL
                $paymentID = $_GET['paymentID'];
                $token = $_GET['token'];
                $payerID = $_GET['payerID'];
                $productID = $_GET['itd'];
                
                // Validate transaction via PayPal API
                $paymentCheck = $paypal->validate($paymentID, $token, $payerID, $productID);
                
                // If the payment is valid and approved
                if($paymentCheck && $paymentCheck->state == 'approved'){

                    // Get the transaction data
                    $id = $paymentCheck->id;
                    $state = $paymentCheck->state;
                    $payerFirstName = $paymentCheck->payer->payer_info->first_name;
                    $payerLastName = $paymentCheck->payer->payer_info->last_name;
                    $payerName = $payerFirstName.' '.$payerLastName;
                    $payerEmail = $paymentCheck->payer->payer_info->email;
                    $payerID = $paymentCheck->payer->payer_info->payer_id;
                    $payerCountryCode = $paymentCheck->payer->payer_info->country_code;
                    $paidAmount = $paymentCheck->transactions[0]->amount->details->subtotal;
                    $currency = $paymentCheck->transactions[0]->amount->currency;
                    
                    
                    //$productData = $db->getRows('products', $conditions);
                    $productData = $this->Item_model->getItemPaidFor($productID);

                    if($is_flash = $this->Item_model->checkIfItemIsFalsh($productID)) {
                        $item_price_get = $this->Item_model->getFlashItemPrice($productID);
                    } else {
                        $item_price_get = $productData->item_regu_price;
                    }
                    
                    // If payment price is valid
                    if($item_price_get >= $paidAmount){

                        //* Site make charges on item
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $site_charge = $site_info->set_item_charge;

                        //* Let do charges Calculations
                        $item_price = $item_price_get;

                        $cal = ($site_charge / 100) * $item_price;

                        $earn = number_format($item_price - $cal, 2); //* What the author will earn

                        //* Let creadit the author balance
                        $author_id = $productData->item_user_id;

                        //* Catch the author current balance
                        $author_info = $this->Account_model->catchAuthorInfoInPayment($author_id);

                        $a_current_bal = $author_info->bal_value; //* Get the authour current balance

                        // * The to auhor balance
                        $new_a_balance = number_format($a_current_bal + $earn, 2);

                        //* Update the author account
                        $this->Account_model->updateAuthorAccountBalance($author_id, $new_a_balance);

                        //* Let check if purchase are made via refers
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $ref_stat = $site_info->set_affi_status;
                        $ref_rate = $site_info->set_affi_rate;

                        if ($ref_stat == 1) {

                            if ($this->session->userdata('ref')) {
                                //* Let do benefit charges
                                $ref = $this->session->userdata('ref');

                                $ref_cal = ($ref_rate / 100) * $cal;

                                $ref_earn = number_format($ref_cal, 2); //* What the benefical will earn

                                //* Let check if refer exist in our database
                                if ($ref_id = $this->Account_model->checkIfRefExist($ref)) {
                                    //* Let credit his balance
                                    $ref_info = $this->Account_model->catchAuthorInfoInPayment($ref_id);

                                    $a_current_bal = $ref_info->bal_value; //* Get the authour current balance

                                    // * The to auhor balance
                                    $new_a_balance = number_format($a_current_bal + $ref_earn, 2);

                                    //* Update the author account
                                    $this->Account_model->updateAuthorAccountBalance($ref_id, $new_a_balance);
                                }
                            }
                        }

                        
                        // Insert transaction data in the database
                        $data = array(
                            'pp_product_id' => $productID,
                            'pp_txn_id' => $id,
                            'pp_payment_gross' => $paidAmount,
                            'pp_currency_code' => $currency,
                            'pp_payer_id' => $payerID,
                            'pp_payer_name' => $payerName,
                            'pp_payer_email' => $payerEmail,
                            'pp_payer_country' => $payerCountryCode,
                            'pp_payment_status' => $state,
                            'pp_user_id' => $this->session->userdata('uids')
                        );

                        $this->Payment_model->createPaypalTransaction($data);
                        
                        // Add insert id to the URL
                        $redirectStr = '?id='.$productID;

                        //* Give item to user here
                        $uid = $this->session->userdata('uids');

                        if($dl_id = $this->Download_model->createNewDownload($uid, $productID))
                        {

                            //* Let update the author sell badge stat
                            $this->Account_model->updateAuthorSellBadgeStat($author_id, $productID, $item_price_get, $dl_id);

                            //* Let update sale statement

                            //* Generate purchase code
                            $n = 20;
                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                            $randomString = '';
                            for ($i = 0; $i < $n; $i++) { 
                                $index = rand(0, strlen($characters) - 1); 
                                $randomString .= $uid.$productID.$characters[$index]; 
                            }

                            //* Let send to data base
                            $this->Account_model->createNewSaleStatement($uid, $author_id, $earn, $productID, $randomString);

                            /*
                            ==============================================
                            * Let send transaction email to the user
                            ==============================================
                            */

                            //* Get the user informations
                            $u_info = $this->Account_model->getTheUserInfo($uid);

                            //* Let send transactional email to the user
                            $site_info = $this->Settings_model->getApllicationInfo();
                            $template = array(
                                'username' => $u_info->user_username,
                                'email' => $u_info->user_email,
                                'firstname' => $u_info->user_firstname,
                                'lastname' => $u_info->user_lastname,
                                'sitename' => $site_info->set_site_name,
                                'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                                'main_url' => base_url(),
                                'item_name' => $productData->item_name,
                                'author_user' => $author_info->user_username
                            );
                            
                            $send_u_tnx_email = $this->Email_model->getEmailTempsToSend($id = 3);
                            $template['send_msg'] = $send_u_tnx_email;
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
                            $this->email->subject('New Transaction');
                            $this->email->message($messages);
                            $this->email->send();


                            //* Show success message
                            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Success! Thank You For Your Purchase</div>');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('error', '<div class="alert alert-warning" align="center">Sorry! Your purchase could not be complete due to fraud payment</div>');
                    }
                }
                else
                {
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" align="center">Error! Your purchase is unsuccessful</div>');
                }
                
                // Redirect to payment status page
                redirect('my-download');;
            }else{
                // Redirect to the home page
                redirect('error_404');
            }
        }
    }

    //* Stripe payment processing
    public function stripe_process()
    {
        $stripe = $this->Payment_model->getStripeGateway();
        $secret_key = $stripe->sg_secret_key;

        $response = array();

        // Check whether stripe token is not empty
        if(!empty($_POST['stripeToken'])){
            
            // Get token, card and item info
            $token  = $_POST['stripeToken'];
            $email  = $_POST['stripeEmail'];
            $itemPrice = $_POST['itemPrice'];
            $currency = $_POST['currency'];
            $itemName = $_POST['itemName'];
            $item_id = $_POST['item_id'];
            
            // Include Stripe PHP library
            // require_once('stripe-php/init.php');
            
            // Set api key
            \Stripe\Stripe::setApiKey($secret_key);
            
            // Add customer to stripe
            $customer = \Stripe\Customer::create(array(
                'email' => $email,
                'source'  => $token
            ));
            
            // Charge a credit or a debit card
            $charge = \Stripe\Charge::create(array(
                'customer' => $customer->id,
                'amount'   => $itemPrice,
                'currency' => $currency,
                'description' => $itemName,
            ));
            
            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            // Check whether the charge is successful
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
                
                // Order details 
                $amount = $chargeJson['amount'];
                $currency = $chargeJson['currency'];
                $txnID = $chargeJson['balance_transaction'];
                $status = $chargeJson['status'];
                $orderID = $chargeJson['id'];
                $payerName = $chargeJson['source']['name'];
                
                //* Stroe transaction details
                $data = array(
                    'sp_amount' => $amount,
                    'sp_item_id' => $item_id,
                    'sp_user_id' => $this->session->userdata('uids'),
                    'sp_currency' => $currency,
                    'sp_txn_id' => $txnID,
                    'sp_status' => $status,
                    'sp_order_id' =>$orderID,
                    'sp_payer_name' => $payerName,
                    'sp_payer_email' => $email
                ); 

                if($last_id = $this->Payment_model->createNewStripeTransaction($data))
                {
                    if($last_id && $status == 'succeeded')
                    {
                        $productData = $this->Item_model->getItemPaidFor($item_id);

                        if($is_flash = $this->Item_model->checkIfItemIsFalsh($item_id)) {
                            $item_price_get = $this->Item_model->getFlashItemPrice($item_id);
                        } else {
                            $item_price_get = $productData->item_regu_price;
                        }

                         //* Site make charges on item
                         $site_info = $this->Settings_model->getApllicationInfo();
                         $site_charge = $site_info->set_item_charge;
 
                         //* Let do charges Calculations
                         $item_price = $item_price_get;
 
                         $cal = ($site_charge / 100) * $item_price;
 
                         $earn = number_format($item_price - $cal, 2); //* What the author will earn
 
                         //* Let creadit the author balance
                         $author_id = $productData->item_user_id;
 
                         //* Catch the author current balance
                         $author_info = $this->Account_model->catchAuthorInfoInPayment($author_id);
 
                         $a_current_bal = $author_info->bal_value; //* Get the authour current balance
 
                         // * Then add to auhor balance
                         $new_a_balance = number_format($a_current_bal + $earn, 2);
 
                         //* Update the author account
                         $this->Account_model->updateAuthorAccountBalance($author_id, $new_a_balance);


                        //* Let us give item to the user
                        if($dl_id = $this->Download_model->createNewDownload($this->session->userdata('uids'), $item_id))
                        {
                            //* Let update the author sell badge stat
                            $this->Account_model->updateAuthorSellBadgeStat($author_id, $item_id, $item_price_get, $dl_id);
                        }

                        $uid = $this->session->userdata('uids');
                        $productID = $item_id;

                        //* Let update sale statement

                        //* Generate purchase code
                        $n = 20;
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                        $randomString = '';
                        for ($i = 0; $i < $n; $i++) { 
                            $index = rand(0, strlen($characters) - 1); 
                            $randomString .= $uid.$productID.$characters[$index]; 
                        }

                        //* Let send to data base
                        $this->Account_model->createNewSaleStatement($uid, $author_id, $earn, $productID, $randomString);


                        //* Let check if purchase are made via refers
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $ref_stat = $site_info->set_affi_status;
                        $ref_rate = $site_info->set_affi_rate;

                        if ($ref_stat == 1) {

                            if ($this->session->userdata('ref')) {
                                //* Let do benefit charges
                                $ref = $this->session->userdata('ref');

                                $ref_cal = ($ref_rate / 100) * $cal;

                                $ref_earn = number_format($ref_cal, 2); //* What the benefical will earn

                                //* Let check if refer exist in our database
                                if ($ref_id = $this->Account_model->checkIfRefExist($ref)) {
                                    //* Let credit his balance
                                    $ref_info = $this->Account_model->catchAuthorInfoInPayment($ref_id);

                                    $a_current_bal = $ref_info->bal_value; //* Get the authour current balance

                                    // * The to auhor balance
                                    $new_a_balance = number_format($a_current_bal + $ref_earn, 2);

                                    //* Update the author account
                                    $this->Account_model->updateAuthorAccountBalance($ref_id, $new_a_balance);
                                }
                            }
                        }

                        /*
                        ==============================================
                        * Let send transaction email to the user
                        ==============================================
                        */

                        //* Get the user informations
                        $u_info = $this->Account_model->getTheUserInfo($this->session->userdata('uids'));

                        //* Let send transactional email to the user
                        $site_info = $this->Settings_model->getApllicationInfo();
                        $template = array(
                            'username' => $u_info->user_username,
                            'email' => $u_info->user_email,
                            'firstname' => $u_info->user_firstname,
                            'lastname' => $u_info->user_lastname,
                            'sitename' => $site_info->set_site_name,
                            'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                            'main_url' => base_url(),
                            'item_name' => $productData->item_name,
                            'author_user' => $author_info->user_username
                        );
                        
                        $send_u_tnx_email = $this->Email_model->getEmailTempsToSend($id = 3);
                        $template['send_msg'] = $send_u_tnx_email;
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
                        $this->email->subject('New Transaction');
                        $this->email->message($messages);
                        $this->email->send();

                        $response = array(
                            'status' => 1,
                            'msg' => 'Your payment was successful.',
                            'txnData' => $chargeJson
                        );
                    }
                    else
                    {
                        $response = array(
                            'status' => 0,
                            'msg' => 'Transaction has been failed.'
                        );
                    }
                }

            }else{
                $response = array(
                    'status' => 0,
                    'msg' => 'Transaction has been failed.'
                );
            }
        }else{
            $response = array(
                'status' => 0,
                'msg' => 'Form submission error...'
            );
        }

        // Return response
        echo json_encode($response);
    }

    //* Bitcoin payment gateway
    public function bitcoin_gateway()
    {
        $btc = $this->Payment_model->getBitcoinGateway();

        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }
        require_once( "lib/cryptobox.class.php" );

        if(isset($_POST['item_id'])) {
            $item_id = $this->input->post('item_id');
            $this->session->set_userdata('itd', $item_id);
        }
        else
        {
            $item_id = $this->session->userdata('itd');
        }

        if($item_id == "")
        {
            redirect('error_404');
        }

        //* get item price
        $item_info = $this->Item_model->getItemPayViaBtcPrice($item_id);

        if($is_flash = $this->Item_model->checkIfItemIsFalsh($item_id)) {
            $btc_price = $this->Item_model->getFlashItemPrice($item_id);
        } else {
            $btc_price = $item_info->item_regu_price;
        }

        $item_name = $item_info->item_name;

        $us_id = $this->session->userdata('uids');
        if(! $this->session->userdata('order_id'))
        {
            
            $setOrder = array(
                'order_id' => 'btcOrder'.$us_id . time() . uniqid()
            );
            
            $this->session->set_userdata($setOrder);

            //* Let create new order infomation
            $this->Payment_model->setNewBitcoinOrder($item_id, $this->session->userdata('order_id'), $us_id);
            
        }

        $orderID = $this->session->userdata('order_id');

        /**** CONFIGURATION VARIABLES ****/ 
	
        $userID 		= $this->session->userdata('uids');				// place your registered userID or md5(userID) here (user1, user7, uo43DC, etc).
        
        $userFormat		= "COOKIE";			// save userID in cookies (or you can use IPADDRESS, SESSION)
        $period			= "NOEXPIRY";		// one time payment, not expiry
        $def_language	= "en";				// default Payment Box Language
        $public_key		= $btc->btc_public_key; // from gourl.io
        $private_key	= $btc->btc_private_key;// from gourl.io

        /** PAYMENT BOX **/
        $options = array(
            "public_key"  => $public_key, 	// your public key from gourl.io
            "private_key" => $private_key, 	// your private key from gourl.io
            "webdev_key"  => "", 		// optional, gourl affiliate key
            "orderID"     => $orderID, 		// order id or product name
            "userID"      => $userID, 		// unique identifier for every user
            "userFormat"  => $userFormat, 	// save userID in COOKIE, IPADDRESS or SESSION
            "amount"   	  => 0,				// product price in coins OR in USD below
            "amountUSD"   => $btc_price,	// we use product price in USD
            "period"      => $period, 		// payment valid period
            "language"	  => $def_language  // text on EN - english, FR - french, etc
        );

        // Initialise Payment Class
        $box = new Cryptobox ($options);

        // coin name
        $coinName = $box->coin_name();

        // Successful Cryptocoin Payment received
        if ($box->is_paid()) 
        {
            if (!$box->is_confirmed()) {
                $message =  "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Awaiting transaction/payment confirmation. Please copy this link Address or Stay on this page and Refresh When you get a Notification Your Payment has been Confirm";
            }											
            else 
            { // payment confirmed (6+ confirmations)

                // one time action
                if (!$box->is_processed())
                {
                    // One time action after payment has been made/confirmed
                    // !!For update db records, please use function cryptobox_new_payment()!!
                    
                    $message = "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Payment Confirmed. Cloase this tab and vist Site and Go to My Download to see your item Waiting for Download."; 


                    $productData = $this->Item_model->getItemPaidFor($item_id);
                    if($is_flash = $this->Item_model->checkIfItemIsFalsh($item_id)) {
                        $item_price = $this->Item_model->getFlashItemPrice($item_id);
                    } else {
                        $item_price = $productData->item_regu_price;
                    }

                    //* Site make charges on item
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $site_charge = $site_info->set_item_charge;

                    //* Let do charges Calculations

                    $cal = ($site_charge / 100) * $item_price;

                    $earn = number_format($item_price - $cal, 2); //* What the author will earn

                    //* Let creadit the author balance
                    $author_id = $productData->item_user_id;

                    //* Catch the author current balance
                    $author_info = $this->Account_model->catchAuthorInfoInPayment($author_id);

                    $a_current_bal = $author_info->bal_value; //* Get the authour current balance

                    // * Then add to auhor balance
                    $new_a_balance = number_format($a_current_bal + $earn, 2);

                    //* Update the author account
                    $this->Account_model->updateAuthorAccountBalance($author_id, $new_a_balance);


                    //* Let us give item to the user
                    if($dl_id = $this->Download_model->createNewDownload($this->session->userdata('uids'), $item_id))
                    {
                        //* Let update the author sell badge stat
                        $this->Account_model->updateAuthorSellBadgeStat($author_id, $productID, $item_price, $dl_id);
                    }

                    $uid = $this->session->userdata('uids');
                    $productID = $item_id;

                    //* Let update sale statement

                    //* Generate purchase code
                    $n = 20;
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                    $randomString = '';
                    for ($i = 0; $i < $n; $i++) { 
                        $index = rand(0, strlen($characters) - 1); 
                        $randomString .= $uid.$productID.$characters[$index]; 
                    }

                    //* Let send to data base
                    $this->Account_model->createNewSaleStatement($uid, $author_id, $earn, $productID, $randomString);

                    //* Let check if purchase are made via refers
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $ref_stat = $site_info->set_affi_status;
                    $ref_rate = $site_info->set_affi_rate;

                    if ($ref_stat == 1) {

                        if ($this->session->userdata('ref')) {
                            //* Let do benefit charges
                            $ref = $this->session->userdata('ref');

                            $ref_cal = ($ref_rate / 100) * $cal;

                            $ref_earn = number_format($ref_cal, 2); //* What the benefical will earn

                            //* Let check if refer exist in our database
                            if ($ref_id = $this->Account_model->checkIfRefExist($ref)) {
                                //* Let credit his balance
                                $ref_info = $this->Account_model->catchAuthorInfoInPayment($ref_id);

                                $a_current_bal = $ref_info->bal_value; //* Get the authour current balance

                                // * The to auhor balance
                                $new_a_balance = number_format($a_current_bal + $ref_earn, 2);

                                //* Update the author account
                                $this->Account_model->updateAuthorAccountBalance($ref_id, $new_a_balance);
                            }
                        }
                    }

                    /*
                    ==============================================
                    * Let send transaction email to the user
                    ==============================================
                    */

                    //* Get the user informations
                    $u_info = $this->Account_model->getTheUserInfo($this->session->userdata('uids'));

                    //* Let send transactional email to the user
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $template = array(
                        'username' => $u_info->user_username,
                        'email' => $u_info->user_email,
                        'firstname' => $u_info->user_firstname,
                        'lastname' => $u_info->user_lastname,
                        'sitename' => $site_info->set_site_name,
                        'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                        'main_url' => base_url(),
                        'item_name' => $productData->item_name,
                        'author_user' => $author_info->user_username
                    );
                    
                    $send_u_tnx_email = $this->Email_model->getEmailTempsToSend($id = 3);
                    $template['send_msg'] = $send_u_tnx_email;
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
                    $this->email->subject('New Transaction');
                    $this->email->message($messages);
                    $this->email->send();
                    
                    // Set Payment Status to Processed
                    $box->set_status_processed();  

                    redirect('my-download');
                }
                else $message = "Thank you for order (order #".$orderID.", payment #".$box->payment_id()."). Payment Confirmed."; // General message
            }
        }
        else $message = "This invoice has not been paid yet";
        
        
        // Optional - Language selection list for payment box (html code)
        $languages_list = display_language_box($def_language);

        $this->load->view('payment/bitcoin', compact(
            'coinName',
            'box',
            'languages_list',
            'message',
            'item_name'
        ));
    }

    //* Purchasing via creait balance
    public function buy_with_credit()
    {
        if(! $this->session->userdata('uids'))
        {
            redirect('error_404');
            exit();
        }

        if(isset($_POST['item_id']))
        {
            //* Let the user continue to checkout

            $item_id = $this->input->post('item_id');
            $uid = $this->session->userdata('uids');

            //* Let grab the item infomations
            $item_info = $this->Item_model->getItemPayViaBtcPrice($item_id);

            if($is_flash = $this->Item_model->checkIfItemIsFalsh($item_id)) {
                $item_price = $this->Item_model->getFlashItemPrice($item_id);
            } else {
                $item_price = $item_info->item_regu_price;
            }

            //* Let grab the user current balance
            $ubal = $this->Account_model->getTheAvaliableUserBalance($uid);

            //* Let detect if balance enough to buy
            if($ubal >= $item_price)
            {
                //* Continue purchasing
                $i_price = $item_price;
                $u_bal = $ubal;

                //* Let charge the user
                $left_bal = $u_bal - $i_price;

                $left_bal = number_format($left_bal, 2);

                //* Let update the user balance
                if($this->Account_model->updateUserCreditBal($uid, $left_bal))
                {
                    $productData = $this->Item_model->getItemPaidFor($item_id);

                    if($is_flash = $this->Item_model->checkIfItemIsFalsh($item_id)) {
                        $item_price = $this->Item_model->getFlashItemPrice($item_id);
                    } else {
                        //* Let do charges Calculations
                        $item_price = $productData->item_regu_price;
                    }

                    //* Site make charges on item
                    $site_info = $this->Settings_model->getApllicationInfo();
                    $site_charge = $site_info->set_item_charge;


                    $cal = ($site_charge / 100) * $item_price;

                    $earn = number_format($item_price - $cal, 2); //* What the author will earn

                    //* Let creadit the author balance
                    $author_id = $productData->item_user_id;

                    //* Catch the author current balance
                    $author_info = $this->Account_model->catchAuthorInfoInPayment($author_id);

                    $a_current_bal = $author_info->bal_value; //* Get the authour current balance

                    // * Then add to auhor balance
                    $new_a_balance = number_format($a_current_bal + $earn, 2);

                    //* Update the author account
                    $this->Account_model->updateAuthorAccountBalance($author_id, $new_a_balance);


                //* Let us give item to the user
                if($dl_id = $this->Download_model->createNewDownload($this->session->userdata('uids'), $item_id))
                {
                    $this->Account_model->updateAuthorSellBadgeStat($author_id, $item_id, $item_price, $dl_id);
                }

                $uid = $this->session->userdata('uids');
                $productID = $item_id;

                //* Let update sale statement

                //* Generate purchase code
                $n = 20;
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                $randomString = '';
                for ($i = 0; $i < $n; $i++) { 
                    $index = rand(0, strlen($characters) - 1); 
                    $randomString .= $uid.$productID.$characters[$index]; 
                }

                //* Let send to data base
                $this->Account_model->createNewSaleStatement($uid, $author_id, $earn, $productID, $randomString);

                //* Let check if purchase are made via refers
                $site_info = $this->Settings_model->getApllicationInfo();
                $ref_stat = $site_info->set_affi_status;
                $ref_rate = $site_info->set_affi_rate;

                if ($ref_stat == 1) {

                    if ($this->session->userdata('ref')) {
                        //* Let do benefit charges
                        $ref = $this->session->userdata('ref');

                        $ref_cal = ($ref_rate / 100) * $cal;

                        $ref_earn = number_format($ref_cal, 2); //* What the benefical will earn

                        //* Let check if refer exist in our database
                        if ($ref_id = $this->Account_model->checkIfRefExist($ref)) {
                            //* Let credit his balance
                            $ref_info = $this->Account_model->catchAuthorInfoInPayment($ref_id);

                            $a_current_bal = $ref_info->bal_value; //* Get the authour current balance

                            // * The to auhor balance
                            $new_a_balance = number_format($a_current_bal + $ref_earn, 2);

                            //* Update the author account
                            $this->Account_model->updateAuthorAccountBalance($ref_id, $new_a_balance);
                        }
                    }
                }

                /*
                ==============================================
                * Let send transaction email to the user
                ==============================================
                */

                //* Get the user informations
                $u_info = $this->Account_model->getTheUserInfo($this->session->userdata('uids'));

                //* Let send transactional email to the user
                $site_info = $this->Settings_model->getApllicationInfo();
                $template = array(
                    'username' => $u_info->user_username,
                    'email' => $u_info->user_email,
                    'firstname' => $u_info->user_firstname,
                    'lastname' => $u_info->user_lastname,
                    'sitename' => $site_info->set_site_name,
                    'sitelogo' => base_url() . 'static/website/site-logo/' . $site_info->set_site_logo,
                    'main_url' => base_url(),
                    'item_name' => $productData->item_name,
                    'author_user' => $author_info->user_username
                );
                
                $send_u_tnx_email = $this->Email_model->getEmailTempsToSend($id = 3);
                $template['send_msg'] = $send_u_tnx_email;
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
                $this->email->subject('New Transaction');
                $this->email->message($messages);
                $this->email->send();
                
                $this->session->set_flashdata('error', '<div class="alert alert-success" align="center">Thank you for your purchase</div>');
                redirect('my-download');
                
                }
            }
            else
            {
                echo "<script> alert('You do not have enough credit to complete purchase');</script>";
                echo "<script>window.history.back();</script>";
            }
        }
        else
        {
            redirect('error_404');
            exit();
        }
    }

    


}

