<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;

class AdminController extends Controller
{
    // ... (other methods)

    public function storeProduct(Request $request)
{
    // Validate and store product data here using $request

    // Example: Storing a new product in the database
    $product = new Product();
    $product->title = $request->input('title');
    $product->description = $request->input('description');
    $product->price = $request->input('price');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Check if the directory doesn't exist, then create it
        if (!file_exists(public_path('product_images'))) {
            mkdir(public_path('product_images'), 0777, true);
        }
    
        $imagePath = $image->store('product_images', 'public');

        $product->image = $imagePath;
    }

    $product->save();

    // Redirect or add success message as needed
    return redirect()->route('shopNow')->with('success', 'Product created successfully');
}

}

