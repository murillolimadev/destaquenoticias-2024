<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function noticias()
    {
        return $this->belongsTo(Noticia::class, 'cat_id');
    }

    public function news()
    {
        return $this->hasMany(Noticia::class, 'cat_id');
    }
}
