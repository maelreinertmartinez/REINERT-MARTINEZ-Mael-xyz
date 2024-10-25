<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

    public function tracks_count()
    {
        return $this->tracks()->count();
    }
}
