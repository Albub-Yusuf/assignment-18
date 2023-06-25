<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fllable = ['name','description','category_id'];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public static function getTotalPostsCategorywise($categoryId){

        return self::where('category_id',$categoryId)->count();
    }
}
