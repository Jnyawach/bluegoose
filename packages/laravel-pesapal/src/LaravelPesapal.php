<?php

namespace Nyawach\LaravelPesapal;

class LaravelPesapal
{
 /*
  * The common endpoint for Pesapal v3
  */

    private $base_url;

    //consumer key

    public $consumer_key;
    public  $consumer_secret;
    public $pesapal_guard;
    public $pesapal_ipn_id;
    public $accessToken;

    /**
     * Construct method
     *
     * Initializes the class with an array of API values.
     *
     * @param array $config
     * @return void
     * @throws exception if the values array is not valid
     */

    public function __construct(){
       if (config('pesapal.pesapal_env')=='sandbox'){
           $this->base_url='https://cybqa.pesapal.com/pesapalv3';
       }else{
           $this->base_url='https://pay.pesapal.com/v3';
       }

       /*
        * Get test keys from https://developer.pesapal.com/ and production
        * keys from pesapal business account
        */
       $this->consumer_key=config('pesapal.consumer_key');
       $this->consumer_secret=config('pesapal.consumer_secret');
       $this->pesapal_guard=config('pesapal.pesapal_guard');
       /*
        * You will get ipn_id after registering IPN urls
        * Live: https://pay.pesapal.com/iframe/PesapalIframe3/IpnRegistration
        * sandbox: https://cybqa.pesapal.com/PesapalIframe/PesapalIframe3/IpnRegistration
        */
       $this->pesapal_ipn_id=config('pesapal.pesapal_ipn_id');

       $this->accessToken=$this->getAccessToken();

    }


    //Get the pesapal acess token. The token is valid for 5minutes
    public function getAccessToken(){

        $headers = array();
        $headers['accept'] = 'text/plain';
        $headers['content-type'] = 'application/json';

        $postData = array();
        $postData['consumer_key'] = $this->consumer_key;
        $postData['consumer_secret'] = $this->consumer_secret;
        $endPoint = $this->base_url.'/api/Auth/RequestToken';
        $response = $this->curlRequest($endPoint, $headers, $postData);

        return $response->token;
    }

    //curl request
    public function curlRequest($url, $headers = null, $postData=null){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT,30);
        if(defined('CURL_PROXY_REQUIRED')) {
            if (CURL_PROXY_REQUIRED == 'True'){
                $proxy_tunnel_flag = (
                    defined('CURL_PROXY_TUNNEL_FLAG')
                    && strtoupper(CURL_PROXY_TUNNEL_FLAG) == 'FALSE'
                ) ? false : true;
                curl_setopt ($ch, CURLOPT_HTTPPROXYTUNNEL, $proxy_tunnel_flag);
                curl_setopt ($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
                curl_setopt ($ch, CURLOPT_PROXY, CURL_PROXY_SERVER_DETAILS);
            }
        }

        $headerArray = array();
        if(isset($headers['accept']) && $headers['accept']) $headerArray[] = "Accept: ".$headers['accept'];
        if(isset($headers['content-type']) && $headers['content-type']) $headerArray[] = "Content-Type: ".$headers['content-type'];
        if(isset($headers['authorization']) && $headers['authorization']) $headerArray[] = "Authorization: ".$headers['authorization'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);

        if($postData && count($postData)) {
            $postDataJson = json_encode($postData);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postDataJson);
        }

        $response = curl_exec($ch);

        $response = json_decode($response);
        curl_close($ch);

        return $response;
    }
}
