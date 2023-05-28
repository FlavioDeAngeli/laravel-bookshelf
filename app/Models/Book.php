<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author_id',
        'description',
        'pub_year',
        'category_id',
    ];

    public function author()
    {
      return $this->belongsTo(Author::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }
}
