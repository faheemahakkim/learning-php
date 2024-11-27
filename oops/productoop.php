<?php

// Product

// Properties
// - Name
// - Price
// - Weight
// - Description
// - Picture
// - Quanity

// Method
// - sell
// - replenish
// - getShippingCost
// - getFormattedWeight

class Product {
    private string $name;
    private float $price;
    private int $weight;
    private string $description;
    private string $image;
    private int $quantity;

    public function __construct(string $name, float $price, int $weight, string $description, string $image, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceWithCurrency(): string
    {
        return "£$this->price";
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getWeightWithUnits(): string
    {
        return "{$this->weight}kg";
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}

$hat = new Product('Nice Hat', 300.13, 10, 'A gold hat', 'goldhat.jpg', 1);

echo $hat->getWeightWithUnits();
echo $hat->getPriceWithCurrency();



<?php

// Product

// Properties
// - Name
// - Price
// - Weight
// - Description
// - Picture
// - Quanity

// Method
// - sell
// - replenish
// - getShippingCost
// - getFormattedWeight

class Product {
    private string $name;
    private float $price;
    private int $weight;
    private string $description;
    private string $image;
    private int $quantity;

    public function __construct(string $name, float $price, int $weight, string $description, string $image, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceWithCurrency(): string
    {
        return "£$this->price";
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getWeightWithUnits(): string
    {
        return "{$this->weight}kg";
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function sell(int $amountSold): void
    {
        $this->quantity -= $amountSold;
    }

    public function replenish(int $amountRecieved): void
    {
        $this->quantity += $amountRecieved;
    }


    public function getShippingCost(): float
    {
        if ($this->price > 100) {
            return 0;
        } elseif ($this->weight > 10) {
            return 15.99;
        } elseif ($this->weight < 2) {
            return 4.99;
        } else {
            return 7.99;
        }
    }
}


$hat = new Product('Nice Hat', 300.13, 10, 'A gold hat', 'goldhat.jpg', 1);

$hat->sell(2);

echo $hat->getQuantity();



