<?php 

class Products {
    protected string $name;
    protected int $price;
    protected string $type;

    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
}

class Categories extends Products {
 public function getDog() {
    return $this->name . ' dog';
  }
 public function getCat() {
    return $this->name . ' cat';
  }
  
}

class Food extends Categories {
 public function getType() {
    return $this->type = 'Food';
 }
}
class Game extends Products {
    public function getType() {
        return $this->type = 'Game';
     }
    
}
class Kennel extends Products {
    public function getType() {
        return $this->type = 'Kennel';
     }
    }

$prod1 = new Products('gabbia', 50);
var_dump($prod1);

$food1 = new Food('cibopercani', 30);
var_dump($food1);
echo $food1->getType();
echo $food1->getDog();

$cat1 = new Categories('si', 20);
var_dump($cat1);
echo $cat1->getCat();