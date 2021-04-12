<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category ;

class CategoryController extends Controller
{
    public function index($type){
        $cat = Category::select()->where('type' , $type) ->get();
          return view('Cpanel.Category.index' , 
          [
              'cat' -> $cat
          ]);
    }
      public function AddCategory($type){
         return view('Cpanel.Category.create' , ['type' -> $type]);
    }
      public function storeCategory(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Category';
        $request -> img_url -> move($path,$file_name1 );
        // insert
        Category::Create([
            'name_ar' => $request ->name_ar,
            'name_en' => $request ->name_en,
            'type' =>   $request -> type ,
            'img_url' => $file_name1 ,
        ]);
        return redirect()->route('categories')->withStatus(__('Category successfully Added.'));
    }
     public function editCategory($CategoryId){
        $cat = Category::find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
        $cat = Category::select('id' , 'type' ,'name_ar' , 'name_en' , 'img_url') ->find($CategoryId);

        return view('Cpanel.Category.edit' , ['cat' -> $cat]) ;
    }
      public function updateCategory(Request $request , $CategoryId){
        $cat = Category::select('id' , 'type' ,'name_ar' , 'name_en' , 'img_url') ->find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
              if($request -> img_url ) {
            $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Category';
        $request -> img_url -> move($path,$file_name1 );
        } else {
            $file_name1 = $cat -> img_url ;
        }
              $cat->update([
            'name_ar' => $request ->name_ar,
            'name_en' => $request ->name_en,
            'type' =>   $request -> type ,
            'img_url' => $file_name1 ,

        ]); 
        return redirect()->route('categories')->withStatus(__('Category successfully Updated.'));

    }
        
    public function deleteCategory($CategoryId){
        $category = Category::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('categories')->withStatus(__('Category successfully Deleted.'));
    }
}
