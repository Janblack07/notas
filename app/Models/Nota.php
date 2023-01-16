<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='nota';
    protected $fillable=['nota1','nota2','nota3'];
}
