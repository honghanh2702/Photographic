<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('TrangChu',[
            'title'=>'HappyImage'
        ]);
    }
    public function users(){
        return view('BangTinCaNhan');
    }
}
