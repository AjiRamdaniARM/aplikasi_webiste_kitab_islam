<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKitab extends Model
{
    use HasFactory;

    protected $table = 'detail_kitabs';

    protected $fillable = [
        'rujukan',
        'halaman',
    ];

    public function contentKitabs()
    {
        return $this->hasMany(ContentKitab::class, 'id_kitab_details');
    }
}
