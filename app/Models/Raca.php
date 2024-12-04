<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{

    protected $guarded = [];
    protected $table = 'raca';
    protected $primaryKey = 'cod_raca';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;

    use HasFactory;
}