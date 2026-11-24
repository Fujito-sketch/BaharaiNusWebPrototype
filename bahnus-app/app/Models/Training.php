<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Training extends Model
{
    protected $fillable = ['presenter_name', 'topic', 'class_date', 'student_amount', ];

    protected function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
