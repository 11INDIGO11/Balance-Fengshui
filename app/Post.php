<?php

// Post.php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use Commentable;
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
////    public function partner()
////    {
////        return $this->belongsTo(Partner::class);
////    }
//    public function comments()
//    {
//        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
//    }
}
