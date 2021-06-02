<?php

namespace App\Http\Controllers;

use App\Models\NotLoggedOrder;
use App\Models\Order;
use App\Models\Product;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('Basket');
    }

    public function addToCart($id)
    {
//        $id = $request->input('id');
        $product = DB::select('select id, price, name, small_image from products where id = ?', [$id]);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "id" => $id,
                    "name" => $product[0]->name,
                    "quantity" => request('quantity') ? request('quantity') : 1,
                    "price" => $product[0]->price,
                    "image" => $product[0]->small_image
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += request('quantity') ? request('quantity') : 1;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "id" => $id,
            "name" => $product[0]->name,
            "quantity" => request('quantity') ? request('quantity') : 1,
            "price" => $product[0]->price,
            "image" => $product[0]->small_image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function totalPrice($id, $total) {
        return redirect()->back()->with('new_total', $total += session()->get('cart')[$id]['price']);
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove($id)
    {
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->back()->with('success', 'Product deleted successfully!');
        }
    }

    public function addOrder()
    {
        $delivery = null;
        if(request('deliv') == 'NP'){
            $delivery = "У відділення \"Нова пошта\"";
        }
        elseif(request('deliv') == 'runner') {
            $delivery = "Кур'єром по Києву";
        }
        elseif(request('deliv') == 'pick-up') {
            $delivery = "Пункт видачі замовлень (м. Київ, вул. Калачівстка 13)";
        }

        $payment = null;
        if(request('payment') == 'privat24'){
            $payment = "Приват24";
        }
        elseif(request('payment') == 'visa-master') {
            $payment = "Visa, Mastercard";
        }
        if(auth()->user()) {
            $order = new Order(['price' => request('total'), 'delivery' => $delivery, 'payment' => $payment,
                'user_id' => auth()->user()->id, 'name' => request('name'), 'surname' => request('surname'),
                'phone' => request('phone')]);
        } else {
            $order = new NotLoggedOrder(['price' => request('total'), 'delivery' => $delivery, 'payment' => $payment,
                'name' => request('name'), 'surname' => request('surname'), 'phone' => request('phone'),
                'email' => request('email')]);
        }
        $order->save();
        foreach (session('cart') as $cart => $product) {
            $order->products()->attach(Product::where('id', $product['id'])->firstOrFail());
        }
        session()->forget('cart');
        return redirect('/');
    }
}
