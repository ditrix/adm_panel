<?php

namespace App\Http\Controllers\Blog\Admin;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController as MainController;

abstract class AdminBaseController extends MainController
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('status');


    }


}
