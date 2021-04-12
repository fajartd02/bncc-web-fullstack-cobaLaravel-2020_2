<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillLaable=[
        'id','pertanyaan'
    ];
    protected $guarded = [];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
