<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        // untuk menampilkan daftar product
    public function index()
    {
      $query = product::query();
      if (request('search')) {
        $query->where('name', 'like', '%' . request('search') . '%');
      }
      $products = $query->orderBy('price', 'asc')->paginate(5)->withQueryString();
      return view('Products.index', compact('products'));
    }

        // untuk menampilkan form tambah product
    public function create()
    {
        return view('Products.create');
    }

        // untuk menyimpan data product baru
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form tambah
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // membuat gambar baru
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->save();
 

        //  Redirect ke halaman daftar product setelah berhasil menyimpan data
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

        // untuk menampilkan form edit product
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('Products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // mencari product berdasarkan ID
         $product = Product::findOrFail($id);
        
        // Validasi data yang diterima dari form edit
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|string',
           
        ]);
        
        // Menyimpan file gambar yang diunggah ke direktori penyimpanan
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->save();
  

        // Redirect ke halaman daftar product setelah berhasil mengupdate data
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }   

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }   
}
