<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Eloquent
 * */
class EstateSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'editable'
    ];
}
