<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
</body>
</html>


<?php
/**
* 
*/
class Room
{
	public $color ='белая';
	public function changeColor($color)
	{
            return $this->color = $color;
	}

	private $size ='20квм';
	public function getSize()
	{
            return $this->size;
	}
	public $location ='Rostov';
	public function getLocation()
	{
            return $this->location;
	}
}

$myRoom = new Room();
$myRoom->changeColor('black');
$myRoom->getSize();
$myRoom->getLocation();
var_dump($myRoom);
echo "<br />";

/**
* 
*/
class Laptop 
{
    private $model = 'hp pavilion';
	public function getModel()
	{
            return $this->model;
	}

	private $displaySize = '17 дюймов';
    public function getDisplaySize()
    {
        return $this->displaySize;
    }
    private $type = 'notebook';
    public function getType()
    {
        return $this->type;
    }

}
$myComp = new Laptop();
$myComp->getModel();
$myComp->getDisplaySize();
$myComp->getType();
var_dump($myComp);
echo "<br />";


/**
* 
*/
class Product 
{
	public $name ="Молоко";
	public function getName()
	{
            return $this->name;
	}
	public $price = '56рублей';
	public function getPrice()
	{
            return $this->price;
	}
	public $category = 'Молочные продукты';
	public function getCategory()
	{
            return $this->category;
	}

}
$ourProducts = new Product();
$ourProducts->getName();
$ourProducts->getPrice();
$ourProducts->getCategory();
var_dump($ourProducts);
echo "<br />";

/**
* 
*/
class CNC
{
	public $typeCnc = 'Лазерный';
	public function getTypeCnc()
	{
            return $this->typeCnc;
	}
	private $tableSize = '1.5*2.5m';
	public function gettableSize()
	{
            return $this->tableSize;
	}
	public $cutterTool = 'синий лазер';
	public function getcutterTool()
	{
            return $this->cutterTool;
	}
}
$myCNC = new CNC();
$myCNC->getTypeCnc();
$myCNC->gettableSize();
$myCNC->getcutterTool();
var_dump($myCNC);
?>
