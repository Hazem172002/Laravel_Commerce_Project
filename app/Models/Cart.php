<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    public static function userCartItems()
    {
        if (Auth::id()) {
            $userCarItems = Cart::with('product')->where('user_id', Auth::user()->id)->get()->toArray();
            return $userCarItems;
        } else {
            return redirect()->back()->with('message', 'Please Login First and try again');
        }
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
