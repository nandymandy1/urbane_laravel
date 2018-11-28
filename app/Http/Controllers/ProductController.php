<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    // Load products 
    public function loadProducts($collection){

        $products = Product::where('collection', $collection)->orderBy('created_at')->get();

        if($collection == 'bags'){
            $category = "Bags";
        } elseif($collection == 'cardholder') {
            $category = "Card Holder";
        } elseif($collection == 'cigarcase') {
            $category = 'Cigar Case';
        } elseif($collection == 'corporategift'){
            $category = 'Corporate Gift Set';
        } elseif($collection == 'jackets'){
            $category = 'Jacket';
        } elseif($collection == 'laptopbags'){
            $category = 'Laptop Bags';
        } elseif($collection == 'passport'){
            $category = 'Passport';
        } elseif($collection == 'travelbag'){
            $category = 'Travel Bags';
        } elseif($collection == 'travelshavekit'){
            $category = 'Travel Shave Kit';
        } elseif($collection == 'wallet'){
            $category = 'Wallets';
        } else {
            $category = 'Product Category Does Not Exists';
        }
        // return $products;
        return view('urbane.collection', ['collection' => $category])-> with('products', $products);
    }
    
}
