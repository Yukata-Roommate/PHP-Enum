<?php

namespace YukataRm\Laravel\Enum;

use YukataRm\Enum\Extensions as BaseExtensions;

use Illuminate\Database\Eloquent\Casts\AsEnumArrayObject;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

/**
 * Add useful methods to Enum for Laravel
 * 
 * @package YukataRm\Laravel\Enum
 */
trait Extensions
{
    use BaseExtensions;

    /*----------------------------------------*
     * Model Casting
     *----------------------------------------*/

    /**
     * setting Enum as array for Model's Casts
     * 
     * @return string
     */
    public static function castAsArrayObject(): string
    {
        self::assertEnum();

        return AsEnumArrayObject::of(self::class);
    }

    /**
     * setting Enum as collection for Model's Casts
     * 
     * @return string
     */
    public static function castAsCollection(): string
    {
        self::assertEnum();

        return AsEnumCollection::of(self::class);
    }
}
