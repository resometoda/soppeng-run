<?php

declare(strict_types=1);

namespace App\Enums;

enum Gender: string
{
    public const MALE = 'male';
    public const FEMALE = 'female';

    public static function toArray(): array
    {
        return [
            self::MALE => ucfirst(self::MALE),
            self::FEMALE => ucfirst(self::FEMALE),
        ];
    }

    public function getName(): string
    {
        return match (self::class) {
            self::MALE, 'default' => 'MALE',
            self::FEMALE => 'FEMALE',
        };
    }

}
