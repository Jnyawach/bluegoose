<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nyawach\LaravelPesapal\Facades\Pesapal;


class PesapalController extends Controller
{
    //

    public function accesstoken(){

     $key= Pesapal::getAccessToken();
     return $key;
    }
}
