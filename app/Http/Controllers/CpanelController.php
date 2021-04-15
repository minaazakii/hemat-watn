<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CpanelController extends Controller
{
    public function index(){
      $categories = Category::all();
      return view('dashboard', [
          'categories'=>$categories
      ]);

    }
}
