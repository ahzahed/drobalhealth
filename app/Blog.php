<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Blog extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id','image', 'title','priority','status', 'description','deleted_at',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
