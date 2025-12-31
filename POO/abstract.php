<?php

/**
 * Clases y Métodos Abstractos
 *
 * Las clases abstractas son clases que no se pueden instanciar directamente. 
 * Se utilizan como base para otras clases que heredan de ellas. Una clase 
 * abstracta puede contener métodos abstractos, que son métodos sin 
 * implementación. Las clases que heredan de una clase abstracta deben 
 * proporcionar una implementación para estos métodos.
 *
 * Los métodos abstractos se definen en la clase abstracta utilizando la 
 * palabra clave 'abstract' y no tienen un cuerpo. Esto obliga a las 
 * subclases a implementar estos métodos, garantizando que ciertas 
 * funcionalidades estén presentes en todas las subclases.
 *
 * Ejemplo de uso:
 * - Definir una clase abstracta 'Animal' con un método abstracto 'hacerSonido()'.
 * - Crear subclases como 'Perro' y 'Gato' que implementen el método 'hacerSonido()'.
 *
 * Esto permite un diseño más flexible y escalable, ya que se puede 
 * definir un comportamiento común en la clase abstracta y forzar a las 
 * subclases a seguir esa estructura.
 */


abstract class Product{
    protected float $price;
    protected string $name;

    abstract public function calculatePrice(): float;

    public function getName(): string{
        return $this->name;
    }
}

class Beer extends Product{
    const TAX = 1.1;
    
    public function __construct($name, $price)
    {
        $this->name =$name;
        $this->price=$price;
    }

    // Con esto se va el error ya que cumplimos con lo que
    // obliga la clase abstracta
    public function calculatePrice(): float{
        return $this->price * self::TAX;
    }
}

class Meat extends Product{
    const TAX = 2.3;
    
    public function __construct($name, $price)
    {
        $this->name =$name;
        $this->price=$price;
    }

    // Con esto se va el error ya que cumplimos con lo que
    // obliga la clase abstracta
    public function calculatePrice(): float{
        return $this->price * self::TAX;
    }
}


function showInfo(Product $product){
    echo "$ ".$product->calculatePrice();
}

$beer = new Beer("Delirium", 16);
$meat = new Meat("Meatrium", 16);
echo $beer->getName();
showInfo($beer);

echo "<br>";

echo $meat->getName();
showInfo($meat);
?>