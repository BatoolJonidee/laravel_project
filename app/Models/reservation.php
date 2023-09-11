<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'docter_id', 'appointment_date', 'appointment_time'];
    public function doctor(): HasOne
    {
        return $this->hasOne(Docters::class , 'docters_id');
    } 
    public function users(): HasOne
    {
        return $this->hasOne(users::class , 'user_id');
    } 
}
