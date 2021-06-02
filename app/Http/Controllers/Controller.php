<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $categories = ['Відеокарти', 'Материнські плати', 'Процесори', 'Оперативна пам\'ять',
            'Корпуси', 'Блоки живлення', 'Жорсткі диски'];
        $gpus = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[0]]);
        $mbs = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[1]]);
        $cpus = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[2]]);
        $rams = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[3]]);
        $frames = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[4]]);
        $supplies = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[5]]);
        $hdds = DB::select('SELECT p.id, p.small_image, p.name, price FROM categories c
                INNER JOIN products p ON c.id = p.category_id WHERE c.category = ?', [$categories[6]]);

        return view('LandingDesktop', ['gpus' => $gpus, 'mbs' => $mbs, 'cpus' => $cpus, 'rams' => $rams,
            'frames' => $frames, 'supplies' => $supplies, 'hdds' => $hdds])->
        with('pict', 'images/LandingBanner.jpg',)->with('slogan', ['top' => 'Сучасне комп’ютерне обладнання',
            'bottom' => 'Більше 20 тисяч товарів за привабливою низькою ціною']);
    }

    public function viewProduct($id)
    {
        $product = DB::select('select p.id, price, name, main_image, image, quantity, category from products p
            inner join images i on p.id = i.product_id inner join categories c on c.id = p.category_id where p.id = ?', [$id]);
        $likeProduct = DB::select('select p.id, price, name, small_image from products p
            inner join categories c on c.id = p.category_id where c.category = ?', [$product[0]->category]);
        $tags = DB::select('select tag_name, tag from products p
            inner join product_tag as t on t.product_id = p.id
            inner join tags on tag_id = tags.id where p.id = ?', [$id]);
        $comments = DB::select('select c.name, c.score, c.text from products p
            inner join comments as c on c.product_id = p.id where p.id = ?', [$id]);
        $groupedScores = DB::select('select count(*) as sumScore, max(score) as maxScore from products p
            inner join comments as c on c.product_id = p.id where p.id = ? group by score order by maxScore desc', [$id]);
        return View('Product', ['products' => $product, 'tags' => $tags, 'likeProduct' => $likeProduct, 'comments' => $comments, 'groupedScores' => $groupedScores]);
    }

    public function viewCategory($category)
    {
        $products = DB::select('select p.id, price, name, category, cat_image, slogan, small_image from categories c
            inner join products p on c.id = p.category_id where c.category = ?', [$category]);
        return View('Container', ['products' => $products, 'category' => $products[0]->category]);
    }

    public function saveComment($id)
    {
        $comment = new Comment(['name' => request('name'), 'score' => intval(request('rating')), 'text' => request('message'), 'product_id' => $id]);
        $comment->save();
        return redirect()->back();
    }
}
