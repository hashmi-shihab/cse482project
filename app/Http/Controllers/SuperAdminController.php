<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
session::start();
class SuperAdminController extends Controller
{
    public function logout(){
        Session::flush();
        return Redirect::to('/admin');
    }
}
