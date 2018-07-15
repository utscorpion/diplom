<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Admin\Models
 */
class Tag extends Model
{
    /**
     * @var string
     */
    protected $table = 'tags';

    /**
     * @var array
     */
    protected $fillable = [
        'title'
    ];
}
