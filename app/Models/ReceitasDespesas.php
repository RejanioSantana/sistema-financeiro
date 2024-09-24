<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceitasDespesas extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'description',
        'type',
        'value',
        'date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
