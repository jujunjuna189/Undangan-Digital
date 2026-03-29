<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'package_name',
        'notes',
        'status',
    ];
}
