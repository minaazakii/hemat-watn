<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Offer ;
use App\Model\Product ;
class OfferController extends Controller
{
      public function index(){
        $offers = Offer::select() ->get();
        $products = Product::select() ->get();
          return view('Cpanel.Offer.index' , 
          [
              'offers' -> $offers , 
              'products' -> $products
          ]);
    }
      public function AddOffer(){
         return view('Cpanel.Offer.create');
    }
      public function storeOffer(Request $request)
    {
        // insert
        Offer::Create([
            'product_id' => $request ->product_id,
            'discount' => $request ->discount,
            'point' =>   $request -> point ,
        ]);
        return redirect()->route('offers')->withStatus(__('Category successfully Added.'));
    }
     public function editOffer($CategoryId){
        $cat = Offer::find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
        $cat = Offer::select() ->find($CategoryId);

        return view('Cpanel.Offer.edit' , ['cat' , $cat]) ;
    }
      public function updateOffer(Request $request , $CategoryId){
        $cat = Offer::select() ->find($CategoryId);
        if(! $cat){
            return redirect() ->back();
        }
              $cat->update([
            'product_id' => $request ->product_id,
            'discount' => $request ->discount,
            'point' =>   $request -> point ,

        ]); 
        return redirect()->route('categories')->withStatus(__('Category successfully Updated.'));

    }
        
    public function deleteOffer($CategoryId){
        $category = Offer::find($CategoryId);
        if(!$category )
            return redirect() -> back() -> with(['error' => 'هذه الفئة غير موجودة'] );
        $category -> delete();
        return redirect()->route('categories')->withStatus(__('Category successfully Deleted.'));
    }
}
