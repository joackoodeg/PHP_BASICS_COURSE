# Curso Completo de PHP

## Tabla de Contenidos
1. [Sintaxis Básica](#sintaxis-básica)
2. [Arrays](#arrays)
3. [Programación Orientada a Objetos (POO)](#programación-orientada-a-objetos-poo)
4. [Programación Funcional](#programación-funcional)

---

## Sintaxis Básica

### Variables

En PHP, las variables se declaran con el símbolo `$` seguido del nombre de la variable.

```php
$age = 24;
$name = 'Joaquin';
$message = "Mas info";
echo "Hola, mi nombre es $name, tengo $age años ".$message;
```

**Características:**
- Las variables son dinámicamente tipadas
- Se pueden interpolar en strings con comillas dobles
- Se concatenan con el operador `.`

### Tipos de Datos

PHP soporta varios tipos de datos primitivos:

```php
$number = 10;                                           // Integer
$price = 19.99;                                         // Float
$isAvailable = true;                                    // Boolean
$productName = "Laptop";                                // String
$tags = array("Electronics", "Computers", "Sale");      // Array
$user = null;                                           // Null
```

**Funciones útiles:**
- `gettype($variable)` - Obtiene el tipo de la variable
- `(string)$number` - Casting de tipos
- `var_export($variable, true)` - Exporta información de la variable

### Funciones

Las funciones en PHP se declaran con la palabra clave `function`:

```php
function hi($name){
    echo "Hola, ".$name."<br>";
}

// Función con tipos de datos (type hinting)
function add(int $a, int $b): int {
    return $a + $b;
}
```

**Características importantes:**
- PHP permite **hoisting**: puedes llamar una función antes de declararla
- Se puede especificar el tipo de parámetros y el tipo de retorno
- Las funciones pueden tener valores predeterminados en los parámetros

---

## Estructuras de Control

### Condicionales IF

```php
$age = 18;
if($age >= 18 && $age <= 65){
    echo "Eres mayor de edad";
} elseif($age > 18 || $age == 18){
    echo "Eres mayor de 18";
} else {
    echo "Eres menor de edad";
}
```

**Operadores lógicos:**
- `&&` - AND
- `||` - OR
- `!` - NOT
- `==` - Igualdad
- `===` - Igualdad estricta (compara tipo y valor)

### Switch

```php
$age = 18;
switch ($age) {
    case 0:
        echo "Eres un bebé";
        break;
    case ($age >= 1 && $age <= 12):
        echo "Eres un niño";
        break;
    case ($age >= 13 && $age <= 17):
        echo "Eres un adolescente";
        break;
    case ($age >= 18 && $age <= 64):
        echo "Eres un adulto";
        break;
    default:
        echo "Edad no válida";
        break;
}
```

### Operador Ternario

El operador ternario es una forma compacta de escribir condicionales simples:

```php
$age = 19;
$value = $age >= 18 ? "mayor" : "menor";
echo $value;
```

Sintaxis: `condición ? valor_si_verdadero : valor_si_falso`

---

## Bucles (Loops)

### Bucle FOR

```php
for($i = 1; $i <= 10; $i++){
    echo "Número: ".$i."<br>";
}
```

### Bucle WHILE

```php
$i = 0;
while($i < 10){
    echo "Número: ".$i."<br>";
    $i++;
}
```

### Bucle DO-WHILE

```php
$i = 0;
do {
    echo "Número: ".$i."<br>";
    $i++;
} while($i < 10);
```

**Diferencia:** El bucle `do-while` ejecuta el código al menos una vez, antes de verificar la condición.

---

## Arrays

### Arrays Indexados

Arrays con índices numéricos secuenciales:

```php
$names = ["Hector", "Joaquin", "Pedro", "Ana"];
echo $names[0];  // Hector
echo $names[2];  // Pedro

// Agregar elementos
$names[] = "Maria";  // Agrega al final
```

### Arrays Asociativos

Arrays con claves personalizadas (key-value pairs):

```php
$beer = [
    "name" => "Corona",
    "type" => "Lager",
    "alcohol_content" => 4.5,
    "origin" => "Mexico"
];

echo $beer["name"];  // Corona
echo $beer["type"];  // Lager

// Agregar elementos
$beer["price"] = 2.5;
```

### Arrays Multidimensionales

Arrays que contienen otros arrays:

```php
$beers = [
    [
        "name" => "Corona",
        "type" => "Lager",
        "alcohol_content" => 4.5,
        "origin" => "Mexico"
    ],
    [
        "name" => "Heineken",
        "type" => "Pale Lager",
        "alcohol_content" => 5.0,
        "origin" => "Netherlands"
    ]
];
```

### Bucle FOREACH

El bucle `foreach` es especialmente útil para iterar arrays:

```php
// Array indexado
$names = ["Hector", "Joaquin", "Pedro", "Ana"];
foreach ($names as $name) {
    echo $name . "<br>";
}

// Array asociativo
$beer = [
    "name" => "Corona",
    "type" => "Lager",
    "alcohol_content" => 4.5
];
foreach ($beer as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

// Array multidimensional
foreach($beers as $beer){
    foreach($beer as $key => $value){
        echo $key. ": ". $value. '<br>';
    }
}
```

### Funciones Comunes de Arrays

```php
$beers = ["Corona", "Heineken"];

// Agregar elemento al final
$beers[] = "Brahma";
array_push($beers, "Quilmes");  // Alternativa

// Eliminar último elemento
array_pop($beers);

// Contar elementos
count($beers);

// Verificar si existe un elemento
in_array("Brahma", $beers);  // Retorna true/false

// Combinar arrays
$beers2 = ["Ortuzar", "Quilmes"];
$beers_mixed = array_merge($beers, $beers2);

// Mostrar array (para debugging)
print_r($beers);
```

---

## Programación Orientada a Objetos (POO)

### Clases y Objetos

Una clase es un molde para crear objetos:

```php
class Sale {
    // Propiedades
    protected float $total = 0;  // Solo accesible dentro y en herencias
    public string $date;         // Accesible desde cualquier lugar
    private $secret;             // Solo accesible dentro de la clase
    public static $count = 0;    // Compartido por todos los objetos
    
    // Constructor
    public function __construct(string $date) {
        $this->date = $date;
        self::$count++;
    }
    
    // Destructor
    public function __destruct() {
        echo "Se ha eliminado el objeto \n";
    }
    
    // Método estático
    public static function reset() {
        self::$count = 0;
    }
    
    // Getters y Setters
    public function getTotal(): float {
        return $this->total;
    }
    
    public function setDate(string $new_date) {
        if(strlen($new_date) > 10) {
            return "La fecha es incorrecta";
        }
        $this->date = $new_date;
    }
}

// Crear instancia
$sale = new Sale(date("Y-m-d"));
```

**Modificadores de acceso:**
- `public` - Accesible desde cualquier lugar
- `protected` - Accesible solo dentro de la clase y clases heredadas
- `private` - Accesible solo dentro de la clase

### Herencia

```php
class OnlineSale extends Sale {
    public $paymentMethod;
    
    public function __construct(
        string $date,
        string $paymentMethod
    ) {
        $this->paymentMethod = $paymentMethod;
        parent::__construct($date);  // Llamar al constructor padre
    }
    
    public function showInfo(): string {
        return "La venta tiene un monto de: $this->total";
    }
}
```

### Clases Abstractas

Las clases abstractas no se pueden instanciar directamente y sirven como plantilla para otras clases:

```php
abstract class Product {
    protected float $price;
    protected string $name;
    
    // Método abstracto: debe ser implementado por las clases hijas
    abstract public function calculatePrice(): float;
    
    public function getName(): string {
        return $this->name;
    }
}

class Beer extends Product {
    const TAX = 1.1;
    
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    // Implementación obligatoria del método abstracto
    public function calculatePrice(): float {
        return $this->price * self::TAX;
    }
}

// Uso
$beer = new Beer("Delirium", 16);
echo $beer->calculatePrice();  // 17.6
```

**Características:**
- No se pueden instanciar directamente
- Pueden contener métodos abstractos (sin implementación)
- Las clases hijas DEBEN implementar todos los métodos abstractos
- Útiles para definir contratos y comportamientos comunes

### Interfaces

Las interfaces definen un contrato que las clases deben cumplir:

```php
interface SendInterface {
    public function send(string $message);
}

interface SaveInterface {
    public function save();
}

// Una clase puede implementar múltiples interfaces
class Document implements SendInterface, SaveInterface {
    public function send(string $message) {
        echo "Se envía la venta " . $message;
    }
    
    public function save() {
        // Implementación
    }
}
```

**Ventajas:**
- Permiten polimorfismo
- Múltiple implementación (a diferencia de la herencia)
- Definen un contrato que las clases deben cumplir

### Traits

Los traits permiten reutilizar código entre clases no relacionadas:

```php
trait EmailSender {
    public function sendEmail() {
        echo "Se envía un mail <br>";
    }
}

trait DB {
    public function save() {
        echo "Se guarda un dato <br>";
    }
}

trait Log {
    protected function log(string $message, string $fileName) {
        if(!file_exists($fileName)) {
            file_put_contents($fileName, "");
        }
        
        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s"). " - ".$message."\n";
        file_put_contents($fileName, $current);
    }
}

// Usar múltiples traits
class Invoice {
    use EmailSender, DB, Log;
    
    public function create() {
        $this->log("Se creó la factura", "log.txt");
        $this->sendEmail();
        $this->save();
    }
}
```

**Ventajas:**
- Reutilización de código sin herencia
- Se pueden usar múltiples traits en una clase
- Evitan la duplicación de código

### Namespaces

Los namespaces organizan el código y evitan conflictos de nombres:

```php
// Archivo: Utils/Operations.php
namespace Utils;

class Operations {
    public function add($a, $b) {
        return $a + $b;
    }
}

// Archivo principal
require "Utils/Operations.php";

use Utils\Operations;

$op = new Operations();
echo $op->add(2, 3);
```

### stdClass

`stdClass` es la clase genérica de PHP para crear objetos dinámicos:

```php
$beer = new stdClass();
$beer->name = "Heineken";
$beer->alcohol = 8.5;

echo $beer->name;  // Heineken
```

**Uso:** Crear objetos rápidamente sin definir una clase.

### Trabajar con JSON

```php
// OBJETO A JSON
class Beer {
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;
}

$beer = new Beer("Red", "Heineken", 4.2, true);
$json = json_encode($beer);

// JSON A OBJETO
$json_beer = '{"name":"Red","brand":"Heineken","alcohol":4.2}';
$objBeer = json_decode($json_beer);

// ARRAY A JSON
$arr = ["name" => "joa", "country" => "arg"];
$newJson = json_encode($arr);

// JSON A ARRAY (true para tratarlo como array)
$newArr = json_decode($newJson, true);
echo $newArr["country"];
```

---

## Programación Funcional

### Funciones de Primera Clase (First-Class Functions)

En PHP, las funciones son ciudadanos de primera clase, lo que significa que pueden ser asignadas a variables:

```php
$some = function(float $a, float $b): float {
    return $a + $b;
};

echo $some(10, 20);  // 30
```

### Funciones de Orden Superior (Higher-Order Functions)

Funciones que reciben otras funciones como parámetros o las retornan:

```php
function show(callable $fn, float $a, float $b) {
    return $fn($a, $b);
}

$some = function(float $a, float $b): float {
    return $a + $b;
};

function mul(float $a, float $b): float {
    return $a * $b;
}

echo show($some, 10, 20);  // 30
echo show('mul', 10, 20);  // 200
```

### Funciones Flecha (Arrow Functions)

Sintaxis más corta para funciones anónimas (PHP 7.4+):

```php
$sum = fn($a, $b) => $a + $b;
$sum_ = fn(float $a, float $b): float => $a + $b;

echo $sum(10, 20);  // 30

// Usar directamente en funciones de orden superior
echo show(fn($a, $b) => $a + $b, 10, 20);  // 30
```

**Características:**
- Sintaxis compacta
- Retorno automático del valor de la expresión
- Solo pueden contener una expresión

### Palabra Clave `use`

Permite usar variables externas dentro de funciones anónimas:

```php
$const = 5;

$some = function(float $a, float $b) use($const): float {
    return $a + $b + $const;
};

echo $some(4, 5);  // 14
```

**Nota:** Las arrow functions capturan automáticamente variables del scope externo, no necesitan `use`.

### Funciones Puras

Una función pura:
- Siempre retorna el mismo resultado con las mismas entradas
- No tiene efectos secundarios (no modifica estado externo)
- No depende de estado externo

```php
// Función PURA
function add(float $a, float $b): float {
    return $a + $b;
}

// Función NO PURA
class Counter {
    public int $count = 0;
}

function show(Counter $counter) {
    $counter->count++;  // Modifica estado externo
    return $counter->count;
}
```

### Inmutabilidad

La inmutabilidad significa que los objetos no se modifican después de su creación:

```php
class Location {
    private float $x;
    private float $y;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX(): float {
        return $this->x;
    }
    
    public function getY(): float {
        return $this->y;
    }
    
    // En lugar de modificar, creamos un nuevo objeto
    public function move(float $x, float $y): Location {
        return new Location($this->x + $x, $this->y + $y);
    }
}

$location = new Location(1, 2);
$newLocation = $location->move(10, 22);

echo $location->getX();     // 1 (no cambia)
echo $newLocation->getX();  // 11 (nuevo objeto)
```

**Ventajas:**
- Más fácil de razonar sobre el código
- Evita efectos secundarios no deseados
- Facilita la concurrencia y el testing
- Propiedades privadas previenen modificación directa

---

## Resumen de Conceptos Clave

### Sintaxis Básica
- Variables con `$`
- Tipos de datos: int, float, bool, string, array, null
- Funciones con type hinting
- Estructuras de control: if, switch, ternario
- Bucles: for, while, do-while, foreach

### Arrays
- Indexados: `[0, 1, 2]`
- Asociativos: `["key" => "value"]`
- Multidimensionales: arrays de arrays
- Funciones: `count()`, `in_array()`, `array_merge()`, `array_pop()`

### POO
- Clases y objetos
- Modificadores: public, protected, private
- Herencia con `extends`
- Clases abstractas y métodos abstractos
- Interfaces (contratos)
- Traits (reutilización de código)
- Namespaces (organización)
- JSON: `json_encode()`, `json_decode()`

### Programación Funcional
- Funciones anónimas
- Arrow functions: `fn($x) => $x * 2`
- Funciones de orden superior
- Palabra clave `use` para closures
- Funciones puras (sin efectos secundarios)
- Inmutabilidad (objetos no mutables)

---

## Buenas Prácticas

1. **Type Hinting**: Siempre especifica tipos en parámetros y retornos
2. **Strict Types**: Usa `declare(strict_types=1);` al inicio de archivos
3. **Nombres descriptivos**: Variables y funciones con nombres claros
4. **Principio de Responsabilidad Única**: Cada clase/función hace una cosa
5. **Inmutabilidad**: Prefiere objetos inmutables cuando sea posible
6. **Funciones puras**: Evita efectos secundarios cuando sea posible
7. **Interfaces**: Programa contra interfaces, no implementaciones
8. **Traits para reutilización**: Evita duplicación de código
9. **Namespaces**: Organiza tu código en espacios de nombres lógicos
10. **Comentarios**: Documenta código complejo, especialmente interfaces públicas

---

## Conclusión

Este curso cubre los fundamentos de PHP desde la sintaxis básica hasta conceptos avanzados de POO y programación funcional. Con estos conocimientos, estás preparado para desarrollar aplicaciones PHP robustas y mantenibles, aplicando tanto paradigmas orientados a objetos como funcionales según las necesidades del proyecto.
# PHP_BASICS_COURSE
