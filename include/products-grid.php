<?php 
    include_once "./include/Product.php";

    $file = './products.json';
    $productJson = file_get_contents($file);
    $productsArr = json_decode($productJson);
    $productCards = [];

    foreach($productsArr as $products){
        foreach($products as $product){
            foreach($product as $prd){
                array_push($productCards, new Product($prd->id,$prd->name,$prd->desc,$prd->price,$prd->img,$prd->quantity));
            }
        }
    }
?>
<div class="products-grid">
    <?php 
        foreach($productCards as $pc){
            $pc->render();
        }
    ?>
</div>