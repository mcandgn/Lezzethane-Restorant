<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $items = [];

    public function addProduct(Product $product, $quantity)
    {
        if (array_key_exists($product->id, $this->items)) {
            $this->items[$product->id]['quantity'] += $quantity;
        } else {
            $this->items[$product->id] = [
                'id' => $product->id,
                'name' => $product->product_name,
                'photo' => $product->photo,
                'price' => $product->price,
                'quantity' => $quantity
            ];
        }
    }

    public function getItems()
    {
        return $this->items;
    }
};

