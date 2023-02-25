<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id', 'id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array{
        return [
            'slug'=> [
                'source' => 'title'
            ]
        ];
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
