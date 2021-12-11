<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='venues';
    protected $fillable=['title','image','description','status'];
}
