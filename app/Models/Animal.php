<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $guarded = [];
    protected $table = 'animal';
    protected $primaryKey = 'id_animal';
    public $timestamps = false;

    use HasFactory;
}
