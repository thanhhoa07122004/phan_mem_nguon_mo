<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
     public function index()
    {
        $title = "Product List";
        return view("product.index", [
            "title" => $title,

            "products" => [
                [
                    "id" => 1,
                    'name' => "Product A",
                    'quantity' => 100,
                    'price' => 150000,
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'quantity' => 200,
                    'price' => 250000,
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'quantity' => 300,
                    'price' => 350000,
                ],
            ]
        ]);
    }

    public function getDetail($id = 123)
    {
        $products = [
            1 => ['name' => 'Product A', 'quantity' => 100, 'price' => 150000, 'description' => 'Sản phẩm A chất lượng cao'],
            2 => ['name' => 'Product B', 'quantity' => 200, 'price' => 250000, 'description' => 'Sản phẩm B giá tốt'],
            3 => ['name' => 'Product C', 'quantity' => 300, 'price' => 350000, 'description' => 'Sản phẩm C bán chạy'],
        ];

        $product = $products[$id] ?? null;

        return view('product.show', [
            'id' => $id,
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view("product.add");
    }
}
