<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFillter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%'.$search.'%')
            ->orWhere('body', 'like', '%'.$search.'%');
        })->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        })->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('user', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
