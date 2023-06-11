<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','dev_url','prod_url','dev_port'];

    protected $attributes = ['enabled' => true, 'prod_url' => 80];
}
