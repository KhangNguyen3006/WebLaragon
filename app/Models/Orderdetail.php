<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderdetail extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangorderdetails';
    public $timestamps=true;
    protected $fillable=[
        'orderId',
        'productId',
        'price',
        'quatity',
    ];
}
