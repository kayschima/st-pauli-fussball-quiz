<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Frage extends Model
{
    use HasFactory;

    protected $table = 'fragen';

    protected $fillable = [
        'frage',
        'schwierigkeiten_id',
        'kategorien_id',
    ];

    public function schwierigkeiten(): BelongsTo
    {
        return $this->belongsTo(Schwierigkeit::class, 'schwierigkeiten_id');
    }

    public function kategorien(): BelongsTo
    {
        return $this->belongsTo(Kategorie::class, 'kategorien_id');
    }
}
