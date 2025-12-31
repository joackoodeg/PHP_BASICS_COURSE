<?php

interface SendInterface{
    public function send(string $message);
}

interface SaveInterface{
    public function save();
}

class Document implements SendInterface, SaveInterface{
    public function send(string $message){
        echo "Se envia la venta ".$message;
    }

    public function save(){
        return;
    }
}

class BeerRepository implements SaveInterface{
    public function save(){
        echo "Beer save";
    }
}

class SaveProcess{
    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager)
    {
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "Hacemos algo antes<br>";
        $this->saveManager->save();
    }
}