<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function index(){
        return "ini halaman pengguna";
    }
    public function show() {
        return "ini halaman profile user";
    }
}