<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;

    protected $fillable = [
        'result',
    ];

    // definis relasi dengan model Club
    public function clubs()
    {
        return $this->belongsTo(Club::class, 'id');
    }

    // Method untuk menghitung skor
    public function calculateScore()
    {
        if ($this->result === 'win') {
            return 3;
        } elseif ($this->result === 'draw') {
            return 2;
        } else {
            return 0;
        }
    }
}
