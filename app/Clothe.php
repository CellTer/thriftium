<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'clothe_id', 'id');
    }
}
