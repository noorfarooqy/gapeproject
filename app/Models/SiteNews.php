<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteNews extends Model
{
    use HasFactory;

    public function AuthorInfo()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
