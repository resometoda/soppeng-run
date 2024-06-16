<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'gender',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'age' => 'array',
            'gender' => 'array',
        ];
    }
}
