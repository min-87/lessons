<?php
/*Задача. Создать каталог товаров, в котором будут описания, артикулы, цены.
Пользовватель в командной строке указывает артикулы(поле "id") - вы должны вывести товары по этим артикулам.
Например, php products.php D222, M833. Должен вывести 2 товара*/
$products=[
    array('id'=>'P465',
        'title'=>'laptop',
        'price'=>110,
        'color'=>'black',),
    array('id'=>'M833',
        'title'=>'phone',
        'price'=>30000,
        'color'=>'white',),
    array('id'=>'D222',
        'title'=>'tablet',
        'price'=>400,
        'color'=>'pink',)
];
/*if (isset($argv[1])){
    foreach ($argv as $articul){
        //Провести поиск по товарам
        foreach ($products as $product){
            if ($articul==$product['id']){
                print_r($product);
                echo PHP_EOL;
            }
        }
    }
}*/

/*Задача2. Создать каталог товаров, в котором будут описания, артикулы, цены.
Пользователь в командной строке указывает цены от и до - вы должны вывести товары, подходящие по цене.
Например, php products.php 100, 700. Должен вывести 2 товара*/
/*unset($argv[0]);
$max_price=0;
$min_price=$argv[1];
if (isset($argv[1]) && isset($argv[2])){
    foreach ($argv as $price){

        if ($price>$max_price){
            $max_price=$price;
        }
        if ($price<$min_price){
            $min_price=$price;
        }
    }
    echo "You can buy:";
    foreach ($products as $product){
        if ($product['price']>=$min_price && $product['price']<=$max_price){
            print_r($product);
            echo PHP_EOL;
        }
    }
}*/

/*Задача3. Найти товар с минимальной и максимальной ценой из массива $products*/

$max_price=0;
$max_price_key=0;
$min_price=$products[0]['price'];
$min_price_key=$products[0];

foreach ($products as $key=>$product){
    if ($product['price']>=$max_price){
        $max_price=$product['price'];
        $max_price_key=$key;
    }

    if ($product['price']<=$min_price){
        $min_price=$product['price'];
        $min_price_key=$key;
    }
}
print_r($products[$min_price_key]);
print_r($products[$max_price_key]);






