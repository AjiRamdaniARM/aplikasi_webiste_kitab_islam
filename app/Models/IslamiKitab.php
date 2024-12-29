<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslamiKitab extends Model
{
    use HasFactory;

    protected $table = 'islami_kitabs';

    protected $fillable = [
        'name_kitabs',
    ];

    public function contentKitabs()
    {
        return $this->hasMany(ContentKitab::class, 'id_islami_kitabs');
    }
}
