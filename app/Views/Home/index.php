<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="/main/main.css">
    
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="/main/main.js"></script>
        <title>HOME-SHOFIX</title>
    </head>
    <style>
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
    </style>
    <script>
        window.onload = function() {
            <?php if (session()->getFlashdata('Update')) : ?>
                alert('<?php echo session()->getFlashdata('Update'); ?>');
            <?php elseif (session()->getFlashdata('Error')) : ?>
                alert('<?php echo session()->getFlashdata('Error'); ?>');
            <?php endif; ?>
        }
    </script>

<body id="body"> 
    <div class="mainui">

    <div class="menu"> 
    
    <img src= "/buttons/menu.png" class="menuimg" onclick="openmenu()">

      <div class="menucont" id="menucont"> <br><br>
        <a href="/Login" class="lgin"><p>Login</p></a>
        <hr >
        <p onclick="openabtus()" style="cursor: pointer;">AboutUs</p>
        <hr >
        <p onclick="openorderswin()" style="cursor: pointer;">Orders</p>
        <hr >xml_error_string
      </div>
<div onclick="closemenu()"   class="void" id="void" style=" z-index: 2; width: 500vw; height: 500vh;  position: absolute; display: none;"></div>
<div onclick="closecart()"  class="void" id="void1" style=" opacity: 0.5; background-color: black; z-index: 2; width: 500vw; height: 500vh;  position: absolute; display: none;"></div>
<div onclick="closeabtus()"  class="void" id="void2" style=" opacity: 0.5; background-color: black; z-index: 2; width: 500vw; height: 500vh;  position: absolute; display: none;"></div>
<div onclick="closeorderswin()"  class="void" id="void3" style=" opacity: 0.5; background-color: black; z-index: 2; width: 500vw; height: 500vh;  position: absolute; display: none;"></div>
<div id="orderswin" class="orders">
  <br>
  <span class="title">Orders</span>
  <hr>

  <li  class="limenuorders" >
    <ul id="torec" onclick="opentorecieve()">To Recieve</ul>
    <ul id="recorders" onclick="openrecorders()">Recieved Orders</ul>
    <ul id="trate" onclick="opentorate()">To Rate</ul>
    <ul id="hist" onclick="openhist()">History of Orders</ul> 
  </li>
<hr class="tabborder">

</div>



<div class="ordertab" id="torecieve">

1

</div>


<div class="ordertab" id="recievedorders">

  2 
  
  </div>
  


  <div class="ordertab" id="torate">

   3
    
    
    </div>
    <div class="ordertab" id="history">
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Order Date</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    // Filter orders to include only those with 'Pending' status

    $pendingOrders = array_filter($orders, function($order) {
        return isset($order['Status']) && $order['Status'] === 'Delivered';
    });
    if (!empty($pendingOrders)): ?>
        <?php foreach ($pendingOrders as $order): ?>
                <tr>
                    <td><?= esc($order['ProductID'])?></td>
                    <td><?= esc($order['OrderDate']) ?></td>
                    <td><?= esc($order['Price']) ?></td>
                    <td><?= esc($order['TotalQuantity']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No products found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
<div class="abtus" id="abtus">
    <br>
    <span class="title">About Us</span>
   <p class="aboutusp">
 Welcome to ShoFix, your one-stop online destination for all things fashion and lifestyle! At ShoFix, we believe that shopping should be a delightful and seamless experience, which is why we strive to bring you the latest trends, quality products, and unbeatable customer service all under one digital roof.
<br>
Our Mission
Our mission is simple, to make fashion accessible, affordable, and enjoyable for everyone. We are dedicated to providing a wide range of stylish and high-quality products that cater to diverse tastes and preferences, ensuring that you find exactly what you're looking for every time you visit our store.

What We Offer
At ShoFix, we offer an extensive selection of clothing, accessories, footwear from top brands and emerging designers. Whether you're looking for the perfect outfit for a special occasion, trendy accessories to complete your look.
    </p>

</div>
<div id="cart" class="cartwin" >
        
    <div class="poscart">

        <div class="cartitle">Cart</div>
            

        <div class="cartfooter">
            <a href="<?= base_url('/checkout')?>"><button class="chckout">Checkout</button></a>
        </div>
    </div>

<div class="cartprods">
<table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    // Filter orders to include only those with 'Pending' status

    $pendingOrders = array_filter($orders, function($order) {
        return isset($order['Status']) && $order['Status'] === 'Pending';
    });
    if (!empty($pendingOrders)): ?>
        <?php foreach ($pendingOrders as $order): ?>
                <tr>
                    <td><?= esc($order['ProductID'])?></td>
                    <td><?= esc($order['Price']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No products found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>


</div>
      </div>
    <div class="logocate"> 
<div class="logo">
<img src="/logo/logo3.png" class="logoimg">
<h2 style="margin-top: 7vh; font-size: clamp(4vw,4vw,4vw); font-weight:bolder; color: #5e6060;"> SHOFIX</h2>
</div>

    </div>


    <div class="cart"> 
        <img src="\buttons\cart.png"  class="menuimg" onclick="opencart()">
    </div>

    </div>

<div style="margin-top: 24.5vh;">
<div class="adsdiv">


    <div class="carousel">

    </div>


<div class="promo"> 
  <div class="promo1">


  </div>
 <div class="promo2">

</div>
 </div>
</div>
<center>
<div  class="prodslider">
<?php foreach ($products as $product): ?>
          <div class="cards">
            <div class="card">
              <div class="imgdiv"> <img src="<?= base_url('uploads/'.$product['Image'] )?>" class="prodimg"> </div>
                <div class="card-details">
                  <div class="prodinfs">
                    <p class="text-body" name = "productname"><?= esc($product['ProductName']) ?></p>
                  </div>  <hr>
                <p class="price" name = "price" id="price"><?= esc($product['Price']) ?></p>
            </div>
            <a class="card-button" href="<?= base_url('/order/add'.$product['ProductID']) ?>" >ADD TO CART</a>
          </div></div>
        <?php endforeach; ?></div>
</center>

</body>
</html>



