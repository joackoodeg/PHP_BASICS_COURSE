<?php

class Location{
    private float $x;
    private float $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float{
        return $this->x;
    }
    

    public function getYs(): float{
        return $this->y;
    }

    public function move(float $x, float $y) : Location {
        $location = new Location ($this->x + $x, $this->y + $y);
        return $location;
    }

}

$location = new Location(1,2);

// ERROR:
//$location-> x = 1.2;

$newLocation = $location->move(10,22);
echo $location->getX().'<br>'; // 1
echo $newLocation->getX().'<br>'; // 11

