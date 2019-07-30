<?php

namespace App\Http\Controllers\frontend;

use Facuz\Theme\Facades\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return Theme::view('page');
    }
}
