<?php

class Quantity{

    private int $quantity;

    /**
     * @param int $quantity
     */
    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }


    public function getQuantity(): array|int
    {
        return $this->quantity;
    }
}