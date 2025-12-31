<?php

// Ejemplo de Polimorfismo

// *Polimorfismo*:  capacidad de objetos de diferentes clases de 
// responder de manera distinta al mismo mensaje

class Discount{
    protected $discount = 0;
    
    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount(float $price){
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount{
    const SPECIAL_DISCOUNT = 2;

    public function getDiscount(float $price)
    {
        return ($price * self::SPECIAL_DISCOUNT * $this->discount);;
    }
}

$special_discount = new SpecialDiscount(0.1);
$special_discount_amount = $special_discount->getDiscount(100);

echo $special_discount_amount;
echo "<br>";

$discount = new Discount(0.1);
$discountAmount = $discount->getDiscount(100);

echo $discountAmount;


