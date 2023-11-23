<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string slug
 * @property float shipping_rate
 */
class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    protected $fillable = [
        'name',
        'slug',
        'shipping_rate'
    ];
}
