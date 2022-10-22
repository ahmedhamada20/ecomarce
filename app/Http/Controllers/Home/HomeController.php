<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function customer_support()
    {
        return view('website.customer_support.index');
    }

    public function contact_us()
    {
        return view('website.contact_us.contact_us');
    }
    public function mincategory($id)
    {
        $data = SubCategory::withcount('product')->where('category_id', $id)->first();
        if (!empty($data)) {
            return view('website.category.index', compact('data'));
        } else {
            return redirect()->back();
        }
    }

    public function minproduct($id)
    {
        $data = Product::where('id', $id)->first();
        $cart = Cart::content();
        if (!empty($data)) {
            return view('website.prodcut.index', compact('data', 'cart'));
        } else {
            return redirect()->back();
        }
    }


    public function mincateg($id)
    {

        $data = SubCategory::withcount('product')->where('id', $id)->first();



        if (!empty($data)) {
            return view('website.category.category', compact('data'));
        } else {
            return redirect()->back();
        }
    }

    public function addToCart(Request $request)
    {

        $product = Product::find($request->product_id);

        $cart =  Cart::add($product->id, $product->name, 1, $product->price);

        return redirect()->back();
    }

    public function deletedCart(Request $request)
    {
        Cart::remove($request->cart_id);
        return redirect()->back();
    }

    public function cart()
    {
        return view('website.cart.index');
    }

    public function order_paymaents(Request $request)
    {
       $order = Order::create([
            'user_id' => auth()->user()->id,
            'total' => Cart::subtotal(),
            'quantity' => 1,
            'status' => Order::ORDERCOMPTITED,
            'code'=> 'ORD-' . Str::random(15),
        ]);

        foreach (Cart::content() as $item) {
            DB::table('order_product')->insert([
                'product_id' => $item->id,
                'order_id' => $order->id,
            ]);
        }

        Cart::destroy();
        return redirect()->back();
    }
}
