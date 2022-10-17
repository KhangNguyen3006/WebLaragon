<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='nguyenthanhkhangcontacts';
    public $timestamps=true;
    protected $fillable=[
        'email',
        'title',
        'content',
        'status',
    ];
}
