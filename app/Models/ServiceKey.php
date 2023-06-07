<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceKey extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','service_id','key'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
