<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category(['category' => 'Відеокарти', 'slogan' => 'Графічна складова твого персонального комп’ютеру']);
        $category2 = new Category(['category' => 'Материнські плати', 'slogan' => 'Основа твого комп’ютеру']);
        $category3 = new Category(['category' => 'Процесори', 'slogan' => 'Серце твого комп’ютеру']);
        $category1->save();
        $category2->save();
        $category3->save();

        $gpu1 = new Product(['name' => 'PNY gtx 560 4gb',
            'quantity' => 10,
            'price' => 3599,
            'category_id' => $category1->id]);
        $gpu2 = new Product(['name' => 'Gigabyte gtx 980 4gb',
            'quantity' => 10,
            'price' => 4899,
            'category_id' => $category1->id]);
        $gpu3 = new Product(['name' => 'Msi GeForce gtx-1070 ti titanium 8gb',
            'quantity' => 10,
            'price' => 18399,
            'category_id' => $category1->id]);
        $gpu4 = new Product(['name' => 'ASUS GeForce GT1030 2048Mb OC',
            'quantity' => 10,
            'price' => 3774,
            'category_id' => $category1->id]);
        $gpu5 = new Product(['name' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6',
            'quantity' => 10,
            'price' => 10189,
            'category_id' => $category1->id]);
        $gpu6 = new Product(['name' => 'GeForce GT730 2048Mb GIGABYTE',
            'quantity' => 10,
            'price' => 2541,
            'category_id' => $category1->id]);
        $gpu7 = new Product(['name' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE',
            'quantity' => 10,
            'price' => 9769,
            'category_id' => $category1->id]);
        $gpu8 = new Product(['name' => 'GIGABYTE GeForce GT1030 2048Mb Silent',
            'quantity' => 10,
            'price' => 3696,
            'category_id' => $category1->id]);
        $gpu9 = new Product(['name' => 'MSI GeForce GT 1030 AERO ITX 2GD4',
            'quantity' => 10,
            'price' => 3049,
            'category_id' => $category1->id]);
        $gpu10 = new Product(['name' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC',
            'quantity' => 10,
            'price' => 34499,
            'category_id' => $category1->id]);
        $gpu1->save();
        $gpu2->save();
        $gpu3->save();
        $gpu4->save();
        $gpu5->save();
        $gpu6->save();
        $gpu7->save();
        $gpu8->save();
        $gpu9->save();
        $gpu10->save();

        $mb1 = new Product(['name' => 'Asus Prime H410M-K',
            'quantity' => 10,
            'price' => 1999,
            'category_id' => $category2->id]);
        $mb2 = new Product(['name' => 'Asus Prime B460-Plus',
            'quantity' => 10,
            'price' => 3286,
            'category_id' => $category2->id]);
        $mb3 = new Product(['name' => 'MSI B450 Tomahawk Max',
            'quantity' => 10,
            'price' => 2549,
            'category_id' => $category2->id]);
        $mb4 = new Product(['name' => 'Gigabyte H410M H',
            'quantity' => 10,
            'price' => 2089,
            'category_id' => $category2->id]);
        $mb5 = new Product(['name' => 'Asus TUF B450-Pro Gaming',
            'quantity' => 10,
            'price' => 2808,
            'category_id' => $category2->id]);
        $mb6 = new Product(['name' => 'MSI B450-A Pro Max',
            'quantity' => 10,
            'price' => 2461,
            'category_id' => $category2->id]);
        $mb7 = new Product(['name' => 'Asus TUF Gaming B550M-Plus',
            'quantity' => 10,
            'price' => 3469,
            'category_id' => $category2->id]);
        $mb8 = new Product(['name' => 'Asus ROG Strix B360-F Gaming',
            'quantity' => 10,
            'price' => 4169,
            'category_id' => $category2->id]);
        $mb9 = new Product(['name' => 'MSI Z390-A Pro',
            'quantity' => 10,
            'price' => 3333,
            'category_id' => $category2->id]);
        $mb10 = new Product(['name' => 'Asus Prime X570-Pro',
            'quantity' => 10,
            'price' => 7304,
            'category_id' => $category2->id]);
        $mb1->save();
        $mb2->save();
        $mb3->save();
        $mb4->save();
        $mb5->save();
        $mb6->save();
        $mb7->save();
        $mb8->save();
        $mb9->save();
        $mb10->save();

        $cpu1 = new Product(['name' => 'AMD Ryzen 5 1600',
            'quantity' => 10,
            'price' => 3740,
            'category_id' => $category3->id]);
        $cpu2 = new Product(['name' => 'INTEL Core i3-10100',
            'quantity' => 10,
            'price' => 4119,
            'category_id' => $category3->id]);
        $cpu3 = new Product(['name' => 'INTEL Core i5-9400F',
            'quantity' => 10,
            'price' => 3589,
            'category_id' => $category3->id]);
        $cpu4 = new Product(['name' => 'Intel Core i5-10600KF',
            'quantity' => 10,
            'price' => 6849,
            'category_id' => $category3->id]);
        $cpu5 = new Product(['name' => 'AMD Ryzen 5 5600X',
            'quantity' => 10,
            'price' => 9509,
            'category_id' => $category3->id]);
        $cpu6 = new Product(['name' => 'Intel Core i5-11400F',
            'quantity' => 10,
            'price' => 6299,
            'category_id' => $category3->id]);
        $cpu7 = new Product(['name' => 'Intel Core i7-11700',
            'quantity' => 10,
            'price' => 11041,
            'category_id' => $category3->id]);
        $cpu8 = new Product(['name' => 'Intel Pentium Gold G5420',
            'quantity' => 10,
            'price' => 3335,
            'category_id' => $category3->id]);
        $cpu9 = new Product(['name' => 'AMD Ryzen 9 5950X',
            'quantity' => 10,
            'price' => 31886,
            'category_id' => $category3->id]);
        $cpu10 = new Product(['name' => 'Intel Core i9-11900',
            'quantity' => 10,
            'price' => 14699,
            'category_id' => $category3->id]);
        $cpu1->save();
        $cpu2->save();
        $cpu3->save();
        $cpu4->save();
        $cpu5->save();
        $cpu6->save();
        $cpu7->save();
        $cpu8->save();
        $cpu9->save();
        $cpu10->save();

        $gpu1_img1 = new Image([
            'image' => '1.png',
            'product_id' => $gpu1->id,
        ]);
        $gpu2_img1 = new Image([
            'image' => '2.jpg',
            'product_id' => $gpu2->id,
        ]);
        $gpu3_img1 = new Image([
            'image' => '3.jpg',
            'product_id' => $gpu3->id,
        ]);
        $gpu4_img1 = new Image([
            'image' => 'ASUS GeForce GT1030 2048Mb OC.jpg',
            'product_id' => $gpu4->id,
        ]);
        $gpu5_img1 = new Image([
            'image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6.png',
            'product_id' => $gpu5->id,
        ]);
        $gpu6_img1 = new Image([
            'image' => 'GeForce GT730 2048Mb GIGABYTE.jpg',
            'product_id' => $gpu6->id,
        ]);
        $gpu7_img1 = new Image([
            'image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE.jpg',
            'product_id' => $gpu7->id,
        ]);
        $gpu8_img1 = new Image([
            'image' => 'GIGABYTE GeForce GT1030 2048Mb Silent.jpg',
            'product_id' => $gpu8->id,
        ]);
        $gpu9_img1 = new Image([
            'image' => 'MSI GeForce GT 1030 AERO ITX 2GD4.jpg',
            'product_id' => $gpu9->id,
        ]);
        $gpu10_img1 = new Image([
            'image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC.jpg',
            'product_id' => $gpu10->id,
        ]);
        $gpu1_img1->save();
        $gpu2_img1->save();
        $gpu3_img1->save();
        $gpu4_img1->save();
        $gpu5_img1->save();
        $gpu6_img1->save();
        $gpu7_img1->save();
        $gpu8_img1->save();
        $gpu9_img1->save();
        $gpu10_img1->save();

        $mb1_img1 = new Image([
            'image' => 'Asus Prime H410M-K.jpg',
            'product_id' => $mb1->id,
        ]);
        $mb2_img1 = new Image([
            'image' => 'Asus Prime B460-Plus.jpg',
            'product_id' => $mb2->id,
        ]);
        $mb3_img1 = new Image([
            'image' => 'MSI B450 Tomahawk Max.jpg',
            'product_id' => $mb3->id,
        ]);
        $mb4_img1 = new Image([
            'image' => 'Gigabyte H410M H.png',
            'product_id' => $mb4->id,
        ]);
        $mb5_img1 = new Image([
            'image' => 'Asus TUF B450-Pro Gaming.jpg',
            'product_id' => $mb5->id,
        ]);
        $mb6_img1 = new Image([
            'image' => 'MSI B450-A Pro Max.png',
            'product_id' => $mb6->id,
        ]);
        $mb7_img1 = new Image([
            'image' => 'Asus TUF Gaming B550M-Plus.png',
            'product_id' => $mb7->id,
        ]);
        $mb8_img1 = new Image([
            'image' => 'Asus ROG Strix B360-F Gaming.jpg',
            'product_id' => $mb8->id,
        ]);
        $mb9_img1 = new Image([
            'image' => 'MSI Z390-A Pro.jpg',
            'product_id' => $mb9->id,
        ]);
        $mb10_img1 = new Image([
            'image' => 'Asus Prime X570-Pro.jpg',
            'product_id' => $mb10->id,
        ]);
        $mb1_img1->save();
        $mb2_img1->save();
        $mb3_img1->save();
        $mb4_img1->save();
        $mb5_img1->save();
        $mb6_img1->save();
        $mb7_img1->save();
        $mb8_img1->save();
        $mb9_img1->save();
        $mb10_img1->save();

        $cpu1_img1 = new Image([
            'image' => 'AMD Ryzen 5 1600.png',
            'product_id' => $cpu1->id,
        ]);
        $cpu2_img1 = new Image([
            'image' => 'INTEL Core i3-10100 3.6GHz s1200.png',
            'product_id' => $cpu2->id,
        ]);
        $cpu3_img1 = new Image([
            'image' => 'INTEL Core i5-9400F 2.9GHz s1151.png',
            'product_id' => $cpu3->id,
        ]);
        $cpu4_img1 = new Image([
            'image' => 'Intel Core i5-10600KF.jpg',
            'product_id' => $cpu4->id,
        ]);
        $cpu5_img1 = new Image([
            'image' => 'AMD Ryzen 5 5600X.jpg',
            'product_id' => $cpu5->id,
        ]);
        $cpu6_img1 = new Image([
            'image' => 'Intel Core i5-11400F.jpg',
            'product_id' => $cpu6->id,
        ]);
        $cpu7_img1 = new Image([
            'image' => 'Intel Core i7-11700.jpg',
            'product_id' => $cpu7->id,
        ]);
        $cpu8_img1 = new Image([
            'image' => 'Intel Pentium Gold G5420.jpg',
            'product_id' => $cpu8->id,
        ]);
        $cpu9_img1 = new Image([
            'image' => 'AMD Ryzen 9 5950X.jpg',
            'product_id' => $cpu9->id,
        ]);
        $cpu10_img1 = new Image([
            'image' => 'Intel Core i9-11900.jpg',
            'product_id' => $cpu10->id,
        ]);
        $cpu1_img1->save();
        $cpu2_img1->save();
        $cpu3_img1->save();
        $cpu4_img1->save();
        $cpu5_img1->save();
        $cpu6_img1->save();
        $cpu7_img1->save();
        $cpu8_img1->save();
        $cpu9_img1->save();
        $cpu10_img1->save();
    }
}
