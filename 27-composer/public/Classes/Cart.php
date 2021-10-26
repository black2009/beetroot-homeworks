<?php

namespace Classes;

use Exception;

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @return \CartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param \CartItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Додаємо продукт $product в кошик. Якщо товар вже існує в кошику
     * він повинен оновити кількість.
     * Це має створити CartItem і повернути CartItem з методу.
     * $quantity не повинна перевищувати $availableQuantity продукту
     *
     * @param Product $product
     * @param int     $quantity
     * @return CartItem|null
     * @throws Exception
     */
    public function addProduct(Product $product, int $quantity): ?CartItem
    {
        // find product in cart
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null){
            $cartItem = new CartItem($product, 0);
            $this->items[$product->getId()] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }

    private function findCartItem(int $productId): ?CartItem
    {
        return $this->items[$productId] ?? null;
    }

    /**
     * Видалити продукт з корзини
     *
     * @param Product $product
     */
    public function removeProduct(Product $product): void
    {
        unset($this->items[$product->getId()]);
    }

    /**
     * Повертає загальну кількість продуктів в корзині
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    /**
     * Повертає загальну ціну продуктів в корзині
     *
     * @return float
     */
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
    }
}