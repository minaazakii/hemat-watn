<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
         protected $table ="products";
        protected $fillable = [  'id' , 'name' ,'short_description' , 'description' , 'old_point' , 'point' ,'type' ,
        'main_img', 'img1' , 'img2' , 'img3' , 'country' , 'qnt' ,'valdiation', 'size' , 'store_conditions', 'cat_id' , 'sub_cat_id' , 'available' , 'created_at' , 'updated_at'];
        // wont Updare
        protected $hidden = [
        ];
}
