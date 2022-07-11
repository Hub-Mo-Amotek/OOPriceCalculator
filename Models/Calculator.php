<?php

class Calculator
{
    private User $user;
    private Product $product;
    private Group $group;

    /**
     * @param User $user
     * @param Product $product
     * @param Group $group
     */
    public function __construct(User $user, Product $product, Group $group)
    {
        $this->user = $user;
        $this->product = $product;
        $this->group = $group;
    }


}