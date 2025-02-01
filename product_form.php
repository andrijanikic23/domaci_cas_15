<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action= "Models/creating_product.php">
        <input name = "name" type="text" placeholder = "Enter product name" required>
        <input name = "description" type="text" placeholder = "Enter product description" required>
        <input name = "price" type= "number" step = "0.01" placeholder = "Enter product price" required>
        <input name = "image" type="text" placeholder = "Enter product image" required>
        <input name = "quantity" type="number" placeholder = "Enter product quantity" required>
        <button>Enter product</button>
        
    </form>
    
</body>
</html>

