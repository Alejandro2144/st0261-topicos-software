<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Productos - Petropolis';
        $viewData['subtitle'] = 'Lista de productos';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];
        $product = Product::find($id);

        if (! $product) {
            return redirect()->route('home.index');
        }

        $viewData['title'] = $product->name.' - Petropolis';
        $viewData['subtitle'] = $product->name.' - Información del producto';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View|RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($request->only(['name', 'price', 'description', 'category', 'stock']));

        return view('product.created');
    }

    public function delete(string $id): View|RedirectResponse
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('product.index');
    }
}
