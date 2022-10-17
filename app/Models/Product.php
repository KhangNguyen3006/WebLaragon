<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangproducts';
    public $timestamps=true;
    protected $fillable=[
        'productName',
        'slug',
        'catId',
        'brandId',
        'detail',
        'price',
        'salePrice',
        'image',
        'status',
    ];

}
