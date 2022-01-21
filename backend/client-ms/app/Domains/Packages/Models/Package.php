<?php

namespace App\Domains\Packages\Models;

use Database\Factories\PackageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['is_delivered'];
    protected $casts = [
        'height' => 'float',
        'width' => 'float',
        'length' => 'float',
        'weight' => 'float',
    ];

    public function trackings()
    {
        return $this->hasMany(PackageTrack::class);
    }

    protected static function newFactory()
    {
        return PackageFactory::new();
    }
}
