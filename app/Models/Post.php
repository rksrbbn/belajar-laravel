<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    // Local Scope

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('title', 'like', '%'. request('search') . '%')
                    ->orWhere('body', 'like', '%'. request('search'). '%');
        }
    }


    // Relation

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
