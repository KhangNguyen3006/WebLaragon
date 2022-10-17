<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangbrands';
    public $timestamps=true;
    protected $fillable=[
        'brandName',
        'slug',
        'description',
        'status',
    ];
}
