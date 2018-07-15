<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class
 * @package App\Admin\Models
 */
class News extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'news';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'picture',
    ];
}
