<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;


class AdminController extends Controller
{
    public function category_view()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                return view('admin.category_view');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function upload_category(Request $request)
    {
        $data = new Category();
        $data->name = $request->name;
        $data->description = $request->description;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('categoryimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updateCategory_view()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Category::all();
                return view('admin.updateCategory_view', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
    public function update_category_upload($id)
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Category::find($id);
                return view('admin.update_category_upload', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function updated_category($id, Request $request)
    {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('categoryimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }
    public function add_product_view()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Category::all();
                return view('admin.add_product_view', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function add_product(Request $request)
    {
        $data = new Product();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->old_price = $request->oldprice;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->category_id = $request->category;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('categoryimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function manage_product()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Product::all();
                return view('admin.manage_product', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function update_product_after($id)
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Product::find($id);
                $datas = Category::all();
                return view('admin.update_product', compact('data', 'datas'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function updated_product($id, Request $request)
    {
        $data = Product::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->old_price = $request->old_price;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->category_id = $request->category;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('categoryimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
    public function my_orders()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '1') {
                $data = Order::join('carts', 'carts.user_id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'carts.product_id')->get();


                return view('admin.orders', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
