<?php

namespace App\Models;

use App\Models\Traits\HasChildren;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasChildren;

    protected $fillable = [
        'name'
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

}
