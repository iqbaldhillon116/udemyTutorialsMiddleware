<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index(){
        echo "you are viewing this page because you are an admin";
    }
}
