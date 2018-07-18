<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';
    use Searchable;
}
