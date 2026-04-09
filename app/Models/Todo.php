<?php

namespace App\Models;

use App\Enums\TodoStatusEnum;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['title', 'description','status'])]
class Todo extends Model
{

    protected function casts(): array
    {
        return [
            'status' => TodoStatusEnum::class,
        ];
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
