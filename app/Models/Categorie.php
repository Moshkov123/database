<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
     public function texts(): HasMany
    {
        return $this->hasMany(Text::class, 'categorie_id');
    }
}
