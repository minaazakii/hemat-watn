<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CpanelController extends Controller
{
    public function index(){
      return view('Cpanel.index');
    
    }
}
