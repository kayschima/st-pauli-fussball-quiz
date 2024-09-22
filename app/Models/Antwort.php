<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antwort extends Model
{
    use HasFactory;

    protected $table = 'antworten';

    protected $fillable = [
        'antwort',
        'richtig',
        'fragen_id',
    ];

    public function fragen(): BelongsTo
    {
        return $this->belongsTo(Frage::class, 'fragen_id');
    }
}
