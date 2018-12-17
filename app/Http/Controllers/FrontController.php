<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('frontview.home.homeContent');
    }
    public function brandedpowerbanks(){
        return view('frontview.home.brandedContent');
    }
    public function pricerange(){
        return view('frontview.home.priceContent');
    }
    public function pricerange1(){
        return view('frontview.home.priceContent1');
    }
    public function pricerange2(){
        return view('frontview.home.priceContent2');
    }
    public function pricerange3(){
        return view('frontview.home.priceContent3');
    }
    public function bestContent(){
        return view('frontview.home.bestContent');
    }
    public function colorContent(){
        return view('frontview.home.colorContent');
    }
    public function colorContent1(){
        return view('frontview.home.colorContent1');
    }
    public function colorContent2(){
        return view('frontview.home.colorContent2');
    }
    public function colorContent3(){
        return view('frontview.home.colorContent3');
    }
    public function colorContent4(){
        return view('frontview.home.colorContent4');
    }
    public function offerContent(){
        return view('frontview.home.offerContent');
    }
    public function aboutContent(){
        return view('frontview.home.aboutContent');
    }
    public function serviceContent(){
        return view('frontview.home.serviceContent');
    }
    public function privacyContent(){
        return view('frontview.home.privacyContent');
    }
    public function logContent(){
        return view('frontview.home.logContent');
    }
}
