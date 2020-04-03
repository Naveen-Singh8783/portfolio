<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\portfolio;


class Post extends Model
{

    use SoftDeletes;
    protected $fillable=[
        'title', 'description', 'dob', 'address', 'email', 'phonenum', 'noofprojects', 'content', 'image', 'published_at', 'category_id'
        ,'classten', 'classtw', 'university','projectonename' ,'projecttwoname' ,'projectthreename' ,'projectone' ,'projecttwo' ,'projectthree'
        ,'experienceone', 'experiencetwo', 'experiencethree'
    ];



    public function deleteImage()
    {
        Storage::delete($this->image);
    }
    public function categroy(){
        return $this->belongsTo(Category::class);
    }
    public function portfolio()
    {
        return $this->hasMany(portfolio::class);
    }
}
