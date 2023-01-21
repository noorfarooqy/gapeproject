<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    public function ProjectCategory()
    {
        return $this->belongsTo(ProjectCategories::class, 'category');
    }
}
