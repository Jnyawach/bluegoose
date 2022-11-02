<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nyawach\LaravelPesapal\Facades\Pesapal;


class PesapalController extends Controller
{
    //

    public function accessToken(){

     $key= Pesapal::getAccessToken();
     return $key;
    }

    public function getRegisteredIpn(){
        $ipn=Pesapal::getRegisteredIpn();
        return $ipn;
    }

    public function registerIpn(){
        $postData=array();
        $postData["url"]='http://127.0.0.1:8000/getNotification/'.config('pesapal.pesapal_guard');
        $postData["ipn_notification_type"]='POST';

        $register=Pesapal::registerIpn($postData);

        return $register;
    }

    public function submitOrderRequest(){
        $postData = array();
        $postData["language"] = "EN";
        $postData["currency"] = "KES";
        $postData["amount"] = number_format(1,2); //must be float value and required
        $postData["id"] = 234;
        $postData["description"] = "Payment for order number AFED67";
        $postData["billing_address"]["phone_number"] = "0717109280";//required if email unavailable
        $postData["billing_address"]["email_address"] = "john.doe@example.com"; //client email address
        $postData["billing_address"]["country_code"] = "KE";//2 characters long country code in [ISO 3166-1]
        $postData["billing_address"]["first_name"] = "John";
        $postData["billing_address"]["middle_name"] = "Doe";
        $postData["billing_address"]["last_name"] = "Musa";
        $postData["billing_address"]["line_1"] = "";//nullable
        $postData["billing_address"]["line_2"] = "";
        $postData["billing_address"]["city"] = "Nairobi";//nullable
        $postData["billing_address"]["state"] = "Kenya";//nullable
        $postData["billing_address"]["postal_code"] = "";//nullable
        $postData["billing_address"]["zip_code"] = "";//nullable
        $postData["callback_url"] = "https://www.myapplication.com/response-page/".config('pesapal.pesapal_guard');
        $postData["notification_id"] = config('pesapal.pesapal_ipn_id');
        $postData["terms_and_conditions_id"] = "";
        //return $postData;
        $order=Pesapal::getMerchertOrderURL($postData);
        return $order;
    }

    public function orderStatus(){
        $orderTrackingId='483decd1-cf2a-4ce4-8475-df6c07da6a51';

        $orderStatus=Pesapal::getTransactionStatus($orderTrackingId);
        return $orderStatus;
    }
}
