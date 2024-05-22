<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'foto_makanan',
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
