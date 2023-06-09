<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
