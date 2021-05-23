<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewProduct($id)
    {
        $product = DB::select('select p.id, price, name, image from products p
            inner join images i on p.id = i.product_id where p.id = ?', [$id]);
        return View('Product', ['products' => $product]);
    }

    public function viewCategory($category)
    {
        $products = DB::select('select p.id, price, name, category, slogan, image from categories c
            inner join products p on c.id = p.category_id
            inner join images i on p.id = i.product_id where c.category = ?', [$category]);
        return View('Container', ['products' => $products]);
    }
}
