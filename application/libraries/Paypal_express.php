<?php
defined('BASEPATH') OR exit('This page does not exist');

class Paypal_express
{

    public function __construct()
    {
        
        $this->CI =& get_instance();
        $this->CI->load->model(array(
            'Payment_model'
        ));
    }
    // public $paypalEnv       = 'sandbox'; // Or 'production'
    public $paypalURL       = 'https://api.sandbox.paypal.com/v1/';
    // public $paypalClientID  = 'AdFt4U2AsUjccmsEM_aYNGTQcIqWB1oMg2qiIVL43crxBk1HKR9NuJbp_vnlIscY7lquN-0kwAZRsUHB';
    // private $paypalSecret   = 'EJgI-gTo1kWuZu-1L1vAcyYPaJ0TSKzu37hm7pxSdk7DDuMhk_7V9PMSknxlYw_D1LASsC20IJxGDBt9';

    public function public_api_key()
    {
        $paypal = $this->CI->Payment_model->getPaypalGateway();
        return $paypal->pg_api_public_key;
    }

    public function paypal_env()
    {
        $paypal = $this->CI->Payment_model->getPaypalGateway();
        
        if($paypal->pg_mode == 1)
        {
            $env = 'production';
        }
        else{
            $env = 'sandbox';
        }

        return $env;
    }

    private function paypal_secret_key()
    {
        $paypal = $this->CI->Payment_model->getPaypalGateway();
        return $paypal->pg_api_secret_key;
    }
    
    public function validate($paymentID, $paymentToken, $payerID, $productID)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->paypalURL.'oauth2/token');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $this->public_api_key().":".$this->paypal_secret_key());
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $response = curl_exec($ch);
        curl_close($ch);
        
        if (empty($response)) {
            return false;
        } else {
            $jsonData = json_decode($response);
            $curl = curl_init($this->paypalURL.'payments/payment/'.$paymentID);
            curl_setopt($curl, CURLOPT_POST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $jsonData->access_token,
                'Accept: application/json',
                'Content-Type: application/xml'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            
            // Transaction data
            $result = json_decode($response);
            
            return $result;
        }
    }
}