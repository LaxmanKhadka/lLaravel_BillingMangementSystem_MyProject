<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsOrder extends Model
{
    use HasFactory;
    protected $table = 'products_order';
    protected $guarded = ['id'];
}
