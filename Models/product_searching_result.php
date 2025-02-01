<?php

if (!isset($_GET["word"]) || empty($_GET["word"]))
{
    die("You have incorrectly entered the information.");
}

$base = mysqli_connect("localhost", "root", "", "web_shop");
$entered_word = $_GET["word"];

$result_name_description = $base -> query("SELECT * FROM products WHERE name LIKE '%$entered_word%' OR description LIKE '%$entered_word%'");

if ($result_name_description -> num_rows > 0)
{
    echo "Overall we find products: " .$result_name_description -> num_rows;
    $products_name = $result_name_description -> fetch_all(MYSQLI_ASSOC);
    foreach ($products_name as $product_name)
    {
        echo "<br>";
        echo "Name: " .$product_name["name"] . " Description:" .$product_name["description"]. "<br>";
    }
}
else
{
    echo "We haven't found any product by entered name.";
}

echo "<br>";







