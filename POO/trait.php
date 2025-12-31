<?php

// Trait permite reutilizar funciones entre clases no relacionadas.

trait EmailSender{
    public function sendEmail() {
        echo "SE envia un mail <br>";
    }
}

trait DB{
    public function save() {
        echo "Se guarda un dato <br>";
    }
}

trait Log{
    protected function log(string $message, string $fileName){
        if(!file_exists($fileName)){
            file_put_contents($fileName, ""); // lo crea vacio
        }

        $current = file_get_contents($fileName); // Lee el archivo -> a una string
        $current .= date("Y-m-d H:i:s"). " - ".$message."\n";
        file_put_contents($fileName, $current);
    }
}


class Invoice{
    use EmailSender, DB, Log;
    public static $count = 0; // Compartido por todos los objetos
    
    public function create(){
        $this->log("Se creo la factura: ".self::$count, "log.txt");
        self::$count++;
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();

for($i=0; $i<10; $i++){
    $invoice->create();
}

?>