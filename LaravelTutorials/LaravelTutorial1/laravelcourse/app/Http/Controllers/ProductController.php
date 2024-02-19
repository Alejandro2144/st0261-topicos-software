<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>"1000" ],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>"1200"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>"50"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>"100"],
        ["id"=>"5", "name"=>"Apple Vision Pro", "description"=>"Best Reality Glasses", "price"=>"4000"]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View | RedirectResponse
    {
        $viewData = [];
        if (!isset(ProductController::$products[$id-1])) {
            return redirect()->route('home.contact');
        }

        $product = ProductController::$products[intval($id) - 1];

        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["price"] =  $product["price"]." - Product price";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|min:1"
        ]);
        // dd($request->all());
        return view('product.created');
        //here will be the code to call the model and save it to the database
    }

}

