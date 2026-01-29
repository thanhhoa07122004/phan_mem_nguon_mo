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
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'quantity' => 200,
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'quantity' => 300,
                ],
            ]
        ]);
    }

    public function getDetail($id = 123)
    {
        return view("product.show", [
            "id" => $id
        ]);
    }

    public function create()
    {
        return view("product.add");
    }
}
