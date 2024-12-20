<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
