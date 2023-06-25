<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fllable = ['name','description','category_id'];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public static function getTotalPostsCategorywise($categoryId){

        return self::where('category_id',$categoryId)->count();
    }

    public static function getDeletedPosts(){
        return self::onlyTrashed()->get();
    }
}
