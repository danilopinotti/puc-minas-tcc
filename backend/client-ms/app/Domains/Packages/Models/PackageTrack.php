<?php

namespace App\Domains\Packages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTrack extends Model
{
    protected $table = 'packages_trackings';

    use HasFactory;
}
