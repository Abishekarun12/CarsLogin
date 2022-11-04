<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primarykey = 'id'; 

    public $timestamps = false;

    protected $fillable = ['manufacturer','model','launch_status','launch_year'];

}
