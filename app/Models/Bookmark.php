<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Bookmark extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'url',
        'user_id',
    ];
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
