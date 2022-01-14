<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Carbon\Carbon;
use App\Http\Controllers\Image;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        $product = DB::table('products')->orderBy('id', 'desc')->paginate(10);
        return view('admin.products.products_show', compact('product'));
    }
    public function CreateProducts()
    {
        return view('admin.products.products_add');
    }
    public function StoreProducts(Request $request)
    {
        $validatedData = $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        $product = new Product;
        $product->name_en = $request->input('name_en');
        $product->name_ar = $request->input('name_ar');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        if ($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('upload/product_images/', $filename);
            $product->image = $filename;
        }
        $product->date_added = Carbon::now();
        $product->save();
        return redirect()->route('products')->with('success', 'Product Added Successfully');
    }
    public function EditProducts($id)
    {
        $product = Product::find($id);
        return view('admin.products.products_edit', compact('product'));
    }
    public function UpdateProducts(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name_en = $request->input('name_en');
        $product->name_ar = $request->input('name_ar');
        $product->price = $request->input('price');
        $product->availability = $request->input('availability');
        $product->category = $request->input('category');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/product_images/' . $product->image));
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('upload/product_images/', $filename);
            $product->image = $filename;
        }
        $product->update();
        return redirect()->route('products')->with('success', 'Product Updated Successfully');
    }
    public function DeleteProducts($id)
    {
        DB::table('Products')->where('id', $id)->delete();
        return redirect()->route('products')->with('error', 'Product Deleted Successfully');
    }
}
