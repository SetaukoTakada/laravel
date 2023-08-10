<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user(){
        return $this->belongsTo(User::class);
    }

    use HasFactory;

    protected $table='posts';
    protected $fillable = [

        'body',
        'created_at',
        'user_id'
    ];
}
