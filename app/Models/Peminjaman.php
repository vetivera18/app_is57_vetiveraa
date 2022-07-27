<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    public function bukus(){
        return $this->hasOne(Buku::class,'id','juduls_id');
    }
}