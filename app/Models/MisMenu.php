<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisMenu extends Model
{
    use HasFactory;

    protected $table = 'mis_menu';

    protected $fillable = [
        'menu', 
        'url', 
        'category', 
        'parent', 
        'role'
    ];
}