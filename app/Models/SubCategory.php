<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'is_active',
    ];
    /*every subcategory belongto a category*/
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
