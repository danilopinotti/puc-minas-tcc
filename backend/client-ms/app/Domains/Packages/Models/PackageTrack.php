<?php

namespace App\Domains\Packages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTrack extends Model
{
    use HasFactory;

    protected $table = 'packages_trackings';
    protected $fillable = ['status', 'package_id'];
}
