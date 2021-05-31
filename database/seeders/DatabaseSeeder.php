<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Tag;
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
        $category1 = new Category(['category' => 'Відеокарти',
            'slogan' => 'Графічна складова твого персонального комп’ютеру',
            'cat_image' => 'Banner(videocard).jpg']);
        $category2 = new Category(['category' => 'Материнські плати',
            'slogan' => 'Основа твого комп’ютеру',
            'cat_image' => 'Banner(motherboard).jpg']);
        $category3 = new Category(['category' => 'Процесори',
            'slogan' => 'Серце твого комп’ютеру',
            'cat_image' => 'Banner(cpu).jpg']);
        $category4 = new Category(['category' => "Оперативна пам'ять",
            'slogan' => 'Розкриє потенціал твого процесора',
            'cat_image' => 'Banner(ram).jpg']);
        $category5 = new Category(['category' => "Корпуси",
            'slogan' => 'Зовнішній стиль твого комп’ютеру',
            'cat_image' => 'Banner(body).jpg']);
        $category6 = new Category(['category' => "Блоки живлення",
            'slogan' => 'Електрорушійна сила твого комп’ютеру',
            'cat_image' => 'Banner(power).jpg']);
        $category7 = new Category(['category' => "Жорсткі диски",
            'slogan' => 'Твоя інформація у надійних руках',
            'cat_image' => 'Banner(hdd).jpg']);
        $category1->save();
        $category2->save();
        $category3->save();
        $category4->save();
        $category5->save();
        $category6->save();
        $category7->save();

        $gpu1 = new Product(['name' => 'PNY NVIDIA GeForce GTX 1080 8GB',
            'quantity' => 9,
            'price' => 34729,
            'category_id' => $category1->id,
            'main_image' => '1.png',
            'small_image' => '1_s.png']);
        $gpu2 = new Product(['name' => 'Gigabyte gtx 980 4gb',
            'quantity' => 8,
            'price' => 4899,
            'category_id' => $category1->id,
            'main_image' => '2.jpg',
            'small_image' => '2_s.jpg']);
        $gpu3 = new Product(['name' => 'Msi GeForce gtx-1070 ti titanium 8gb',
            'quantity' => 4,
            'price' => 18399,
            'category_id' => $category1->id,
            'main_image' => '3.jpg',
            'small_image' => '3_s.jpg']);
        $gpu4 = new Product(['name' => 'ASUS GeForce GT1030 2048Mb OC',
            'quantity' => 5,
            'price' => 3774,
            'category_id' => $category1->id,
            'main_image' => 'ASUS GeForce GT1030 2048Mb OC.jpg',
            'small_image' => 'ASUS GeForce GT1030 2048Mb OC_s.jpg']);
        $gpu5 = new Product(['name' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6',
            'quantity' => 10,
            'price' => 10189,
            'category_id' => $category1->id,
            'main_image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6.png',
            'small_image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6_s.png']);
        $gpu6 = new Product(['name' => 'GeForce GT730 2048Mb GIGABYTE',
            'quantity' => 12,
            'price' => 2541,
            'category_id' => $category1->id,
            'main_image' => 'GeForce GT730 2048Mb GIGABYTE.jpg',
            'small_image' => 'GeForce GT730 2048Mb GIGABYTE_s.jpg']);
        $gpu7 = new Product(['name' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE',
            'quantity' => 7,
            'price' => 9769,
            'category_id' => $category1->id,
            'main_image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE.jpg',
            'small_image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE_s.jpg']);
        $gpu8 = new Product(['name' => 'GIGABYTE GeForce GT1030 2048Mb Silent',
            'quantity' => 10,
            'price' => 3696,
            'category_id' => $category1->id,
            'main_image' => 'GIGABYTE GeForce GT1030 2048Mb Silent.jpg',
            'small_image' => 'GIGABYTE GeForce GT1030 2048Mb Silent_s.jpg']);
        $gpu9 = new Product(['name' => 'MSI GeForce GT 1030 AERO ITX 2GD4',
            'quantity' => 13,
            'price' => 3049,
            'category_id' => $category1->id,
            'main_image' => 'MSI GeForce GT 1030 AERO ITX 2GD4.jpg',
            'small_image' => 'MSI GeForce GT 1030 AERO ITX 2GD4_s.jpg']);
        $gpu10 = new Product(['name' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC',
            'quantity' => 3,
            'price' => 34499,
            'category_id' => $category1->id,
            'main_image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC.jpg',
            'small_image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC_s.jpg']);
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
            'category_id' => $category2->id,
            'main_image' => 'Asus Prime H410M-K.jpg',
            'small_image' => 'Asus Prime H410M-K_s.jpg']);
        $mb2 = new Product(['name' => 'Asus Prime B460-Plus',
            'quantity' => 10,
            'price' => 3286,
            'category_id' => $category2->id,
            'main_image' => 'Asus Prime B460-Plus.jpg',
            'small_image' => 'Asus Prime B460-Plus_s.jpg']);
        $mb3 = new Product(['name' => 'MSI B450 Tomahawk Max',
            'quantity' => 10,
            'price' => 2549,
            'category_id' => $category2->id,
            'main_image' => 'MSI B450 Tomahawk Max.jpg',
            'small_image' => 'MSI B450 Tomahawk Max_s.jpg']);
        $mb4 = new Product(['name' => 'Gigabyte H410M H',
            'quantity' => 10,
            'price' => 2089,
            'category_id' => $category2->id,
            'main_image' => 'Gigabyte H410M H.png',
            'small_image' => 'Gigabyte H410M H_s.jpg']);
        $mb5 = new Product(['name' => 'Asus TUF B450-Pro Gaming',
            'quantity' => 10,
            'price' => 2808,
            'category_id' => $category2->id,
            'main_image' => 'Asus TUF B450-Pro Gaming.jpg',
            'small_image' => 'Asus TUF B450-Pro Gaming_s.jpg']);
        $mb6 = new Product(['name' => 'MSI B450-A Pro Max',
            'quantity' => 10,
            'price' => 2461,
            'category_id' => $category2->id,
            'main_image' => 'MSI B450-A Pro Max.png',
            'small_image' => 'MSI B450-A Pro Max_s.jpg']);
        $mb7 = new Product(['name' => 'Asus TUF Gaming B550M-Plus',
            'quantity' => 10,
            'price' => 3469,
            'category_id' => $category2->id,
            'main_image' => 'Asus TUF Gaming B550M-Plus.png',
            'small_image' => 'Asus TUF Gaming B550M-Plus_s.jpg']);
        $mb8 = new Product(['name' => 'Asus ROG Strix B360-F Gaming',
            'quantity' => 10,
            'price' => 4169,
            'category_id' => $category2->id,
            'main_image' => 'Asus ROG Strix B360-F Gaming.jpg',
            'small_image' => 'Asus ROG Strix B360-F Gaming_s.jpg']);
        $mb9 = new Product(['name' => 'MSI Z390-A Pro',
            'quantity' => 10,
            'price' => 3333,
            'category_id' => $category2->id,
            'main_image' => 'MSI Z390-A Pro.jpg',
            'small_image' => 'MSI Z390-A Pro_s.jpg']);
        $mb10 = new Product(['name' => 'Asus Prime X570-Pro',
            'quantity' => 10,
            'price' => 7304,
            'category_id' => $category2->id,
            'main_image' => 'Asus Prime X570-Pro.jpg',
            'small_image' => 'Asus Prime X570-Pro_s.jpg']);
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
            'category_id' => $category3->id,
            'main_image' => 'AMD Ryzen 5 1600.png',
            'small_image' => 'AMD Ryzen 5 1600_s.png']);
        $cpu2 = new Product(['name' => 'INTEL Core i3-10100',
            'quantity' => 10,
            'price' => 4119,
            'category_id' => $category3->id,
            'main_image' => 'INTEL Core i3-10100.png',
            'small_image' => 'INTEL Core i3-10100_s.png']);
        $cpu3 = new Product(['name' => 'INTEL Core i5-9400F',
            'quantity' => 10,
            'price' => 3589,
            'category_id' => $category3->id,
            'main_image' => 'INTEL Core i5-9400F.png',
            'small_image' => 'INTEL Core i5-9400F_s.png']);
        $cpu4 = new Product(['name' => 'Intel Core i5-10600KF',
            'quantity' => 10,
            'price' => 6849,
            'category_id' => $category3->id,
            'main_image' => 'Intel Core i5-10600KF.jpg',
            'small_image' => 'Intel Core i5-10600KF_s.jpg']);
        $cpu5 = new Product(['name' => 'AMD Ryzen 5 5600X',
            'quantity' => 10,
            'price' => 9509,
            'category_id' => $category3->id,
            'main_image' => 'AMD Ryzen 5 5600X.jpg',
            'small_image' => 'AMD Ryzen 5 5600X_s.jpg']);
        $cpu6 = new Product(['name' => 'Intel Core i5-11400F',
            'quantity' => 10,
            'price' => 6299,
            'category_id' => $category3->id,
            'main_image' => 'Intel Core i5-11400F.jpg',
            'small_image' => 'Intel Core i5-11400F_s.jpg']);
        $cpu7 = new Product(['name' => 'Intel Core i7-11700',
            'quantity' => 10,
            'price' => 11041,
            'category_id' => $category3->id,
            'main_image' => 'Intel Core i7-11700.jpg',
            'small_image' => 'Intel Core i7-11700_s.jpg']);
        $cpu8 = new Product(['name' => 'Intel Pentium Gold G5420',
            'quantity' => 10,
            'price' => 3335,
            'category_id' => $category3->id,
            'main_image' => 'Intel Pentium Gold G5420.jpg',
            'small_image' => 'Intel Pentium Gold G5420_s.jpg']);
        $cpu9 = new Product(['name' => 'AMD Ryzen 9 5950X',
            'quantity' => 10,
            'price' => 31886,
            'category_id' => $category3->id,
            'main_image' => 'AMD Ryzen 9 5950X.jpg',
            'small_image' => 'AMD Ryzen 9 5950X_s.jpg']);
        $cpu10 = new Product(['name' => 'Intel Core i9-11900',
            'quantity' => 10,
            'price' => 14699,
            'category_id' => $category3->id,
            'main_image' => 'Intel Core i9-11900.jpg',
            'small_image' => 'Intel Core i9-11900_s.jpg']);
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
            'image' => '1_1.jpg',
            'product_id' => $gpu1->id,
        ]);
        $gpu1_img2 = new Image([
            'image' => '1_2.jpg',
            'product_id' => $gpu1->id,
        ]);
        $gpu1_img3 = new Image([
            'image' => '1_3.jpg',
            'product_id' => $gpu1->id,
        ]);

        $gpu2_img1 = new Image([
            'image' => '2_1.jpg',
            'product_id' => $gpu2->id,
        ]);
        $gpu2_img2 = new Image([
            'image' => '2_2.jpg',
            'product_id' => $gpu2->id,
        ]);
        $gpu2_img3 = new Image([
            'image' => '2_3.jpg',
            'product_id' => $gpu2->id,
        ]);

        $gpu3_img1 = new Image([
            'image' => '3_1.jpg',
            'product_id' => $gpu3->id,
        ]);
        $gpu3_img2 = new Image([
            'image' => '3_2.jpg',
            'product_id' => $gpu3->id,
        ]);
        $gpu3_img3 = new Image([
            'image' => '3_3.jpg',
            'product_id' => $gpu3->id,
        ]);

        $gpu4_img1 = new Image([
            'image' => 'ASUS GeForce GT1030 2048Mb OC_1.jpg',
            'product_id' => $gpu4->id,
        ]);
        $gpu4_img2 = new Image([
            'image' => 'ASUS GeForce GT1030 2048Mb OC_2.jpg',
            'product_id' => $gpu4->id,
        ]);
        $gpu4_img3 = new Image([
            'image' => 'ASUS GeForce GT1030 2048Mb OC_3.jpg',
            'product_id' => $gpu4->id,
        ]);

        $gpu5_img1 = new Image([
            'image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6_1.jpg',
            'product_id' => $gpu5->id,
        ]);
        $gpu5_img2 = new Image([
            'image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6_2.jpg',
            'product_id' => $gpu5->id,
        ]);
        $gpu5_img3 = new Image([
            'image' => 'ASUS Phoenix GeForce GTX 1650 OC Edition 4GB GDDR6_3.jpg',
            'product_id' => $gpu5->id,
        ]);

        $gpu6_img1 = new Image([
            'image' => 'GeForce GT730 2048Mb GIGABYTE_1.jpg',
            'product_id' => $gpu6->id,
        ]);
        $gpu6_img2 = new Image([
            'image' => 'GeForce GT730 2048Mb GIGABYTE_2.jpg',
            'product_id' => $gpu6->id,
        ]);
        $gpu6_img3 = new Image([
            'image' => 'GeForce GT730 2048Mb GIGABYTE_3.jpg',
            'product_id' => $gpu6->id,
        ]);

        $gpu7_img1 = new Image([
            'image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE_1.jpg',
            'product_id' => $gpu7->id,
        ]);
        $gpu7_img2 = new Image([
            'image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE_2.jpg',
            'product_id' => $gpu7->id,
        ]);
        $gpu7_img3 = new Image([
            'image' => 'GeForce GTX1050 Ti 4096Mb GIGABYTE_3.jpg',
            'product_id' => $gpu7->id,
        ]);

        $gpu8_img1 = new Image([
            'image' => 'GIGABYTE GeForce GT1030 2048Mb Silent_1.jpg',
            'product_id' => $gpu8->id,
        ]);
        $gpu8_img2 = new Image([
            'image' => 'GIGABYTE GeForce GT1030 2048Mb Silent_2.jpg',
            'product_id' => $gpu8->id,
        ]);
        $gpu8_img3 = new Image([
            'image' => 'GIGABYTE GeForce GT1030 2048Mb Silent_3.jpg',
            'product_id' => $gpu8->id,
        ]);

        $gpu9_img1 = new Image([
            'image' => 'MSI GeForce GT 1030 AERO ITX 2GD4_1.jpg',
            'product_id' => $gpu9->id,
        ]);
        $gpu9_img2 = new Image([
            'image' => 'MSI GeForce GT 1030 AERO ITX 2GD4_2.jpg',
            'product_id' => $gpu9->id,
        ]);
        $gpu9_img3 = new Image([
            'image' => 'MSI GeForce GT 1030 AERO ITX 2GD4_3.jpg',
            'product_id' => $gpu9->id,
        ]);

        $gpu10_img1 = new Image([
            'image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC_1.png',
            'product_id' => $gpu10->id,
        ]);
        $gpu10_img2 = new Image([
            'image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC_2.jpg',
            'product_id' => $gpu10->id,
        ]);
        $gpu10_img3 = new Image([
            'image' => 'MSI GeForce RTX3060 12Gb VENTUS 3X OC_3.jpg',
            'product_id' => $gpu10->id,
        ]);
        $gpu1_img1->save();
        $gpu1_img2->save();
        $gpu1_img3->save();

        $gpu2_img1->save();
        $gpu2_img2->save();
        $gpu2_img3->save();

        $gpu3_img1->save();
        $gpu3_img2->save();
        $gpu3_img3->save();

        $gpu4_img1->save();
        $gpu4_img2->save();
        $gpu4_img3->save();

        $gpu5_img1->save();
        $gpu5_img2->save();
        $gpu5_img3->save();

        $gpu6_img1->save();
        $gpu6_img2->save();
        $gpu6_img3->save();

        $gpu7_img1->save();
        $gpu7_img2->save();
        $gpu7_img3->save();

        $gpu8_img1->save();
        $gpu8_img2->save();
        $gpu8_img3->save();

        $gpu9_img1->save();
        $gpu9_img2->save();
        $gpu9_img3->save();

        $gpu10_img1->save();
        $gpu10_img2->save();
        $gpu10_img3->save();

        $mb1_img1 = new Image([
            'image' => 'Asus Prime H410M-K_1.jpg',
            'product_id' => $mb1->id,
        ]);
        $mb2_img1 = new Image([
            'image' => 'Asus Prime B460-Plus_1.jpg',
            'product_id' => $mb2->id,
        ]);
        $mb3_img1 = new Image([
            'image' => 'MSI B450 Tomahawk Max_1.jpg',
            'product_id' => $mb3->id,
        ]);
        $mb4_img1 = new Image([
            'image' => 'Gigabyte H410M H_1.png',
            'product_id' => $mb4->id,
        ]);
        $mb5_img1 = new Image([
            'image' => 'Asus TUF B450-Pro Gaming_1.jpg',
            'product_id' => $mb5->id,
        ]);
        $mb6_img1 = new Image([
            'image' => 'MSI B450-A Pro Max_1.png',
            'product_id' => $mb6->id,
        ]);
        $mb7_img1 = new Image([
            'image' => 'Asus TUF Gaming B550M-Plus_1.png',
            'product_id' => $mb7->id,
        ]);
        $mb8_img1 = new Image([
            'image' => 'Asus ROG Strix B360-F Gaming_1.jpg',
            'product_id' => $mb8->id,
        ]);
        $mb9_img1 = new Image([
            'image' => 'MSI Z390-A Pro_1.jpg',
            'product_id' => $mb9->id,
        ]);
        $mb10_img1 = new Image([
            'image' => 'Asus Prime X570-Pro_1.jpg',
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
            'image' => 'AMD Ryzen 5 1600_1.jpg',
            'product_id' => $cpu1->id,
        ]);
        $cpu2_img1 = new Image([
            'image' => 'INTEL Core i3-10100_1.jpg',
            'product_id' => $cpu2->id,
        ]);
        $cpu3_img1 = new Image([
            'image' => 'INTEL Core i5-9400F_1.jpg',
            'product_id' => $cpu3->id,
        ]);
        $cpu4_img1 = new Image([
            'image' => 'Intel Core i5-10600KF_1.jpg',
            'product_id' => $cpu4->id,
        ]);
        $cpu5_img1 = new Image([
            'image' => 'AMD Ryzen 5 5600X_1.jpg',
            'product_id' => $cpu5->id,
        ]);
        $cpu6_img1 = new Image([
            'image' => 'Intel Core i5-11400F_1.jpg',
            'product_id' => $cpu6->id,
        ]);
        $cpu7_img1 = new Image([
            'image' => 'Intel Core i7-11700_1.jpg',
            'product_id' => $cpu7->id,
        ]);
        $cpu8_img1 = new Image([
            'image' => 'Intel Pentium Gold G5420_1.jpg',
            'product_id' => $cpu8->id,
        ]);
        $cpu9_img1 = new Image([
            'image' => 'AMD Ryzen 9 5950X_1.jpg',
            'product_id' => $cpu9->id,
        ]);
        $cpu10_img1 = new Image([
            'image' => 'Intel Core i9-11900_1.jpg',
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

        $tag1 = new Tag(['tag_name' => 'Тип', 'tag' => 'Відеокарта']);
        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'MSI']);
        $tag3 = new Tag(['tag_name' => 'Сімейство GPU', 'tag' => 'Nvidia']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce RTX 3060']);
        $tag5 = new Tag(['tag_name' => 'Інтерфейс підключення до материнської плати', 'tag' => 'PCI Express 4.0 (x16)']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '12288']);
        $tag7 = new Tag(['tag_name' => 'Тип пам’яті', 'tag' => 'GDDR6']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '192']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $gpu10->tags()->attach($tag1);
        $gpu10->tags()->attach($tag2);
        $gpu10->tags()->attach($tag3);
        $gpu10->tags()->attach($tag4);
        $gpu10->tags()->attach($tag5);
        $gpu10->tags()->attach($tag6);
        $gpu10->tags()->attach($tag7);
        $gpu10->tags()->attach($tag8);
        $gpu10->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'PNY']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GTX 1080']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '8192']);
        $tag7 = new Tag(['tag_name' => 'Тип пам’яті', 'tag' => 'GDDR5']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '256']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $gpu1->tags()->attach($tag1);
        $gpu1->tags()->attach($tag2);
        $gpu1->tags()->attach($tag3);
        $gpu1->tags()->attach($tag4);
        $gpu1->tags()->attach($tag5);
        $gpu1->tags()->attach($tag6);
        $gpu1->tags()->attach($tag7);
        $gpu1->tags()->attach($tag8);
        $gpu1->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'Gigabyte']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GTX 980']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '4096']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $gpu2->tags()->attach($tag1);
        $gpu2->tags()->attach($tag2);
        $gpu2->tags()->attach($tag3);
        $gpu2->tags()->attach($tag4);
        $gpu2->tags()->attach($tag5);
        $gpu2->tags()->attach($tag6);
        $gpu2->tags()->attach($tag7);
        $gpu2->tags()->attach($tag8);
        $gpu2->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'MSI']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GTX 1070 Ti']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '8192']);

        $tag2->save();
        $tag4->save();
        $tag6->save();


        $gpu3->tags()->attach($tag1);
        $gpu3->tags()->attach($tag2);
        $gpu3->tags()->attach($tag3);
        $gpu3->tags()->attach($tag4);
        $gpu3->tags()->attach($tag5);
        $gpu3->tags()->attach($tag6);
        $gpu3->tags()->attach($tag7);
        $gpu3->tags()->attach($tag8);
        $gpu3->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'ASUS']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GT 1030']);
        $tag5 = new Tag(['tag_name' => 'Інтерфейс підключення до материнської плати', 'tag' => 'PCI Express 3.0 (x16)']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '2048']);

        $tag2->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $gpu4->tags()->attach($tag1);
        $gpu4->tags()->attach($tag2);
        $gpu4->tags()->attach($tag3);
        $gpu4->tags()->attach($tag4);
        $gpu4->tags()->attach($tag5);
        $gpu4->tags()->attach($tag6);
        $gpu4->tags()->attach($tag7);
        $gpu4->tags()->attach($tag8);
        $gpu4->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'ASUS']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GTX 1650']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '4096']);
        $tag7 = new Tag(['tag_name' => 'Тип пам’яті', 'tag' => 'GDDR6']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '128']);

        $tag2->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $gpu5->tags()->attach($tag1);
        $gpu5->tags()->attach($tag2);
        $gpu5->tags()->attach($tag3);
        $gpu5->tags()->attach($tag4);
        $gpu5->tags()->attach($tag5);
        $gpu5->tags()->attach($tag6);
        $gpu5->tags()->attach($tag7);
        $gpu5->tags()->attach($tag8);
        $gpu5->tags()->attach($tag9);

        $tag2 = new Tag(['tag_name' => 'Виробник', 'tag' => 'Gigabyte']);
        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GT 730']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '2048']);
        $tag7 = new Tag(['tag_name' => 'Тип пам’яті', 'tag' => 'GDDR5']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '64']);

        $tag2->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $gpu6->tags()->attach($tag1);
        $gpu6->tags()->attach($tag2);
        $gpu6->tags()->attach($tag3);
        $gpu6->tags()->attach($tag4);
        $gpu6->tags()->attach($tag5);
        $gpu6->tags()->attach($tag6);
        $gpu6->tags()->attach($tag7);
        $gpu6->tags()->attach($tag8);
        $gpu6->tags()->attach($tag9);

        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GTX 1050 Ti']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '4096']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '128']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag4->save();
        $tag6->save();
        $tag8->save();
        $tag9->save();

        $gpu7->tags()->attach($tag1);
        $gpu7->tags()->attach($tag2);
        $gpu7->tags()->attach($tag3);
        $gpu7->tags()->attach($tag4);
        $gpu7->tags()->attach($tag5);
        $gpu7->tags()->attach($tag6);
        $gpu7->tags()->attach($tag7);
        $gpu7->tags()->attach($tag8);
        $gpu7->tags()->attach($tag9);

        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GT 1030']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '2048']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '64']);

        $tag4->save();
        $tag6->save();
        $tag8->save();

        $gpu8->tags()->attach($tag1);
        $gpu8->tags()->attach($tag2);
        $gpu8->tags()->attach($tag3);
        $gpu8->tags()->attach($tag4);
        $gpu8->tags()->attach($tag5);
        $gpu8->tags()->attach($tag6);
        $gpu8->tags()->attach($tag7);
        $gpu8->tags()->attach($tag8);
        $gpu8->tags()->attach($tag9);

        $tag4 = new Tag(['tag_name' => 'Графічний чіп', 'tag' => 'GeForce GT 1030']);
        $tag6 = new Tag(['tag_name' => 'Обсяг відеопам’яті (Мб)', 'tag' => '2048']);
        $tag7 = new Tag(['tag_name' => 'Тип пам’яті', 'tag' => 'GDDR5']);
        $tag8 = new Tag(['tag_name' => 'Розрядність шини пам’яті, біт', 'tag' => '64']);

        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $gpu9->tags()->attach($tag1);
        $gpu9->tags()->attach($tag2);
        $gpu9->tags()->attach($tag3);
        $gpu9->tags()->attach($tag4);
        $gpu9->tags()->attach($tag5);
        $gpu9->tags()->attach($tag6);
        $gpu9->tags()->attach($tag7);
        $gpu9->tags()->attach($tag8);
        $gpu9->tags()->attach($tag9);


        /* Motherboards */


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => 'Матеренська плата']);
        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket 1200']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'Intel H410']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'MicroATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag5 = new Tag(['tag_name' => "Кількість роз'ємів SATA II", 'tag' => 'Немає']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '4 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '2 х USB 3.2 / 4 х USB 2.0']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '22.6 x 20.3 см']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $mb1->tags()->attach($tag0);
        $mb1->tags()->attach($tag1);
        $mb1->tags()->attach($tag2);
        $mb1->tags()->attach($tag3);
        $mb1->tags()->attach($tag4);
        $mb1->tags()->attach($tag5);
        $mb1->tags()->attach($tag6);
        $mb1->tags()->attach($tag7);
        $mb1->tags()->attach($tag8);
        $mb1->tags()->attach($tag9);


        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'Intel B460']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag5 = new Tag(['tag_name' => "Кількість роз'ємів SATA II", 'tag' => 'Немає']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '2 х USB 2.0 / 4 х USB 3.2']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 x 22.86 см']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);


        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $mb2->tags()->attach($tag0);
        $mb2->tags()->attach($tag1);
        $mb2->tags()->attach($tag2);
        $mb2->tags()->attach($tag3);
        $mb2->tags()->attach($tag4);
        $mb2->tags()->attach($tag5);
        $mb2->tags()->attach($tag6);
        $mb2->tags()->attach($tag7);
        $mb2->tags()->attach($tag8);
        $mb2->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket AM4']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'AMD B450']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.2']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 x 22.86 см']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag4->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $mb3->tags()->attach($tag0);
        $mb3->tags()->attach($tag1);
        $mb3->tags()->attach($tag2);
        $mb3->tags()->attach($tag3);
        $mb3->tags()->attach($tag4);
        $mb3->tags()->attach($tag5);
        $mb3->tags()->attach($tag6);
        $mb3->tags()->attach($tag7);
        $mb3->tags()->attach($tag8);
        $mb3->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket 1200']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'Intel H410']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'microATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '4 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '4 х USB 2.0 / 2 х USB 3.2']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '22.6 x 17.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb4->tags()->attach($tag0);
        $mb4->tags()->attach($tag1);
        $mb4->tags()->attach($tag2);
        $mb4->tags()->attach($tag3);
        $mb4->tags()->attach($tag4);
        $mb4->tags()->attach($tag5);
        $mb4->tags()->attach($tag6);
        $mb4->tags()->attach($tag7);
        $mb4->tags()->attach($tag8);
        $mb4->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket AM4']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'AMD B450']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.1']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 x 24.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb5->tags()->attach($tag0);
        $mb5->tags()->attach($tag1);
        $mb5->tags()->attach($tag2);
        $mb5->tags()->attach($tag3);
        $mb5->tags()->attach($tag4);
        $mb5->tags()->attach($tag5);
        $mb5->tags()->attach($tag6);
        $mb5->tags()->attach($tag7);
        $mb5->tags()->attach($tag8);
        $mb5->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket AM4']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'AMD B450']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.2']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 x 24.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb6->tags()->attach($tag0);
        $mb6->tags()->attach($tag1);
        $mb6->tags()->attach($tag2);
        $mb6->tags()->attach($tag3);
        $mb6->tags()->attach($tag4);
        $mb6->tags()->attach($tag5);
        $mb6->tags()->attach($tag6);
        $mb6->tags()->attach($tag7);
        $mb6->tags()->attach($tag8);
        $mb6->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket AM4']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'AMD B450']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'microATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '2 x USB 2.0 / 5 х USB 3.2 / USB Type-C']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '24.4 x 24.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb7->tags()->attach($tag0);
        $mb7->tags()->attach($tag1);
        $mb7->tags()->attach($tag2);
        $mb7->tags()->attach($tag3);
        $mb7->tags()->attach($tag4);
        $mb7->tags()->attach($tag5);
        $mb7->tags()->attach($tag6);
        $mb7->tags()->attach($tag7);
        $mb7->tags()->attach($tag8);
        $mb7->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket 1151']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'Intel B360']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.1']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 x 24.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb8->tags()->attach($tag0);
        $mb8->tags()->attach($tag1);
        $mb8->tags()->attach($tag2);
        $mb8->tags()->attach($tag3);
        $mb8->tags()->attach($tag4);
        $mb8->tags()->attach($tag5);
        $mb8->tags()->attach($tag6);
        $mb8->tags()->attach($tag7);
        $mb8->tags()->attach($tag8);
        $mb8->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket 1151']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'Intel Z390']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.1 / 2 х USB 2.0 / 2 х USB 3.1 / USB Type-C']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.48 x 24.38 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb9->tags()->attach($tag0);
        $mb9->tags()->attach($tag1);
        $mb9->tags()->attach($tag2);
        $mb9->tags()->attach($tag3);
        $mb9->tags()->attach($tag4);
        $mb9->tags()->attach($tag5);
        $mb9->tags()->attach($tag6);
        $mb9->tags()->attach($tag7);
        $mb9->tags()->attach($tag8);
        $mb9->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сокет', 'tag' => 'Socket AM4']);
        $tag2 = new Tag(['tag_name' => 'Чипсет', 'tag' => 'AMD X570']);
        $tag3 = new Tag(['tag_name' => 'Формфактор', 'tag' => 'ATX']);
        $tag4 = new Tag(['tag_name' => 'Вбудоване відео', 'tag' => 'Наявне']);
        $tag6 = new Tag(['tag_name' => 'SATA III', 'tag' => '6 шт']);
        $tag7 = new Tag(['tag_name' => 'USB', 'tag' => '1 х USB 3.2']);
        $tag8 = new Tag(['tag_name' => 'Фізичні розміри', 'tag' => '30.5 х 24.4 см']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $mb10->tags()->attach($tag0);
        $mb10->tags()->attach($tag1);
        $mb10->tags()->attach($tag2);
        $mb10->tags()->attach($tag3);
        $mb10->tags()->attach($tag4);
        $mb10->tags()->attach($tag5);
        $mb10->tags()->attach($tag6);
        $mb10->tags()->attach($tag7);
        $mb10->tags()->attach($tag8);
        $mb10->tags()->attach($tag9);



        /* CPU */


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => 'Процесор']);
        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'AMD Ryzen 5']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket AM4']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '12']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '3.6 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '12 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Наявний']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $cpu1->tags()->attach($tag0);
        $cpu1->tags()->attach($tag1);
        $cpu1->tags()->attach($tag2);
        $cpu1->tags()->attach($tag3);
        $cpu1->tags()->attach($tag4);
        $cpu1->tags()->attach($tag5);
        $cpu1->tags()->attach($tag6);
        $cpu1->tags()->attach($tag7);
        $cpu1->tags()->attach($tag8);
        $cpu1->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i3']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1200']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '4']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '8']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.3 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Наявний']);
        $tag9 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();
        $tag9->save();

        $cpu2->tags()->attach($tag0);
        $cpu2->tags()->attach($tag1);
        $cpu2->tags()->attach($tag2);
        $cpu2->tags()->attach($tag3);
        $cpu2->tags()->attach($tag4);
        $cpu2->tags()->attach($tag5);
        $cpu2->tags()->attach($tag6);
        $cpu2->tags()->attach($tag7);
        $cpu2->tags()->attach($tag8);
        $cpu2->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i5']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1151']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '6']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.1 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();

        $cpu3->tags()->attach($tag0);
        $cpu3->tags()->attach($tag1);
        $cpu3->tags()->attach($tag2);
        $cpu3->tags()->attach($tag3);
        $cpu3->tags()->attach($tag4);
        $cpu3->tags()->attach($tag5);
        $cpu3->tags()->attach($tag6);
        $cpu3->tags()->attach($tag7);
        $cpu3->tags()->attach($tag8);
        $cpu3->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i5']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1200']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '12']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.8 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Немає']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu4->tags()->attach($tag0);
        $cpu4->tags()->attach($tag1);
        $cpu4->tags()->attach($tag2);
        $cpu4->tags()->attach($tag3);
        $cpu4->tags()->attach($tag4);
        $cpu4->tags()->attach($tag5);
        $cpu4->tags()->attach($tag6);
        $cpu4->tags()->attach($tag7);
        $cpu4->tags()->attach($tag8);
        $cpu4->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'AMD Ryzen 5']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket AM4']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '12']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.7 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '7 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Наявний']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu5->tags()->attach($tag0);
        $cpu5->tags()->attach($tag1);
        $cpu5->tags()->attach($tag2);
        $cpu5->tags()->attach($tag3);
        $cpu5->tags()->attach($tag4);
        $cpu5->tags()->attach($tag5);
        $cpu5->tags()->attach($tag6);
        $cpu5->tags()->attach($tag7);
        $cpu5->tags()->attach($tag8);
        $cpu5->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i5']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1200']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '12']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.4 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Наявний']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu6->tags()->attach($tag0);
        $cpu6->tags()->attach($tag1);
        $cpu6->tags()->attach($tag2);
        $cpu6->tags()->attach($tag3);
        $cpu6->tags()->attach($tag4);
        $cpu6->tags()->attach($tag5);
        $cpu6->tags()->attach($tag6);
        $cpu6->tags()->attach($tag7);
        $cpu6->tags()->attach($tag8);
        $cpu6->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i7']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1200']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '8']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Intel UHD Graphics 750']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '16']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '5.0 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Немає']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu7->tags()->attach($tag0);
        $cpu7->tags()->attach($tag1);
        $cpu7->tags()->attach($tag2);
        $cpu7->tags()->attach($tag3);
        $cpu7->tags()->attach($tag4);
        $cpu7->tags()->attach($tag5);
        $cpu7->tags()->attach($tag6);
        $cpu7->tags()->attach($tag7);
        $cpu7->tags()->attach($tag8);
        $cpu7->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Pentium Dual-Core']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1151']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '2']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Intel UHD Graphics 610']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '4']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '3.8 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Наявний']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu8->tags()->attach($tag0);
        $cpu8->tags()->attach($tag1);
        $cpu8->tags()->attach($tag2);
        $cpu8->tags()->attach($tag3);
        $cpu8->tags()->attach($tag4);
        $cpu8->tags()->attach($tag5);
        $cpu8->tags()->attach($tag6);
        $cpu8->tags()->attach($tag7);
        $cpu8->tags()->attach($tag8);
        $cpu8->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'AMD Ryzen 9']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket AM4']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '16']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Немає']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '32']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '4.9 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '7 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Немає']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu9->tags()->attach($tag0);
        $cpu9->tags()->attach($tag1);
        $cpu9->tags()->attach($tag2);
        $cpu9->tags()->attach($tag3);
        $cpu9->tags()->attach($tag4);
        $cpu9->tags()->attach($tag5);
        $cpu9->tags()->attach($tag6);
        $cpu9->tags()->attach($tag7);
        $cpu9->tags()->attach($tag8);
        $cpu9->tags()->attach($tag9);

        $tag1 = new Tag(['tag_name' => 'Сімейство процесорів', 'tag' => 'Intel Core i9']);
        $tag2 = new Tag(['tag_name' => "Тип роз'єму", 'tag' => 'Socket 1200']);
        $tag3 = new Tag(['tag_name' => 'Кількість ядер', 'tag' => '8']);
        $tag4 = new Tag(['tag_name' => 'Інтегрована графіка', 'tag' => 'Intel UHD Graphics 750']);
        $tag5 = new Tag(['tag_name' => "Кількість потоків", 'tag' => '16']);
        $tag6 = new Tag(['tag_name' => 'Максимальна тактова частота', 'tag' => '5.3 ГГц']);
        $tag7 = new Tag(['tag_name' => 'Техпроцес', 'tag' => '14 нм']);
        $tag8 = new Tag(['tag_name' => 'Наявніть кулера', 'tag' => 'Немає']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();
        $tag8->save();

        $cpu10->tags()->attach($tag0);
        $cpu10->tags()->attach($tag1);
        $cpu10->tags()->attach($tag2);
        $cpu10->tags()->attach($tag3);
        $cpu10->tags()->attach($tag4);
        $cpu10->tags()->attach($tag5);
        $cpu10->tags()->attach($tag6);
        $cpu10->tags()->attach($tag7);
        $cpu10->tags()->attach($tag8);
        $cpu10->tags()->attach($tag9);


        /* RAM */


        $ram1 = new Product(['name' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black',
            'quantity' => 6,
            'price' => 2764,
            'category_id' => $category4->id,
            'main_image' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black.jpg',
            'small_image' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black_s.jpg']);

        $ram1->save();

        $ram1_img1 = new Image([
            'image' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black_1.jpg',
            'product_id' => $ram1->id,
        ]);
        $ram1_img2 = new Image([
            'image' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black_2.jpg',
            'product_id' => $ram1->id,
        ]);
        $ram1_img3 = new Image([
            'image' => 'HyperX DDR4-3200 16384MB PC4-25600 (Kit of 2x8192) Fury Black_3.jpg',
            'product_id' => $ram1->id,
        ]);
        $ram1_img1->save();
        $ram1_img2->save();
        $ram1_img3->save();


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => "Оперативна пам'ять"]);
        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '16 Гб']);
        $tag2 = new Tag(['tag_name' => "Тип пам'яті", 'tag' => 'DDR4 SDRAM']);
        $tag3 = new Tag(['tag_name' => 'Напруга живлення', 'tag' => '1.35 В']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '3200 МГц']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '60 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();


        $ram1->tags()->attach($tag0);
        $ram1->tags()->attach($tag1);
        $ram1->tags()->attach($tag2);
        $ram1->tags()->attach($tag3);
        $ram1->tags()->attach($tag4);
        $ram1->tags()->attach($tag5);

        $ram2 = new Product(['name' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red',
            'quantity' => 8,
            'price' => 1899,
            'category_id' => $category4->id,
            'main_image' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red.jpg',
            'small_image' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red_s.jpg']);

        $ram2->save();

        $ram2_img1 = new Image([
            'image' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red_1.jpg',
            'product_id' => $ram2->id,
        ]);
        $ram2_img2 = new Image([
            'image' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red_2.jpg',
            'product_id' => $ram2->id,
        ]);
        $ram2_img3 = new Image([
            'image' => 'Crucial DDR4-3600 8192MB PC4-28800 Ballistix RGB Red_3.jpg',
            'product_id' => $ram2->id,
        ]);
        $ram2_img1->save();
        $ram2_img2->save();
        $ram2_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '8 Гб']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '3600 МГц']);

        $tag1->save();
        $tag4->save();

        $ram2->tags()->attach($tag0);
        $ram2->tags()->attach($tag1);
        $ram2->tags()->attach($tag2);
        $ram2->tags()->attach($tag3);
        $ram2->tags()->attach($tag4);
        $ram2->tags()->attach($tag5);

        $ram3 = new Product(['name' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black',
            'quantity' => 3,
            'price' => 1463,
            'category_id' => $category4->id,
            'main_image' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black.jpg',
            'small_image' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black_s.jpg']);

        $ram3->save();

        $ram3_img1 = new Image([
            'image' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black_1.jpg',
            'product_id' => $ram3->id,
        ]);
        $ram3_img2 = new Image([
            'image' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black_2.jpg',
            'product_id' => $ram3->id,
        ]);
        $ram3_img3 = new Image([
            'image' => 'HyperX DDR4-3200 8192MB PC4-25600 Fury Black_3.jpg',
            'product_id' => $ram3->id,
        ]);
        $ram3_img1->save();
        $ram3_img2->save();
        $ram3_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '8 Гб']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '3200 МГц']);

        $tag1->save();
        $tag4->save();

        $ram3->tags()->attach($tag0);
        $ram3->tags()->attach($tag1);
        $ram3->tags()->attach($tag2);
        $ram3->tags()->attach($tag3);
        $ram3->tags()->attach($tag4);
        $ram3->tags()->attach($tag5);

        $ram4 = new Product(['name' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black',
            'quantity' => 5,
            'price' => 3129,
            'category_id' => $category4->id,
            'main_image' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black.jpg',
            'small_image' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black_s.jpg']);

        $ram4->save();

        $ram4_img1 = new Image([
            'image' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black_1.jpg',
            'product_id' => $ram4->id,
        ]);
        $ram4_img2 = new Image([
            'image' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black_2.jpg',
            'product_id' => $ram4->id,
        ]);
        $ram4_img3 = new Image([
            'image' => 'HyperX DDR4-3333 16384MB PC4-26664 (Kit of 2x8192) Predator Black_3.jpg',
            'product_id' => $ram4->id,
        ]);
        $ram4_img1->save();
        $ram4_img2->save();
        $ram4_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '16 Гб']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '3333 МГц']);

        $tag1->save();
        $tag4->save();

        $ram4->tags()->attach($tag0);
        $ram4->tags()->attach($tag1);
        $ram4->tags()->attach($tag2);
        $ram4->tags()->attach($tag3);
        $ram4->tags()->attach($tag4);
        $ram4->tags()->attach($tag5);

        $ram5 = new Product(['name' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB',
            'quantity' => 2,
            'price' => 27999,
            'category_id' => $category4->id,
            'main_image' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB.jpg',
            'small_image' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB_s.jpg']);

        $ram5->save();

        $ram5_img1 = new Image([
            'image' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB_1.jpg',
            'product_id' => $ram5->id,
        ]);
        $ram5_img2 = new Image([
            'image' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB_2.jpg',
            'product_id' => $ram5->id,
        ]);
        $ram5_img3 = new Image([
            'image' => 'HyperX DDR4-3600 131072 MB PC4-28800 (Kit of 4x32768) Predator RGB_3.jpg',
            'product_id' => $ram5->id,
        ]);
        $ram5_img1->save();
        $ram5_img2->save();
        $ram5_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '128 Гб']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '3600 МГц']);

        $tag1->save();
        $tag4->save();

        $ram5->tags()->attach($tag0);
        $ram5->tags()->attach($tag1);
        $ram5->tags()->attach($tag2);
        $ram5->tags()->attach($tag3);
        $ram5->tags()->attach($tag4);
        $ram5->tags()->attach($tag5);

        $ram6 = new Product(['name' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact',
            'quantity' => 7,
            'price' => 1473,
            'category_id' => $category4->id,
            'main_image' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact.jpg',
            'small_image' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact_s.jpg']);

        $ram6->save();

        $ram6_img1 = new Image([
            'image' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact_1.jpg',
            'product_id' => $ram6->id,
        ]);
        $ram6_img2 = new Image([
            'image' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact_2.jpg',
            'product_id' => $ram6->id,
        ]);
        $ram6_img3 = new Image([
            'image' => '8GB 2666MHz DDR4 CL15 SODIMM HyperX Impact_3.jpg',
            'product_id' => $ram6->id,
        ]);
        $ram6_img1->save();
        $ram6_img2->save();
        $ram6_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '8 Гб']);
        $tag2 = new Tag(['tag_name' => "Тип пам'яті", 'tag' => 'DDR4']);
        $tag3 = new Tag(['tag_name' => 'Напруга живлення', 'tag' => '1.2 В']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '2666 МГц']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $ram6->tags()->attach($tag0);
        $ram6->tags()->attach($tag1);
        $ram6->tags()->attach($tag2);
        $ram6->tags()->attach($tag3);
        $ram6->tags()->attach($tag4);
        $ram6->tags()->attach($tag5);

        $ram7 = new Product(['name' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB',
            'quantity' => 4,
            'price' => 249,
            'category_id' => $category4->id,
            'main_image' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB.jpg',
            'small_image' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB_s.jpg']);

        $ram7->save();

        $ram7_img1 = new Image([
            'image' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB_1.jpg',
            'product_id' => $ram7->id,
        ]);
        $ram7_img2 = new Image([
            'image' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB_2.jpg',
            'product_id' => $ram7->id,
        ]);
        $ram7_img3 = new Image([
            'image' => 'AMD Radeon R5 Entertainment SO-DIMM DDR3L 1600MHz 2GB_3.jpg',
            'product_id' => $ram7->id,
        ]);
        $ram7_img1->save();
        $ram7_img2->save();
        $ram7_img3->save();

        $tag1 = new Tag(['tag_name' => "Обсяг пам'яті", 'tag' => '2 Гб']);
        $tag2 = new Tag(['tag_name' => "Тип пам'яті", 'tag' => 'DDR3']);
        $tag3 = new Tag(['tag_name' => 'Напруга живлення', 'tag' => '1.35 В']);
        $tag4 = new Tag(['tag_name' => "Частота пам'яті", 'tag' => '1600 МГц']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $ram7->tags()->attach($tag0);
        $ram7->tags()->attach($tag1);
        $ram7->tags()->attach($tag2);
        $ram7->tags()->attach($tag3);
        $ram7->tags()->attach($tag4);
        $ram7->tags()->attach($tag5);



        /* BODY */


        $body1 = new Product(['name' => 'Gamdias Argus E2 Elite',
            'quantity' => 5,
            'price' => 1299,
            'category_id' => $category5->id,
            'main_image' => 'Gamdias Argus E2 Elite.jpg',
            'small_image' => 'Gamdias Argus E2 Elite_s.jpg']);

        $body1->save();

        $body1_img1 = new Image([
            'image' => 'Gamdias Argus E2 Elite_1.jpg',
            'product_id' => $body1->id,
        ]);
        $body1_img2 = new Image([
            'image' => 'Gamdias Argus E2 Elite_2.jpg',
            'product_id' => $body1->id,
        ]);
        $body1_img3 = new Image([
            'image' => 'Gamdias Argus E2 Elite_3.jpg',
            'product_id' => $body1->id,
        ]);
        $body1_img1->save();
        $body1_img2->save();
        $body1_img3->save();


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => "Корпус"]);
        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '5.2']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '12 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();


        $body1->tags()->attach($tag0);
        $body1->tags()->attach($tag1);
        $body1->tags()->attach($tag2);
        $body1->tags()->attach($tag3);
        $body1->tags()->attach($tag4);
        $body1->tags()->attach($tag5);

        $body2 = new Product(['name' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black',
            'quantity' => 8,
            'price' => 2599,
            'category_id' => $category5->id,
            'main_image' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black.jpg',
            'small_image' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black_s.jpg']);

        $body2->save();

        $body2_img1 = new Image([
            'image' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black_1.jpg',
            'product_id' => $body2->id,
        ]);
        $body2_img2 = new Image([
            'image' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black_2.jpg',
            'product_id' => $body2->id,
        ]);
        $body2_img3 = new Image([
            'image' => 'Aerocool AirHawk Duo-G-BK-v1 ARGB Tempered Glass Black_3.jpg',
            'product_id' => $body2->id,
        ]);
        $body2_img1->save();
        $body2_img2->save();
        $body2_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, EATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '4.2']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body2->tags()->attach($tag0);
        $body2->tags()->attach($tag1);
        $body2->tags()->attach($tag2);
        $body2->tags()->attach($tag3);
        $body2->tags()->attach($tag4);
        $body2->tags()->attach($tag5);

        $body3 = new Product(['name' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500',
            'quantity' => 10,
            'price' => 1849,
            'category_id' => $category5->id,
            'main_image' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500.jpg',
            'small_image' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500_s.jpg']);

        $body3->save();

        $body3_img1 = new Image([
            'image' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500_1.jpg',
            'product_id' => $body3->id,
        ]);
        $body3_img2 = new Image([
            'image' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500_2.jpg',
            'product_id' => $body3->id,
        ]);
        $body3_img3 = new Image([
            'image' => 'Aerocool Menace Saturn FRGB-G-BK-v1 та БЖ Aerocool VX Plus 500_3.jpg',
            'product_id' => $body3->id,
        ]);
        $body3_img1->save();
        $body3_img2->save();
        $body3_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => '500 Вт']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '4.6']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body3->tags()->attach($tag0);
        $body3->tags()->attach($tag1);
        $body3->tags()->attach($tag2);
        $body3->tags()->attach($tag3);
        $body3->tags()->attach($tag4);
        $body3->tags()->attach($tag5);

        $body4 = new Product(['name' => 'DeepCool Gamerstorm Macube 310P White',
            'quantity' => 10,
            'price' => 2350,
            'category_id' => $category5->id,
            'main_image' => 'DeepCool Gamerstorm Macube 310P White.jpg',
            'small_image' => 'DeepCool Gamerstorm Macube 310P White_s.jpg']);

        $body4->save();

        $body4_img1 = new Image([
            'image' => 'DeepCool Gamerstorm Macube 310P White_1.jpg',
            'product_id' => $body4->id,
        ]);
        $body4_img2 = new Image([
            'image' => 'DeepCool Gamerstorm Macube 310P White_2.jpg',
            'product_id' => $body4->id,
        ]);
        $body4_img3 = new Image([
            'image' => 'DeepCool Gamerstorm Macube 310P White_3.jpg',
            'product_id' => $body4->id,
        ]);
        $body4_img1->save();
        $body4_img2->save();
        $body4_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '8.33']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '12 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body4->tags()->attach($tag0);
        $body4->tags()->attach($tag1);
        $body4->tags()->attach($tag2);
        $body4->tags()->attach($tag3);
        $body4->tags()->attach($tag4);
        $body4->tags()->attach($tag5);

        $body5 = new Product(['name' => 'be quiet! Pure Base 500DX White',
            'quantity' => 4,
            'price' => 3549,
            'category_id' => $category5->id,
            'main_image' => 'be quiet! Pure Base 500DX White.jpg',
            'small_image' => 'be quiet! Pure Base 500DX White_s.jpg']);

        $body5->save();

        $body5_img1 = new Image([
            'image' => 'be quiet! Pure Base 500DX White_1.jpg',
            'product_id' => $body5->id,
        ]);
        $body5_img2 = new Image([
            'image' => 'be quiet! Pure Base 500DX White_2.jpg',
            'product_id' => $body5->id,
        ]);
        $body5_img3 = new Image([
            'image' => 'be quiet! Pure Base 500DX White_3.jpg',
            'product_id' => $body5->id,
        ]);
        $body5_img1->save();
        $body5_img2->save();
        $body5_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '7.8']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body5->tags()->attach($tag0);
        $body5->tags()->attach($tag1);
        $body5->tags()->attach($tag2);
        $body5->tags()->attach($tag3);
        $body5->tags()->attach($tag4);
        $body5->tags()->attach($tag5);

        $body6 = new Product(['name' => 'FSP CST110',
            'quantity' => 7,
            'price' => 949,
            'category_id' => $category5->id,
            'main_image' => 'FSP CST110.jpg',
            'small_image' => 'FSP CST110_s.jpg']);

        $body6->save();

        $body6_img1 = new Image([
            'image' => 'FSP CST110_1.jpg',
            'product_id' => $body6->id,
        ]);
        $body6_img2 = new Image([
            'image' => 'FSP CST110_2.jpg',
            'product_id' => $body6->id,
        ]);
        $body6_img3 = new Image([
            'image' => 'FSP CST110_3.jpg',
            'product_id' => $body6->id,
        ]);
        $body6_img1->save();
        $body6_img2->save();
        $body6_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '4.4']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Small Form Factor']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body6->tags()->attach($tag0);
        $body6->tags()->attach($tag1);
        $body6->tags()->attach($tag2);
        $body6->tags()->attach($tag3);
        $body6->tags()->attach($tag4);
        $body6->tags()->attach($tag5);

        $body7 = new Product(['name' => 'DEEPCOOL Matrexx 55 Mesh',
            'quantity' => 8,
            'price' => 1499,
            'category_id' => $category5->id,
            'main_image' => 'DEEPCOOL Matrexx 55 Mesh.jpg',
            'small_image' => 'DEEPCOOL Matrexx 55 Mesh_s.jpg']);

        $body7->save();

        $body7_img1 = new Image([
            'image' => 'DEEPCOOL Matrexx 55 Mesh_1.jpg',
            'product_id' => $body7->id,
        ]);
        $body7_img2 = new Image([
            'image' => 'DEEPCOOL Matrexx 55 Mesh_2.jpg',
            'product_id' => $body7->id,
        ]);
        $body7_img3 = new Image([
            'image' => 'DEEPCOOL Matrexx 55 Mesh_3.jpg',
            'product_id' => $body7->id,
        ]);
        $body7_img1->save();
        $body7_img2->save();
        $body7_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, EATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '6.6']);
        $tag4 = new Tag(['tag_name' => "Тип корпусу", 'tag' => 'Miditower']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '12 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();

        $body7->tags()->attach($tag0);
        $body7->tags()->attach($tag1);
        $body7->tags()->attach($tag2);
        $body7->tags()->attach($tag3);
        $body7->tags()->attach($tag4);
        $body7->tags()->attach($tag5);

        $body8 = new Product(['name' => 'CORSAIR Carbide 275R Airflow White',
            'quantity' => 13,
            'price' => 2399,
            'category_id' => $category5->id,
            'main_image' => 'CORSAIR Carbide 275R Airflow White.jpg',
            'small_image' => 'CORSAIR Carbide 275R Airflow White_s.jpg']);

        $body8->save();

        $body8_img1 = new Image([
            'image' => 'CORSAIR Carbide 275R Airflow White_1.jpg',
            'product_id' => $body8->id,
        ]);
        $body8_img2 = new Image([
            'image' => 'CORSAIR Carbide 275R Airflow White_2.jpg',
            'product_id' => $body8->id,
        ]);
        $body8_img3 = new Image([
            'image' => 'CORSAIR Carbide 275R Airflow White_3.jpg',
            'product_id' => $body8->id,
        ]);
        $body8_img1->save();
        $body8_img2->save();
        $body8_img3->save();

        $tag1 = new Tag(['tag_name' => "Блок живлення", 'tag' => 'Без блока живлення']);
        $tag2 = new Tag(['tag_name' => "Форм-фактор материнської плати", 'tag' => 'ATX, Mini-ITX, microATX']);
        $tag3 = new Tag(['tag_name' => 'Вага', 'tag' => '6.9']);
        $tag5 = new Tag(['tag_name' => 'Гарантія', 'tag' => '12 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag5->save();

        $body8->tags()->attach($tag0);
        $body8->tags()->attach($tag1);
        $body8->tags()->attach($tag2);
        $body8->tags()->attach($tag3);
        $body8->tags()->attach($tag4);
        $body8->tags()->attach($tag5);



        /* POWER SUPPLY */


        $power1 = new Product(['name' => 'Aerocool VX 800 Plus 800W',
            'quantity' => 8,
            'price' => 1449,
            'category_id' => $category6->id,
            'main_image' => 'Aerocool VX 800 Plus 800W.jpg',
            'small_image' => 'Aerocool VX 800 Plus 800W_s.jpg']);

        $power1->save();

        $power1_img1 = new Image([
            'image' => 'Aerocool VX 800 Plus 800W_1.jpg',
            'product_id' => $power1->id,
        ]);
        $power1_img2 = new Image([
            'image' => 'Aerocool VX 800 Plus 800W_2.jpg',
            'product_id' => $power1->id,
        ]);
        $power1_img3 = new Image([
            'image' => 'Aerocool VX 800 Plus 800W_3.jpg',
            'product_id' => $power1->id,
        ]);
        $power1_img1->save();
        $power1_img2->save();
        $power1_img3->save();


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => "Блок живлення"]);
        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '800 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '4']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '4x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '150 х 86 х 140']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power1->tags()->attach($tag0);
        $power1->tags()->attach($tag1);
        $power1->tags()->attach($tag2);
        $power1->tags()->attach($tag3);
        $power1->tags()->attach($tag4);
        $power1->tags()->attach($tag5);
        $power1->tags()->attach($tag6);

        $power2 = new Product(['name' => 'Zalman GigaMax ZM550-GVII APFC',
            'quantity' => 4,
            'price' => 1479,
            'category_id' => $category6->id,
            'main_image' => 'Zalman GigaMax ZM550-GVII APFC.jpg',
            'small_image' => 'Zalman GigaMax ZM550-GVII APFC_s.jpg']);

        $power2->save();

        $power2_img1 = new Image([
            'image' => 'Zalman GigaMax ZM550-GVII APFC_1.jpg',
            'product_id' => $power2->id,
        ]);
        $power2_img2 = new Image([
            'image' => 'Zalman GigaMax ZM550-GVII APFC_2.jpg',
            'product_id' => $power2->id,
        ]);
        $power2_img3 = new Image([
            'image' => 'Zalman GigaMax ZM550-GVII APFC_3.jpg',
            'product_id' => $power2->id,
        ]);
        $power2_img1->save();
        $power2_img2->save();
        $power2_img3->save();

        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '550 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '2']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '5']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '2x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '150 х 86 х 140']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power2->tags()->attach($tag0);
        $power2->tags()->attach($tag1);
        $power2->tags()->attach($tag2);
        $power2->tags()->attach($tag3);
        $power2->tags()->attach($tag4);
        $power2->tags()->attach($tag5);
        $power2->tags()->attach($tag6);

        $power3 = new Product(['name' => 'Chieftec GPS-600A8 600W',
            'quantity' => 6,
            'price' => 1299,
            'category_id' => $category6->id,
            'main_image' => 'Chieftec GPS-600A8 600W.jpg',
            'small_image' => 'Chieftec GPS-600A8 600W_s.jpg']);

        $power3->save();

        $power3_img1 = new Image([
            'image' => 'Chieftec GPS-600A8 600W_1.jpg',
            'product_id' => $power3->id,
        ]);
        $power3_img2 = new Image([
            'image' => 'Chieftec GPS-600A8 600W_2.jpg',
            'product_id' => $power3->id,
        ]);
        $power3_img3 = new Image([
            'image' => 'Chieftec GPS-600A8 600W_3.jpg',
            'product_id' => $power3->id,
        ]);
        $power3_img1->save();
        $power3_img2->save();
        $power3_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '600 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '2']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '4']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '2x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '140 x 150 x 87']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power3->tags()->attach($tag0);
        $power3->tags()->attach($tag1);
        $power3->tags()->attach($tag2);
        $power3->tags()->attach($tag3);
        $power3->tags()->attach($tag4);
        $power3->tags()->attach($tag5);
        $power3->tags()->attach($tag6);

        $power4 = new Product(['name' => 'be quiet! Straight Power 11 750W',
            'quantity' => 8,
            'price' => 4199,
            'category_id' => $category6->id,
            'main_image' => 'be quiet! Straight Power 11 750W.jpg',
            'small_image' => 'be quiet! Straight Power 11 750W_s.jpg']);

        $power4->save();

        $power4_img1 = new Image([
            'image' => 'be quiet! Straight Power 11 750W_1.jpg',
            'product_id' => $power4->id,
        ]);
        $power4_img2 = new Image([
            'image' => 'be quiet! Straight Power 11 750W_2.jpg',
            'product_id' => $power4->id,
        ]);
        $power4_img3 = new Image([
            'image' => 'be quiet! Straight Power 11 750W_3.jpg',
            'product_id' => $power4->id,
        ]);
        $power4_img1->save();
        $power4_img2->save();
        $power4_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '750 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '4']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '11']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '4x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '170 x 150 x 86']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '60 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power4->tags()->attach($tag0);
        $power4->tags()->attach($tag1);
        $power4->tags()->attach($tag2);
        $power4->tags()->attach($tag3);
        $power4->tags()->attach($tag4);
        $power4->tags()->attach($tag5);
        $power4->tags()->attach($tag6);

        $power5 = new Product(['name' => 'Vinga 750W',
            'quantity' => 11,
            'price' => 2649,
            'category_id' => $category6->id,
            'main_image' => 'Vinga 750W.jpg',
            'small_image' => 'Vinga 750W_s.jpg']);

        $power5->save();

        $power5_img1 = new Image([
            'image' => 'Vinga 750W_1.jpg',
            'product_id' => $power5->id,
        ]);
        $power5_img2 = new Image([
            'image' => 'Vinga 750W_2.jpg',
            'product_id' => $power5->id,
        ]);
        $power5_img3 = new Image([
            'image' => 'Vinga 750W_3.jpg',
            'product_id' => $power5->id,
        ]);
        $power5_img1->save();
        $power5_img2->save();
        $power5_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '750 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '3']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '12']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '4x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '190 х 152 х 86']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power5->tags()->attach($tag0);
        $power5->tags()->attach($tag1);
        $power5->tags()->attach($tag2);
        $power5->tags()->attach($tag3);
        $power5->tags()->attach($tag4);
        $power5->tags()->attach($tag5);
        $power5->tags()->attach($tag6);

        $power6 = new Product(['name' => 'AeroCool 550W AERO BRONZE',
            'quantity' => 14,
            'price' => 1549,
            'category_id' => $category6->id,
            'main_image' => 'AeroCool 550W AERO BRONZE.jpg',
            'small_image' => 'AeroCool 550W AERO BRONZE_s.jpg']);

        $power6->save();

        $power6_img1 = new Image([
            'image' => 'AeroCool 550W AERO BRONZE_1.jpg',
            'product_id' => $power6->id,
        ]);
        $power6_img2 = new Image([
            'image' => 'AeroCool 550W AERO BRONZE_2.jpg',
            'product_id' => $power6->id,
        ]);
        $power6_img3 = new Image([
            'image' => 'AeroCool 550W AERO BRONZE_3.jpg',
            'product_id' => $power6->id,
        ]);
        $power6_img1->save();
        $power6_img2->save();
        $power6_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '550 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '2']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '5']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '2x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '150 х 86 х 140']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power6->tags()->attach($tag0);
        $power6->tags()->attach($tag1);
        $power6->tags()->attach($tag2);
        $power6->tags()->attach($tag3);
        $power6->tags()->attach($tag4);
        $power6->tags()->attach($tag5);
        $power6->tags()->attach($tag6);

        $power7 = new Product(['name' => 'CHIEFTEC 400W Solid',
            'quantity' => 6,
            'price' => 973,
            'category_id' => $category6->id,
            'main_image' => 'CHIEFTEC 400W Solid.jpg',
            'small_image' => 'CHIEFTEC 400W Solid_s.jpg']);

        $power7->save();

        $power7_img1 = new Image([
            'image' => 'CHIEFTEC 400W Solid_1.jpg',
            'product_id' => $power7->id,
        ]);
        $power7_img2 = new Image([
            'image' => 'CHIEFTEC 400W Solid_2.jpg',
            'product_id' => $power7->id,
        ]);
        $power7_img3 = new Image([
            'image' => 'CHIEFTEC 400W Solid_3.jpg',
            'product_id' => $power7->id,
        ]);
        $power7_img1->save();
        $power7_img2->save();
        $power7_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '400 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '1']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '5']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '1x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '150 х 86 х 140']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power7->tags()->attach($tag0);
        $power7->tags()->attach($tag1);
        $power7->tags()->attach($tag2);
        $power7->tags()->attach($tag3);
        $power7->tags()->attach($tag4);
        $power7->tags()->attach($tag5);
        $power7->tags()->attach($tag6);

        $power8 = new Product(['name' => 'CHIEFTEC 600W Proton',
            'quantity' => 3,
            'price' => 1559,
            'category_id' => $category6->id,
            'main_image' => 'CHIEFTEC 600W Proton.jpg',
            'small_image' => 'CHIEFTEC 600W Proton_s.jpg']);

        $power8->save();

        $power8_img1 = new Image([
            'image' => 'CHIEFTEC 600W Proton_1.jpg',
            'product_id' => $power8->id,
        ]);
        $power8_img2 = new Image([
            'image' => 'CHIEFTEC 600W Proton_2.jpg',
            'product_id' => $power8->id,
        ]);
        $power8_img3 = new Image([
            'image' => 'CHIEFTEC 600W Proton_3.jpg',
            'product_id' => $power8->id,
        ]);
        $power8_img1->save();
        $power8_img2->save();
        $power8_img3->save();


        $tag1 = new Tag(['tag_name' => "Потужність", 'tag' => '600 Вт']);
        $tag2 = new Tag(['tag_name' => "Кількість роз'ємів додаткового живлення для відеокарт", 'tag' => '2']);
        $tag3 = new Tag(['tag_name' => 'Кількість SATA роз’ємів', 'tag' => '6']);
        $tag4 = new Tag(['tag_name' => "Тип роз'ємів додаткового живлення для відеокарт", 'tag' => '2x(6+2pin)']);
        $tag5 = new Tag(['tag_name' => "Розміри (мм)", 'tag' => '150 х 86 х 140']);
        $tag6 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();

        $power8->tags()->attach($tag0);
        $power8->tags()->attach($tag1);
        $power8->tags()->attach($tag2);
        $power8->tags()->attach($tag3);
        $power8->tags()->attach($tag4);
        $power8->tags()->attach($tag5);
        $power8->tags()->attach($tag6);



        /* HDD */


        $hdd1 = new Product(['name' => 'Seagate BarraCuda 3.5"',
            'quantity' => 9,
            'price' => 1219,
            'category_id' => $category7->id,
            'main_image' => 'Seagate BarraCuda 3.5.jpg',
            'small_image' => 'Seagate BarraCuda 3.5_s.jpg']);

        $hdd1->save();

        $hdd1_img1 = new Image([
            'image' => 'Seagate BarraCuda 3.5_1.jpg',
            'product_id' => $hdd1->id,
        ]);
        $hdd1_img2 = new Image([
            'image' => 'Seagate BarraCuda 3.5_2.jpg',
            'product_id' => $hdd1->id,
        ]);
        $hdd1_img3 = new Image([
            'image' => 'Seagate BarraCuda 3.5_3.jpg',
            'product_id' => $hdd1->id,
        ]);
        $hdd1_img1->save();
        $hdd1_img2->save();
        $hdd1_img3->save();


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => "Жорсткий диск"]);
        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '1 Тб']);
        $tag2 = new Tag(['tag_name' => "Тип жорсткого диска", 'tag' => 'Внутрішній']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'SATAIII']);
        $tag4 = new Tag(['tag_name' => "Форм-фактор", 'tag' => '3.5"']);
        $tag5 = new Tag(['tag_name' => "Швидкість обертання шпинделя", 'tag' => '7200']);
        $tag6 = new Tag(['tag_name' => "Швидкість передавання даних", 'tag' => '210 Мб/с']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();

        $hdd1->tags()->attach($tag0);
        $hdd1->tags()->attach($tag1);
        $hdd1->tags()->attach($tag2);
        $hdd1->tags()->attach($tag3);
        $hdd1->tags()->attach($tag4);
        $hdd1->tags()->attach($tag5);
        $hdd1->tags()->attach($tag6);
        $hdd1->tags()->attach($tag7);

        $hdd2 = new Product(['name' => 'Toshiba P300 2TB 7200rpm 64MB',
            'quantity' => 5,
            'price' => 2009,
            'category_id' => $category7->id,
            'main_image' => 'Toshiba P300 2TB 7200rpm 64MB.jpg',
            'small_image' => 'Toshiba P300 2TB 7200rpm 64MB_s.jpg']);

        $hdd2->save();

        $hdd2_img1 = new Image([
            'image' => 'Toshiba P300 2TB 7200rpm 64MB_1.jpg',
            'product_id' => $hdd2->id,
        ]);
        $hdd2_img2 = new Image([
            'image' => 'Toshiba P300 2TB 7200rpm 64MB_2.jpg',
            'product_id' => $hdd2->id,
        ]);
        $hdd2_img3 = new Image([
            'image' => 'Toshiba P300 2TB 7200rpm 64MB_3.jpg',
            'product_id' => $hdd2->id,
        ]);
        $hdd2_img1->save();
        $hdd2_img2->save();
        $hdd2_img3->save();


        $tag0 = new Tag(['tag_name' => 'Тип', 'tag' => "Жорсткий диск"]);
        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '2 Тб']);
        $tag2 = new Tag(['tag_name' => "Тип жорсткого диска", 'tag' => 'Внутрішній']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'SATAIII']);
        $tag4 = new Tag(['tag_name' => "Форм-фактор", 'tag' => '3.5"']);
        $tag5 = new Tag(['tag_name' => "Швидкість обертання шпинделя", 'tag' => '7200']);
        $tag6 = new Tag(['tag_name' => "Швидкість передавання даних", 'tag' => '200 Мб/с']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag0->save();
        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();

        $hdd2->tags()->attach($tag0);
        $hdd2->tags()->attach($tag1);
        $hdd2->tags()->attach($tag2);
        $hdd2->tags()->attach($tag3);
        $hdd2->tags()->attach($tag4);
        $hdd2->tags()->attach($tag5);
        $hdd2->tags()->attach($tag6);
        $hdd2->tags()->attach($tag7);

        $hdd3 = new Product(['name' => 'WD Blue WD10EZEX',
            'quantity' => 8,
            'price' => 2159,
            'category_id' => $category7->id,
            'main_image' => 'WD Blue WD10EZEX.jpg',
            'small_image' => 'WD Blue WD10EZEX_s.jpg']);

        $hdd3->save();

        $hdd3_img1 = new Image([
            'image' => 'WD Blue WD10EZEX_1.jpg',
            'product_id' => $hdd3->id,
        ]);
        $hdd3_img2 = new Image([
            'image' => 'WD Blue WD10EZEX_2.jpg',
            'product_id' => $hdd3->id,
        ]);
        $hdd3_img3 = new Image([
            'image' => 'WD Blue WD10EZEX_3.jpg',
            'product_id' => $hdd3->id,
        ]);
        $hdd3_img1->save();
        $hdd3_img2->save();
        $hdd3_img3->save();

        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '1 Тб']);
        $tag2 = new Tag(['tag_name' => "Тип жорсткого диска", 'tag' => 'Внутрішній']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'SATAIII']);
        $tag4 = new Tag(['tag_name' => "Форм-фактор", 'tag' => '3.5"']);
        $tag5 = new Tag(['tag_name' => "Швидкість обертання шпинделя", 'tag' => '7200']);
        $tag6 = new Tag(['tag_name' => "Швидкість передавання даних", 'tag' => '215 Мб/с']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag5->save();
        $tag6->save();
        $tag7->save();

        $hdd3->tags()->attach($tag0);
        $hdd3->tags()->attach($tag1);
        $hdd3->tags()->attach($tag2);
        $hdd3->tags()->attach($tag3);
        $hdd3->tags()->attach($tag4);
        $hdd3->tags()->attach($tag5);
        $hdd3->tags()->attach($tag6);
        $hdd3->tags()->attach($tag7);

        $hdd4 = new Product(['name' => 'Western Digital My Passport 4TB External Black',
            'quantity' => 15,
            'price' => 5199,
            'category_id' => $category7->id,
            'main_image' => 'Western Digital My Passport 4TB WDBPKJ0040BBK-WESN 2.5 USB 3.0 External Black.jpg',
            'small_image' => 'Western Digital My Passport 4TB WDBPKJ0040BBK-WESN 2.5 USB 3.0 External Black_s.jpg']);

        $hdd4->save();

        $hdd4_img1 = new Image([
            'image' => 'Western Digital My Passport 4TB WDBPKJ0040BBK-WESN 2.5 USB 3.0 External Black_1.jpg',
            'product_id' => $hdd4->id,
        ]);
        $hdd4_img2 = new Image([
            'image' => 'Western Digital My Passport 4TB WDBPKJ0040BBK-WESN 2.5 USB 3.0 External Black_2.jpg',
            'product_id' => $hdd4->id,
        ]);
        $hdd4_img3 = new Image([
            'image' => 'Western Digital My Passport 4TB WDBPKJ0040BBK-WESN 2.5 USB 3.0 External Black_3.jpg',
            'product_id' => $hdd4->id,
        ]);
        $hdd4_img1->save();
        $hdd4_img2->save();
        $hdd4_img3->save();

        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '4 Тб']);
        $tag2 = new Tag(['tag_name' => "Тип жорсткого диска", 'tag' => 'Зовнішній']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'USB 2.0 / 3.0']);
        $tag4 = new Tag(['tag_name' => "Форм-фактор", 'tag' => '2.5"']);
        $tag6 = new Tag(['tag_name' => "Швидкість передавання даних", 'tag' => '125 Мб/с']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag2->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();

        $hdd4->tags()->attach($tag0);
        $hdd4->tags()->attach($tag1);
        $hdd4->tags()->attach($tag2);
        $hdd4->tags()->attach($tag3);
        $hdd4->tags()->attach($tag4);
        $hdd4->tags()->attach($tag6);
        $hdd4->tags()->attach($tag7);

        $hdd5 = new Product(['name' => 'Seagate Game Drive for PlayStation 4 2TB 2.5 USB 3.0',
            'quantity' => 4,
            'price' => 2329,
            'category_id' => $category7->id,
            'main_image' => 'Seagate Game Drive for PlayStation 4 2TB STGD2000200 2.5 USB 3.0.jpg',
            'small_image' => 'Seagate Game Drive for PlayStation 4 2TB STGD2000200 2.5 USB 3.0_s.jpg']);

        $hdd5->save();

        $hdd5_img1 = new Image([
            'image' => 'Seagate Game Drive for PlayStation 4 2TB STGD2000200 2.5 USB 3.0_1.jpg',
            'product_id' => $hdd5->id,
        ]);
        $hdd5_img2 = new Image([
            'image' => 'Seagate Game Drive for PlayStation 4 2TB STGD2000200 2.5 USB 3.0_2.jpg',
            'product_id' => $hdd5->id,
        ]);
        $hdd5_img3 = new Image([
            'image' => 'Seagate Game Drive for PlayStation 4 2TB STGD2000200 2.5 USB 3.0_3.jpg',
            'product_id' => $hdd5->id,
        ]);
        $hdd5_img1->save();
        $hdd5_img2->save();
        $hdd5_img3->save();

        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '2 Тб']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'USB 3.0']);
        $tag4 = new Tag(['tag_name' => "Форм-фактор", 'tag' => '2.5"']);
        $tag6 = new Tag(['tag_name' => "Швидкість передавання даних", 'tag' => '125 Мб/с']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag3->save();
        $tag4->save();
        $tag6->save();
        $tag7->save();

        $hdd5->tags()->attach($tag0);
        $hdd5->tags()->attach($tag1);
        $hdd5->tags()->attach($tag2);
        $hdd5->tags()->attach($tag3);
        $hdd5->tags()->attach($tag4);
        $hdd5->tags()->attach($tag6);
        $hdd5->tags()->attach($tag7);

        $hdd6 = new Product(['name' => 'Transcend StoreJet 25M3S 2TB External Iron Gray',
            'quantity' => 9,
            'price' => 1419,
            'category_id' => $category7->id,
            'main_image' => 'Transcend StoreJet 25M3S 2TB TS2TSJ25M3S 2.5 USB 3.1 Gen 1 External Iron Gray.jpg',
            'small_image' => 'Transcend StoreJet 25M3S 2TB TS2TSJ25M3S 2.5 USB 3.1 Gen 1 External Iron Gray_s.jpg']);

        $hdd6->save();

        $hdd6_img1 = new Image([
            'image' => 'Transcend StoreJet 25M3S 2TB TS2TSJ25M3S 2.5 USB 3.1 Gen 1 External Iron Gray_1.jpg',
            'product_id' => $hdd6->id,
        ]);
        $hdd6_img2 = new Image([
            'image' => 'Transcend StoreJet 25M3S 2TB TS2TSJ25M3S 2.5 USB 3.1 Gen 1 External Iron Gray_2.jpg',
            'product_id' => $hdd6->id,
        ]);
        $hdd6_img3 = new Image([
            'image' => 'Transcend StoreJet 25M3S 2TB TS2TSJ25M3S 2.5 USB 3.1 Gen 1 External Iron Gray_3.jpg',
            'product_id' => $hdd6->id,
        ]);
        $hdd6_img1->save();
        $hdd6_img2->save();
        $hdd6_img3->save();

        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '2 Тб']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'USB 3.1']);
        $tag5 = new Tag(['tag_name' => "Швидкість обертання шпинделя", 'tag' => '5400']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '36 місяців']);

        $tag1->save();
        $tag3->save();
        $tag5->save();
        $tag7->save();

        $hdd6->tags()->attach($tag0);
        $hdd6->tags()->attach($tag1);
        $hdd6->tags()->attach($tag2);
        $hdd6->tags()->attach($tag3);
        $hdd6->tags()->attach($tag4);
        $hdd6->tags()->attach($tag5);
        $hdd6->tags()->attach($tag6);
        $hdd6->tags()->attach($tag7);

        $hdd7 = new Product(['name' => 'Seagate Expansion 4TB External Black',
            'quantity' => 7,
            'price' => 4699,
            'category_id' => $category7->id,
            'main_image' => 'Seagate Expansion 4TB STEA4000400 2.5 USB 3.0 External Black.jpg',
            'small_image' => 'Seagate Expansion 4TB STEA4000400 2.5 USB 3.0 External Black_s.jpg']);

        $hdd7->save();

        $hdd7_img1 = new Image([
            'image' => 'Seagate Expansion 4TB STEA4000400 2.5 USB 3.0 External Black_1.jpg',
            'product_id' => $hdd7->id,
        ]);
        $hdd7_img2 = new Image([
            'image' => 'Seagate Expansion 4TB STEA4000400 2.5 USB 3.0 External Black_2.jpg',
            'product_id' => $hdd7->id,
        ]);
        $hdd7_img3 = new Image([
            'image' => 'Seagate Expansion 4TB STEA4000400 2.5 USB 3.0 External Black_3.jpg',
            'product_id' => $hdd7->id,
        ]);
        $hdd7_img1->save();
        $hdd7_img2->save();
        $hdd7_img3->save();

        $tag1 = new Tag(['tag_name' => "Місткість накопичувача", 'tag' => '4 Тб']);
        $tag3 = new Tag(['tag_name' => 'Інтерфейс підключення', 'tag' => 'USB 3.0']);
        $tag7 = new Tag(['tag_name' => 'Гарантія', 'tag' => '24 місяців']);

        $tag1->save();
        $tag3->save();
        $tag7->save();

        $hdd7->tags()->attach($tag0);
        $hdd7->tags()->attach($tag1);
        $hdd7->tags()->attach($tag2);
        $hdd7->tags()->attach($tag3);
        $hdd7->tags()->attach($tag4);
        $hdd7->tags()->attach($tag6);
        $hdd7->tags()->attach($tag7);
    }
}
