<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                $product = Product::all();
                return view('user.home', compact('product'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        $product = Product::all();
        return view('user.home', compact('product'));
    }
    public function tshirt_view()
    {
        $data = Product::where('category_id', '2')->get();
        $category = Category::find(2);
        return view('user.categories.tshirt_view', compact('data', 'category'));
    }
    public function overSize_view()
    {

        $data = Product::where('category_id', '3')->get();
        $category = Category::find(3);
        return view('user.categories.overSize_view', compact('data', 'category'));
    }
    public function jeans()
    {
        $data = Product::where('category_id', '5')->get();
        $category = Category::find(5);
        return view('user.categories.jeans', compact('data', 'category'));
    }
    public function jacket()
    {
        $data = Product::where('category_id', '7')->get();
        $category = Category::find(7);
        return view('user.categories.jacket', compact('data', 'category'));
    }
    public function sweetpants()
    {
        $data = Product::where('category_id', '4')->get();
        $category = Category::find(4);
        return view('user.categories.sweetpants', compact('data', 'category'));
    }
    public function cart_view($id)
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->save();

                return redirect()->back()->with('message', 'Product Added Successfully');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back()->with('message', 'Please Login First');
        }
    }
    public function view_cart()
    {
        $userCartItems = Cart::userCartItems();
        return view('user.cart', compact('userCartItems'));
    }
    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function checkout_view()
    {

        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                $userCartItems = Cart::userCartItems();

                return view('user.checkout', compact('userCartItems'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function order(Request $request)
    {
        $data = new Order();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city = $request->city;
        $data->user_id = Auth::user()->id;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->save();
        return redirect()->back()->with('message', 'Order Submit Successfully We Will Contact You Soon..');
    }
}
