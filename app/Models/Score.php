<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';
    protected $primaryKey = 'id';

    public function clubs()
    {
        return $this->belongsTo(Club::class, 'name');
    }
}
