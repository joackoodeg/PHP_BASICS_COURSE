<?php
declare (strict_types=1);

$sale = new Sale(date("Y-m-d"));
$concept = new Concept("cerveza", 10.2);
$concept2 = new Concept("cerveza", 20.23);

$sale->addConcept($concept);
$sale->addConcept($concept2);

echo $sale->getTotal();

class Sale{
    protected float $total = 0; //Solo dentro y en herencias - INICIALIZADO EN 0
    public string $date; 
    public static $count = 0; // Compartido por todos los objetos

    public array $concepts = [];

    // NO hay sobrecarga de constructores, hay 1 solo y es este:
    public function __construct(string $date)
    {
        $this->date= $date;
        self::$count++;
    }

    public function __destruct()
    {
        echo "Se ha eliminado el objeto \n";
        $this->removeInvoice(); // Se utiliza el metodo privado SOLO dentro de la clase
    }

    // Funcion estatica: Pertenece a la clase, se aplica a todos los objetos 
    public static function reset()
    {
        self::$count = 0;
    }

    public function addConcept(Concept $concept){
        $this->concepts[]=$concept;
        $this->total += $concept->amount;
    }
    
    public function createInvoice()
    {
        return "Se crea la factura";
    }

    // Metodo privado
    private function removeInvoice()
    {
        return "Se Borra la factura";
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function setDate(string $new_date){
        if(strlen($new_date) > 10 ){
            return "La fecha es incorrecta";
        }
        $this->date = $new_date;
    }
}

class OnlineSale extends Sale{
    public $paymentMethod;

    public function __construct(
        float $total, 
        string $date,
        string $paymentMethod
    )
    {
        $this->paymentMethod = $paymentMethod;
        return parent::__construct($total, $date);
    }

    public function showInfo(): string {
        return "La venta tiene un monto de: $this->total";
    }
}

class Concept{
    public string $description;
    public float|int $amount;

    public function __construct(string $description, float|int $amount)
    {
        $this->description = $description;
        $this->amount = $amount;
    }
}