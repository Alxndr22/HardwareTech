<?php

namespace App\Http\Controllers;

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
use Illuminate\Validation\ValidationException;

class SessionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//auth()->attempt(request(['email', 'password'])) == false
//auth()->attempt(['email'=> $request->input('email2'), 'password' => $request->input('password2')]) == false or auth()->attempt(['phone'=> $request->input('email2'), 'password' => $request->input('password2')]) == false
    public function login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('error_login', 'Невірний Email або пароль! Спробуйте ще раз.');
        }
        return redirect()->to('/profile');
    }

    public function update()
    {
        try {
            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'mid_name' => 'required',
                'phone' => 'required',
                'email' => 'required|email|max:255',
            ]);
        } catch (ValidationException $e) {
            return back()->with('error', 'Введені некоректні дані! Спробуйте ще раз.');
        }
        if(request('email') == auth()->user()->email or !User::where('email', '=', request('email'))->exists()) {
            $UpdateDetails = User::where('email', auth()->user()->email)->firstOrFail();
            $UpdateDetails->name = request('name');
            $UpdateDetails->surname = request('surname');
            $UpdateDetails->mid_name = request('mid_name');
            $UpdateDetails->phone = request('phone');
            $UpdateDetails->email = request('email');
            $UpdateDetails->save();
            auth()->logout();
            auth()->login($UpdateDetails);
        } else {
            return back()->with('error', 'Користувач з даним email вже існує! Введіть будь-ласка інший email.');
        }
        return redirect()->to('/profile');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }

    public function profile()
    {
//        Order::where('user_id', auth()->user()->id)
        $orders = DB::select('select o.price, o.created_at, main_image from users u
            inner join orders o on u.id = o.user_id inner join order_product op on o.id = op.order_id
            inner join products p on p.id = op.product_id where u.id = ? order by o.id desc', [auth()->user()->id]);
        return view('Profile', ['orders' => $orders, 'order_num' => count($orders)]);
    }
}
