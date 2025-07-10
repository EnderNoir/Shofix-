<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Add Product</h1>
<form action="<?= base_url('/Admin/create')?>" method="POST" enctype="multipart/form-data">
        <label for="ProductName">Product</label>
        <input type="text" name="ProductName" id="ProductName"  >
        <label for="Description">Description</label>
        <textarea name="Description" id="Description" ></textarea>
        <label for="Category">Category</label>
        <select name="Category" id="Category">
            <option value="Accessories">Accessories</option>
            <option value="Cosmetics">Cosmetics</option>
            <option value="Footwear">Footwear</option>
            <option value="Gadgets">Gadgets</option>
            <option value="Bags">Bags</option>
            <option value="Dress">Dress</option>
            <option value="Pants">Pants</option>
            <option value="Perfume">Perfume</option>
            <option value="Shorts">Shorts</option>
            <option value="Tops">Tops</option>
        </select>
        <label for="Price">Price</label>
        <input type="number" name="Price" id ="Price" min = 0 >
        <label for="StockQuantity">StockQuantity</label>
        <input type="number" name="StockQuantity" id="StockQuantity" min = 0 >
        <label for="Image">Image</label>
        <input type="file" name="img" required>
        <button type="submit">Add</button>
</form>
        <a href="<?= url_to('Admin::index') ?>"><button>Back</button></a>
</body>
</html>