<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    /**
     * @var string
     */
    protected $table = 'homepage';

    /**
     * @var array
     */
    protected $fillable = [
        'tagline',
        'product_1',
        'product_2',
        'product_3',
        'product_4',
    ];
}
