<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        return View('home.index');
    }

    public function portifolio(){
        return View('home.portfolio-details');
    }

    public function portifolio2(){
        return View('home.portfolio-details2');
    }

    public function admin(){
        return View('admin.index');
    }

}
