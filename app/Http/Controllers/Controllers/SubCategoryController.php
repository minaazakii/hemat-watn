<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SubCategory ;

class SubCategoryController extends Controller
{
        public function index($type){
                $cat = SubCategory::select()->where('type' , $type) ->get();
          return view('Cpanel.SubCategory.index' , ['cat' -> $cat]);
    }
      public function AddCategory($type){
         return view('Cpanel.SubCategory.create' , ['type' -> $type]);
    }
      public function storeCategory(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/SubCategory';
        $request -> img_url -> move($path,$file_name1 );
        // insert
        SubCategory::Create([
            'name_ar' => $request ->name,
            'name_en' => $request ->name,
            'cat_id' =>   '2' ,
            'type' => $request -> type ,
            'img_url' => $file_name1 ,
        ]);
        return redirect()->route('subCats')->withStatus(__('Category successfully Added.'));
    }
     public function editCategory($CategoryId){
        $cat = SubCategory::find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
        $cat = SubCategory::select('id' , 'cat_id' ,'name_ar' , 'name_en' , 'type' , 'img_url') ->find($CategoryId);

        return view('Cpanel.SubCategory.edit' , ['cat' -> $cat]) ;
    }
      public function updateCategory(Request $request , $CategoryId){
        $cat = SubCategory::select('id' , 'cat_id' ,'name_ar' , 'name_en' , 'type', 'img_url') ->find($CategoryId);
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
            'cat_id' =>   $request -> cat_id ,
            'type' => $request -> type ,
            'img_url' => $file_name1 ,

        ]);

        return redirect()->route('subCats')->withStatus(__('Category successfully Updated.'));

    }

    public function deleteCategory($CategoryId){
        $category = SubCategory::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('subCats')->withStatus(__('Category successfully Deleted.'));
    }
}
