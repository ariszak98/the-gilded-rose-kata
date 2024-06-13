<?php

namespace App;

class GildedRose
{
    public $name;
    public $quality;
    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * Static Constructor (Static Factory Method)
     * (Allows different types of initializations through the Main "__construct"
     * ex. ofJSON, ofArray, ofAnything etc.)
     */
    public static function of($name, $quality, $sellIn)
    {
        return new static($name, $quality, $sellIn);
    }

    /**
     * Main Function
     */
    public function tick(){

        if ( $this->name === 'normal' ){
            return $this->normalTick();
        }

        if ( $this->name == 'Aged Brie' ){
            return $this->brieTick();
        }

        if ( $this->name == 'Sulfuras, Hand of Ragnaros' ){
            return $this->sulfurasTick();
        }

        if ( $this->name == 'Backstage passes to a TAFKAL80ETC concert' ){
            return $this->backstagePassesTick();
        }

        
    }

    /**
     * Start
     */
    private function normalTick(){
        
        $this->sellIn -= 1;
        $this->quality -= 1;

        if ( $this->sellIn <= 0 ){
            $this->quality -= 1;
        }

        if ($this->quality <0){
            $this->quality = 0;
        }

    }

    private function brieTick(){

        $this->sellIn -= 1;
        $this->quality += 1;

        if ( $this->sellIn <= 0 ){
            $this->quality += 1;
        }

        if($this->quality > 50){
            $this->quality = 50;
        }
        
    }

    private function sulfurasTick(){

    }

    private function backstagePassesTick(){
        
        $this->quality += 1;
    
        if ($this->sellIn <= 10){
            $this->quality += 1;
        }

        if ($this->sellIn <= 5){
            $this->quality += 1;
        }

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        $this->sellIn -= 1;

    }



}
