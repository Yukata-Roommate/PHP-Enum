<?php

namespace YukataRm\Laravel\Enum;

use YukataRm\Enum\Extensions as BaseExtensions;

use Illuminate\Database\Eloquent\Casts\AsEnumArrayObject;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

/**
 * Extensions trait for Laravel
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
     * setting enum as array for casts in model
     * 
     * @return string
     */
    public static function castAsArrayObject(): string
    {
        self::assertEnum();

        return AsEnumArrayObject::of(self::class);
    }

    /**
     * setting enum as collection for casts in model
     * 
     * @return string
     */
    public static function castAsCollection(): string
    {
        self::assertEnum();

        return AsEnumCollection::of(self::class);
    }
}
