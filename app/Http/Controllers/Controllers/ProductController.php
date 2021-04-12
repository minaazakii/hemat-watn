<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product ;
use App\Model\Category ;
use App\Model\SubCategory ;

class ProductController extends Controller
{
        public function index($type){
          $products = Product::select()->where('type' , $type)->get();
          return view('Cpanel.Product.index' , ['products' -> $products]);
    }
      public function AddProduct($type){
         $cats = Category::select()->where('type' , $type)->get();
            $subCats = SubCategory::select()->where('type' , $type)->get();
         return view('Cpanel.Product.create' , [
           'cats' -> $cats ,
           'subCats' ->$subCats
         ]);
    }
      public function storeProduct(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Product';
        $request -> img_url -> move($path,$file_name1 );

      if($request -> img1 ) {
      $file_extension2 = $request -> img1 -> getClientOriginalExtension();
        $file_name2 =  time() . '.' .'1' . '.'.$file_extension2;
        $path = 'images/Product';
        $request -> img1 -> move($path,$file_name2 );
        } else {
            $file_name2 = "" ;
        }
       if($request -> img2 ) {
         $file_extension3= $request -> img2 -> getClientOriginalExtension();
        $file_name3 =  time() . '.' .'1' . '.'.$file_extension3;
        $path = 'images/Product';
        $request -> img2 -> move($path,$file_name3 );
        } else {
            $file_name3= "" ;
        }
      if($request -> img3 ) {
            $file_extension4= $request -> img3 -> getClientOriginalExtension();
        $file_name4 =  time() . '.' .'1' . '.'.$file_extension4;
        $path = 'images/Product';
        $request -> img3 -> move($path,$file_name4 );
        } else {
            $file_name4= "" ;
        }
        // insert
        Product::Create([
            'name' => $request ->name,
            'short_description' => $request ->short_description,
            'description' =>   $request -> description ,
            'old_point' => $request ->old_point ,
            'point' => $request ->point ,
            'main_img' => $file_name1 ,
            'img1' => $file_name2 ,
            'img2' => $file_name3  ,
            'img3' => $file_name4 ,
            'country' => $request ->country ,
            'qnt' => $request ->qnt ,
            'valdiation' => $request ->valdiation ,
            'size' => $request ->size ,
            'store_conditions' => $request ->store_conditions ,
            'cat_id' => $request ->cat_id ,
            'sub_cat_id' => $request ->sub_cat_id ,
            'available' => $request ->available ,
            'type' => $request -> type ,
              
        ]);
        return redirect()->route('products')->withStatus(__('Category successfully Added.'));
    }
     public function editProduct($CategoryId){
        $cat = Product::find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
        $cat = Product::select('id' , 'name' ,'short_description' , 'description' , 'old_point' , 'point' , 'main_img' ,'img1' , 'img1'
        ,'img2' , 'img3' , 'country' , 'qnt' , 'valdiation' , 'size' ,'store_conditions' ,'cat_id' , 'sub_cat_id' , 'available'  ) ->find($CategoryId);

        return view('Cpanel.Product.edit' , compact('cat')) ;
    }
      public function updateProduct(Request $request , $CategoryId){
       $cat = Product::select('id' , 'name' ,'short_description' , 'description' , 'old_point' , 'point' , 'main_img' ,'img1' , 'img1'
        ,'img2' , 'img3' , 'country' , 'qnt' , 'valdiation' , 'size' ,'store_conditions' ,'cat_id' , 'sub_cat_id' , 'available'  ) ->find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
              if($request -> img_url ) {
             $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Product';
        $request -> img_url -> move($path,$file_name1 );
              } else {
                  $file_name1 = $cat->img_url ;
              }

      if($request -> img1 ) {
      $file_extension2 = $request -> img1 -> getClientOriginalExtension();
        $file_name2 =  time() . '.' .'1' . '.'.$file_extension2;
        $path = 'images/Product';
        $request -> img1 -> move($path,$file_name2 );
        } else {
              $file_name2 = $cat->img1 ;
        }
       if($request -> img2 ) {
         $file_extension3= $request -> img2 -> getClientOriginalExtension();
        $file_name3 =  time() . '.' .'1' . '.'.$file_extension3;
        $path = 'images/Product';
        $request -> img2 -> move($path,$file_name3 );
        } else {
          $file_name3 = $cat->img2 ;
        }
      if($request -> img3 ) {
            $file_extension4= $request -> img3 -> getClientOriginalExtension();
        $file_name4 =  time() . '.' .'1' . '.'.$file_extension4;
        $path = 'images/Product';
        $request -> img3 -> move($path,$file_name4 );
        } else {
              $file_name4 = $cat->img3 ;
        }
        // insert
        $cat -> update([
            'name' => $request ->name,
            'short_description' => $request ->short_description,
            'description' =>   $request -> description ,
            'old_point' => $request ->old_point ,
            'point' => $request ->point ,
            'main_img' => $file_name1 ,
            'img1' => $file_name2 ,
            'img2' => $file_name3  ,
            'img3' => $file_name4 ,
            'country' => $request ->country ,
            'qnt' => $request ->qnt ,
            'valdiation' => $request ->valdiation ,
            'size' => $request ->size ,
            'store_conditions' => $request ->store_conditions ,
            'cat_id' => $request ->cat_id ,
            'sub_cat_id' => $request ->sub_cat_id ,
            'available' => $request ->available ,
            'type' => $request -> type ,
              
        ]);
        return redirect()->route('products')->withStatus(__('Category successfully Updated.'));

    }
        
    public function deleteProduct($CategoryId){
        $category = Product::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('products')->withStatus(__('Category successfully Deleted.'));
    }
}
