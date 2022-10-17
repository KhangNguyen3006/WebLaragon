<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangpages';
    public $timestamps=true;
    protected $fillable=[
        'title',
        'slug',
        'content',
        'summary',
    ];
}
