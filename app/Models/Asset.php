<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'address',
        'email',
        'status',
        'acquired_on'
        
    ];

    public function container() {
        return $this->belongsTo('App\Models\Asset');
    }
}
