<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class SearchController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function postSearch(Request $request)
    {
        $searchLogic = '%'.$request->input('search').'%';
        $products = DB::select('select id, price, name, small_image from
            products where name like ?', [$searchLogic]);
        return View('Container', ['products' => $products, 'category' => 'Your search result for '.$request->input('search')]);
    }

    public function postSearchCategory(Request $request, $category)
    {
        $searchLogic = '%'.$request->input('search').'%';
        $products = DB::select('select p.id, price, name, category, cat_image, small_image from categories c
            inner join products p on c.id = p.category_id where c.category = ? and name like ?', [$category, $searchLogic]);
        return View('Container', ['products' => $products, 'category' => $products[0]->category, 'slogan' => 'Your search result for '.$request->input('search')]);
    }
}
