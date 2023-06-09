<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public function User(){
        return $this->belongsTo(User::class ,'user_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class ,'category_id');
    }
}
