<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/admin/admin.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><h1 style="color: gray; float:left">Admin</h1></li>
                    <li><h2><img src="/logo/logo3.png" class="logoimg" alt="Logo"></h2></li>
                </ul>
            </nav>
        </div>
    </header>
    <style>
        body {
            color: white;
            background-color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 2px solid white;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #444;
        }
        a{
            color: white;
        }
        .addbtn{
            font-style: bold;
            margin: 5px 10px;
            padding: 10px 20px;
            background-color: green;
            border: black;
            cursor: pointer;
        }
        .editbtn{
            font-style: bold;
            margin: auto;
            padding: 10px;
            background-color: green;
            border: black;
            cursor: pointer;
        }
        .deletebtn{
            float: right;
            margin: auto;
            padding: 10px;
            background-color: red;
            border: black;
            cursor: pointer;
        }
    </style>
    <h1 style="text-align: center;">Product List</h1>
    <a href="/add"><button class="addbtn"><b>ADD</b></button></a>
    <a href="/"><button class="addbtn"><b>LOGOUT</b></button></a>
    <table>
        <thead>
            <tr>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Stock Quantity</th>
                <th>Photo</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($products) && is_array($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= esc($product['ProductID'])?></td>
                    <td><?= esc($product['ProductName']) ?></td>
                    <td><?= esc($product['Description']) ?></td>
                    <td><?= esc($product['Price']) ?></td>
                    <td><?= esc($product['Category']) ?></td>
                    <td><?= esc($product['StockQuantity']) ?></td>
                    <td><img src="<?= base_url("uploads/".$product['Image'])?>" height="100px" width="100px" alt="image"></td>
                    <td>
                        <a href="<?= base_url('/Admin/edit/' . $product['ProductID'] ) ?>" ><button class="editbtn"><b>EDIT</b></button></a>
                        <a href="<?= base_url('delete/' . $product['ProductID'] ) ?>" ><Button class="deletebtn"><b>DELETE</b></Button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">No products found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
