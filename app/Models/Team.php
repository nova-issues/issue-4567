<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo<User, Team>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
