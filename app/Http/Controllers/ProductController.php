<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use App\Models\Wish;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{

    function index()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            $wishes = Wish::where('user_id', '=', $userId)->get();
        }else{
            $wishes = [];
        }
        $data = Product::all();
        $cat = Category::all();

        return view( 'product', [
            'products' => $data,
            'categories'=> $cat,
            'wishes'=> $wishes
            ]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {
        
        $data = Product::
            where('name', 'like', '%' . $req->input('query') . '%')
            ->get();
        return view('search', ['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
        
    }

    static function cartItem()
    {
        if (Session::has('user')) {
        $userId = Session::get('user')['id'];
            return Cart::where('user_id', $userId)->count();
        }else{
            return 0;
        }
    }
    function cartList()
    {
        if(Session::has('user'))
        {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

            return view('cartlist', ['products'=>$products]);
        }else{
            return redirect('/login');
        }
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    function orderPlace(Request $req)
    {
        $userId= Session::get('user')['id'];
        $allCart= Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function myOrders()
    {
        if (Session::has('user'))
        {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('myorders', ['orders' => $orders]);
        }
        else
        {
            return redirect('/login');
        }
    }

    function addToWishlist(Request $req)
    {
        if ($req->session()->has('user'))
        {
        $wish = new Wish;
        $wish->user_id=$req->session()->get('user')['id'];
        $wish->product_id=$req->product_id;
        $wish->save();
        return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
}
