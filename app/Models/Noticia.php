<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'desc',
        'content'
    ];



    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'cat_id', 'id');
    }

    // public function views()
    // {
    //     return $this->hasMany(view::class, 'noticia_id', 'id');
    // }

    public function views()
    {
        return $this->hasMany(view::class, 'noticia_id', 'id');
    }
}
