<?php

namespace App\Http\Controllers\Blog\Admin;

//use App\Http\Controllers\Controller;
use App\Http\Controllers\Blog\Admin\AdminBaseController;

use Illuminate\Http\Request;

class MainController extends AdminBaseController
{
    public function index()
    {
        //dd('admin.index');
        return view('blog.admin.main.index');
    }
}
