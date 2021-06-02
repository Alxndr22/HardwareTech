<?php

namespace App\Http\Controllers;

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

class RegistrationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('Authorization');
    }

    public function store()
    {
        try {
            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'mid_name' => 'required',
                'phone' => 'required',
                'email' => 'required|email|max:255',
                'password' => 'required|min:6',
                'password_confirm' => 'required|min:6'
            ]);
        } catch (ValidationException $e) {
            return back()->with('error', 'Введені некоректні дані! Спробуйте ще раз.');
        }

        if(request('password') != request('password_confirm')) {
            return back()->with('error', 'Passwords don\'t match.');
        }

        if(!User::where('email', '=', request('email'))->exists()) {
            $user = New User(request(['name', 'surname', 'mid_name', 'phone', 'email', 'password']));
            $user->save();
            auth()->login($user);
        }  else {
            return back()->with('error', 'Користувач з даним email вже існує! Введіть будь-ласка інший email.');
        }

        return redirect()->to('/profile');
    }
}
