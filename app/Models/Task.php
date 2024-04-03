<?php

namespace App\Models;

use App\Enums\PriorityEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'slug',
        'descritpion',
        'status',
        'priority',
        'deadline',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'deadline' => 'date',
        'priority' => PriorityEnum::class,
        'status' => StatusEnum::class
    ];
}
