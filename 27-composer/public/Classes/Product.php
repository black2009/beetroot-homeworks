<?php

namespace Classes;

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    /**
     * Product constructor.
     *
     * @param int    $id
     * @param string $title
     * @param float  $price
     * @param int    $availableQuantity
     */
    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     */
    public function setAvailableQuantity($availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * Додаємо продукт $product в кошик. Якщо товар вже існує в кошику
     * він повинен оновити кількість.
     * Це має створити CartItem і повернути CartItem з методу.
     * $quantity не повинна перевищувати $availableQuantity продукту
     *
     * @param Cart $cart
     * @param int  $quantity
     * @return \CartItem
     * @throws \Exception
     */
    public function addToCart(Cart $cart, int $quantity): \CartItem
    {
        return $cart->addProduct($this, $quantity);
    }

    /**
     * Видалити продукт з кошика
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        return $cart->removeProduct($this);
    }
}