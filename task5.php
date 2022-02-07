<?php
$all_storage = [];
$storage = [
    ["name" => "подорожник", "type" => "herbal"],
    ["name" => "малина", "type" => "eatable"],
];
$plant = [

    ["name" => "ромашка", "type" => "herbal"],
    ["name" => "ромашка", "type" => "herbal"],
    ["name" => "банан", "type" => "herbal"],
    ["name" => "банан", "type" => "herbal"],
    ["name" => "банан", "type" => "herbal"],


];
foreach ($plant as $product) {

    if ($product["type"] == "herbal" || $product["type"] == "eatable") {
        array_push($all_storage, $product);
    }
}
echo "<pre>";
$all_storage = array_unique($all_storage, SORT_REGULAR);
print_r(array_merge($all_storage, $storage));
echo "</pre>";
