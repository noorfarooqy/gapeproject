<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategories extends Model
{
    use HasFactory;

    public function Projects()
    {
        return $this->hasMany(Projects::class, 'category');
    }
}
