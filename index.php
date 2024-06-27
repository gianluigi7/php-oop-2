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
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
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
trait Img {
   private string $img;
     public function __construct($name,$price,$img) {
        parent::__construct($name,$price);
        $this->img = $img;
    }
    public function getImg() :string {
        return $this->img;
    }
}
class Food extends Categories {
    use Img;
 public function getType() {
    return $this->type = 'Food';
 }
}
class Game extends Products {
    use Img;
    public function getType() {
        return $this->type = 'Game';
     }
    
}
class Cage extends Products {
    use Img;
    public function getType() {
        return $this->type = 'Kennel';
     }
    }



$food1 = new Food('Dry dog food', 10, 'food-transparent-18.png');
var_dump($food1);

$game1 = new Game('Chewable weight', 30, 'product-5.jpg');
var_dump($food1);

$game2 = new Game('Chewable toy', 19, './img/food-transparent-18.png');
var_dump($food1);

$kennel1 = new Cage('Transport cage', 130, './img/food-transparent-18.png');
var_dump($food1);



$products = [$food1, $game2,$game1,$kennel1];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
 <?php foreach ($products as $product) : ?>
        <div class="card">
        <h3><?php echo $product -> getName() ?> </h3>
        <p><?php echo $product -> getType() ?> </p>
        <p>$ <?php echo $product -> getPrice() ?> </p>
        <img src="<?php $product -> getImg()?>">
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>