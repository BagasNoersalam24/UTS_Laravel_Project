<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;

    protected $table = 'Article';

    protected $primaryKey = 'id';

    protected $fillable = ["category_id","tittle","image_banner_path","content"];


    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
