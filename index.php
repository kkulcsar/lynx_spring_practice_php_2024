<?php

class Fruit
{
    public const CLASS_DESCRIPTION = "here goes a short description about the fruit class";

    public $name;

    private $color;

    public function __construct(string $ourCustomName, string $ourCustomColor)
    {
        $this->name = $ourCustomName;
        $this->color = $ourCustomColor;
    }

    public function getColor()
    {
        return $this->color;
    }
}

interface FruitInterface
{
    public function getSomeProperty();

    public function setSomeProperty(string $name);
}

class Apple extends Fruit implements FruitInterface
{
    protected $size;

    public function __construct(
        string $name,
        string $color,
        int $size = 0
    ) {
        parent::__construct($name, $color);

        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getSomeProperty()
    {
        return $this->name;
    }

    public function setSomeProperty(string $name)
    {
        $this->name = $name;
    }
}

$apple = new Apple("Apple", "Blue");

echo $apple->name;
echo "<br>";

$apple->setSomeProperty("Banana");

echo $apple->name;
