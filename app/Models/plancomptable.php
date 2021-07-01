<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plancomptable extends Model
{
    use HasFactory;

    public function comptes()
    {
        return $this->hasMany(Plancomptable::class, 'parent_id')->orderBy('codecompte');
    }
}
