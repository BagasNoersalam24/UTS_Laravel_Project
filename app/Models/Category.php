<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'category';

    protected $primaryKey = 'id';

    protected $fillable = ["name","parent_id"];

    
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
