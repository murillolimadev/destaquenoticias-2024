<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaClassificados extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function images()
    {
        return $this->hasMany(ImageClassificado::class, 'id', 'cat_id');
    }
}
