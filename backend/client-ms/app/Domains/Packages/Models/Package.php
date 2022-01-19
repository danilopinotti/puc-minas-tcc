<?php

namespace App\Domains\Packages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function trackings()
    {
        return $this->hasMany(PackageTrack::class);
    }
}
