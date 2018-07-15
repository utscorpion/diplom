<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    /**
     * @var string
     */
    protected $table = 'subcategories';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'category_id'
    ];
}
