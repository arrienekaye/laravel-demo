<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        print_r(route('products'));

        $title = 'Welcome to my Laravel 8 course';
        $description = 'Created by Dary';

        // //Compact method
        // return view('products.index', compact('title', 'description'));

        //With method
        return view('products.index')->with('title', $title)->with('description', $description);
    }

    public function list()
    {
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        return view('products.list')->with('data', $data);

        //Directly in the view
        return view('products.list', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About us page';
    }

    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.item', ['data' => $data[$name] ?? 'Product ' . $name . ' does not exist']);
    }
}
