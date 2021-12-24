<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        $product = DB::table('products')->orderBy('id', 'desc')->paginate(10);
        return view('admin.products.all_products', compact('product'));
    }
    public function CreateProducts()
    {
        return view('admin.products.add_products');
    }
    public function StoreProducts(Request $request)
    {
        $product = new Products;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->date_added = Carbon::now();
        $product->save();
        return redirect()->route('products');
    }
    public function EditProducts($id)
    {
        $product = Products::find($id);
        return view('admin.products.edit_products', compact('product'));
    }
    public function UpdateProducts(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->file('product_photo_path')) {
            $file = $request->file('product_photo_path');
            @unlink(public_path('upload/products_images/' . $product->product_photo_path));
            $filename = data('YndHi') . $file->getClientOriginalName();
            $file->move('public_path'('upload/products_images/'), $filename);
            $product['product_photo_path'] = $filename;
        }
        $product->update();
        return redirect()->route('products');

    }
    public function DeleteProducts($id)
    {
        DB::table('Products')->where('id', $id)->delete();
        return redirect()->route('products');
    }
}
