<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = ["title", "image", "content", "category_id"];

    public function category() {
        return $this->belongsTo(Category::class, "category_id");
    }
}
