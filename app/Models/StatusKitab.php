<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKitab extends Model
{
    use HasFactory;

    protected $table = 'status_kitabs';

    protected $fillable = [
        'name_status',
    ];

    public function contentKitabs()
    {
        return $this->hasMany(ContentKitab::class, 'id_status_kitabs');
    }
}
