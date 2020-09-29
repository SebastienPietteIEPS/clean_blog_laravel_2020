<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function author() {
        return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany('App\models\tag', 'posts_has_tags');
    }
}
