<?php

declare(strict_types=1);

namespace App\Enums;

enum Age: string
{
    public const EIGHTTEEN_TWENTYFIVE = '18-25';
    public const TWENTYSIX_THIRTY = '26-30';
    public const THIRTYONE_THIRTYFIVE = '31-35';
    public const THIRTYSIX_FOURTY = '36-40';
    public const FOURTYONE_PLUS = '41+';

    public static function toArray(): array
    {
        return [
            self::EIGHTTEEN_TWENTYFIVE => '18-25',
            self::TWENTYSIX_THIRTY => '26-30',
            self::THIRTYONE_THIRTYFIVE => '31-35',
            self::THIRTYSIX_FOURTY => '35-40',
            self::FOURTYONE_PLUS => '41+',
        ];
    }

    public function getName(): string
    {
        return match (self::class) {
            self::EIGHTTEEN_TWENTYFIVE, 'default' => '18 - 25',
            self::TWENTYSIX_THIRTY => '26 - 30',
            self::THIRTYONE_THIRTYFIVE => '31 - 35',
            self::THIRTYSIX_FOURTY => '36 - 40',
            self::FOURTYONE_PLUS => '40+',
        };
    }
}
