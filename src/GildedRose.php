<?php

namespace App;

use PHPUnit\Framework\InvalidArgumentException;

class GildedRose {

    /**
    * Lookup table for Classes
    */
    private static $items = [
        'normal'                                    => Item::class,
        'Aged Brie'                                 => Brie::class,
        'Sulfuras, Hand of Ragnaros'                => Sulfuras::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePasses::class,
        'Conjured Mana Cake'                        => Congured::class
    ];
   
    /**
     * Static Constructor (Static Factory Method)
     * (Allows different types of initializations through the Main "__construct"
     * ex. ofJSON, ofArray, ofAnything etc.)
     */
    public static function of($name, $quality, $sellIn){

        

        if (! array_key_exists($name, self::$items)){
            throw new InvalidArgumentException('Item type does not exist.');
        }

        return (object)new self::$items[$name]($quality, $sellIn);

    }



}
