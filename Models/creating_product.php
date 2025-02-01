<?php

if (!isset($_POST["name"]) || empty($_POST["name"]))
{
    die("You have incorrectly entered the information.");
}

if (!isset($_POST["description"]) || empty($_POST["description"]))
{
    die("You have incorrectly entered the information.");
}

if (!isset($_POST["price"]) || empty($_POST["price"]))
{
    die("You have incorrectly entered the information.");
}

if (!isset($_POST["image"]) || empty($_POST["image"]))
{
    die("You have incorrectly entered the information.");
}

if (!isset($_POST["quantity"]) || empty($_POST["quantity"]))
{
    die("You have incorrectly entered the information.");
}

$entered_name = $_POST["name"];
$entered_description = $_POST["description"];
$entered_price = $_POST["price"];
$entered_image = $_POST["image"];
$entered_quantity = $_POST["quantity"];

$base = mysqli_connect("localhost", "root", "", "web_shop");
$result = $base -> query("INSERT INTO products( name, description, price, image, quantity) VALUES('$entered_name', '$entered_description', $entered_price, '$entered_image', $entered_quantity)");



