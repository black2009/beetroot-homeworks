<?php

namespace Classes;

class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * CartItem конструктор.
     *
     * @param \Product $product
     * @param int      $quantity
     */
    public function __construct(\Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return \Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Product $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }


    public function increaseQuantity($amount = 1): void
    {
        if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()){
            throw new Exception("Кількість продуктів не повинна бути більшою ніж ".$this->getProduct()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1): void
    {
        if ($this->getQuantity() - $amount < 1){
            throw new Exception("Кількість продуктів не повинна бути меншоою ніж 1");
        }
        $this->quantity -= $amount;
    }
}