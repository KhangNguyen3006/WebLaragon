<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhanglinks';
    public $timestamps=true;
    protected $fillable=[
        'title',
        'position',
        'image',
        'link',
        'order',
        'status',
    ];
}