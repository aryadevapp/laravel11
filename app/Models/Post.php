<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // need code like this, if manualy add data with tinker
    // protected $fillabel = ['title', 'author', 'slug', 'body'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Eiger Loading
    protected $with = ['author', 'category'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
