<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Text extends Model
{
    protected $fillable = ['heading', 'text', 'categorie_id'];
   public function categorie(): BelongsTo 
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
