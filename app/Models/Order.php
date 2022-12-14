<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangorders';
    public $timestamps=true;
    protected $fillable=[
        'customerId',
        'total',
        'note',
        'status',
    ];
}
