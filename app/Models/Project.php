<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'staffname',
        'comp_name',
        'comp_address',
        'comp_rep',
        'services',
        'details',
        'created_at'
    ];
}
